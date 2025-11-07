<?php
/***************************************************************************
 *   copyright				: (C) 2008 - 2016 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/
// error_reporting('0');
include 'common.php';
include INCLUDE_PATH . 'config/timezones.php';
include INCLUDE_PATH . 'config/gateways.php';

session_start();

// check registration is enabled
if ($system->SETTINGS['registration_enabled'] == 0)
{
	header('Location:register.php');
	exit;
}
// check recaptcha is enabled
if ($system->SETTINGS['spam_register'] == 2)
{
 	include PACKAGE_PATH . 'recaptcha/recaptcha.php';
}
elseif ($system->SETTINGS['spam_register'] == 1)
{
// 	include PACKAGE_PATH . 'captcha/securimage.php';
}

function CheckAge($day, $month, $year) // check if the users > 18
{
	$NOW_year = date('Y');
	$NOW_month = date('m');
	$NOW_day = date('d');

	if (((int)$NOW_year - (int)$year) > 18)
	{
		return 1;
	}
	elseif ((($NOW_year - $year) == 18) && ($NOW_month > $month))
	{
		return 1;
	}
	elseif ((($NOW_year - $year) == 18) && ($NOW_month == $month) && ($NOW_day >= $day))
	{
		return 1;
	}
	else
	{
		return 0;
	}
}


function get_hash()
{
	$string = '0123456789abcdefghijklmnopqrstuvyxz';
	$hash = '';
	for ($i = 0; $i < 5; $i++)
	{
		$rand = rand(0, (34 - $i));
		$hash .= $string[$rand];
		$string = str_replace($string[$rand], '', $string);
	}
	return $hash;
}

function generateSelect($name, $options, $selectsetting)
{
	$html = '<select name="' . $name . '">';
	foreach ($options as $option => $value)
	{
		if ($selectsetting == $option)
		{
			$html .= '<option value=' . $option . ' selected>' . $value . '</option>';
		}
		else
		{
			$html .= '<option value=' . $option . '>' . $value . '</option>';
		}
	}
	$html .= '</select>';
	return $html;
}

// // Generate math CAPTCHA if spam protection is enabled
// if ($system->SETTINGS['spam_register'] == 1) {
//     // Generate two random numbers for the math question
//     $num1 = rand(1, 10);
//     $num2 = rand(1, 10);
//     $_SESSION['captcha_answer'] = $num1 + $num2; // Store the correct answer in the session

//     // HTML for the CAPTCHA question
//     $spam_html = '<label for="captcha_code">Solve this: ' . $num1 . ' + ' . $num2 . ' = </label>';
//     $spam_html .= '<input type="text" name="captcha_code" id="captcha_code" required>';
// }


function checkMissing ($missing)
{
	foreach ($missing as $value)
	{
		if ($value)
		{
			return true;
		}
	}
	return false;
}

function checkEmail($email)
{
	global $system;
	if ($system->SETTINGS['spam_blocked_email_enabled'])
	{
		$exploded_email = explode('@', $email);
    	$email_domain = trim(array_pop($exploded_email));
		$blocked_emails = explode("\n", $system->SETTINGS['spam_blocked_email_domains']);

		return !contains($email_domain, $blocked_emails);
	}
	return true;
}

function contains($str, array $arr)
{
    foreach($arr as $a)
    {
        if (stripos($str, $a) !== false)
    	{
    		return true;
    	}
    }
    
    return false;
}

$first = true;
unset($ERR);


if (empty($_POST['action']))
{
	$action = 'first';
}

$query = "SELECT * FROM " . $DBPrefix . "payment_options WHERE is_gateway = 1";
$db->direct_query($query);
$gateway_data = $db->fetchAll();

// Retrieve users signup settings
$MANDATORY_FIELDS = unserialize($system->SETTINGS['mandatory_fields']);
$DISPLAYED_FIELDS = unserialize($system->SETTINGS['displayed_feilds']);

$spam_html = '';

if ($system->SETTINGS['spam_register'] == 1)
{
	$resp = new Securimage();
	$spam_html = $resp->getCaptchaHtml();
}

$blocked_domains = [
    'tobu-wedding.com',
    'wedding.com',
    '1secmail.net',
    '1sec.net',
    'mail.net',
    'poochta.com',
    'nvecloud.us',
    'unblockedgamester.com'
];



// missing check bools
$missing = array();
$missing['birthday'] = $missing['address'] = $missing['city'] = $missing['prov'] = $missing['country'] = $missing['zip'] = $missing['tel'] = $missing['paypal'] = $missing['authnet'] = $missing['worldpay'] = $missing['toocheckout'] = $missing['moneybookers'] = $missing['name'] = $missing['nick'] = $missing['password'] = $missing['repeat_password'] = $missing['email'] = false;
if (isset($_POST['action']) && $_POST['action'] == 'first')
{
    if (!empty($_POST['namepo'])) {
        $ERR = 'Spam detected.';
    }

    // Verify the CAPTCHA answer
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['captcha_code']) && $_POST['captcha_code'] == $_SESSION['captcha_answer']) {
        // CAPTCHA is correct, proceed with the registration
    } else {
        // CATCHA is incorrect, show an error
      $ERR = '<span>Invalid Captcha</span>';
    }
    
                        $email = $_POST['TPL_email']; // User's email input
        $other_email = $_POST['other_email'];
        
        // Check if the emails match
        if ($other_email != $email) {
            $ERR = "Email does not match";
        }
        
        // Blocked domain patterns
        $blocked_domains = ['wedding.com', 'tobu-wedding.com', '1secmail.net', 'poochta.com', 'nvecloud.us', 'unblockedgamester.com'];
        
        // Extract domain from email
        $email_domain = substr(strrchr($email, "@"), 1);
        
        // Check if the email ends with a blocked domain
        foreach ($blocked_domains as $domain) {
            // Use substr_compare as an alternative to str_ends_with
            if (substr_compare($email_domain, $domain, -strlen($domain)) === 0) {
                die("We do not accept email addresse. Please use a different email.");
            }
        }
        
                // Blocked domain patterns (base keywords and full domains to block)
        $blocked_patterns = ['1sec', 'wedding', 'tobu', 'unblockedgamester', 'nvecloud', 'poochta'];
        
        // Extract domain from email
        $email_domain = substr(strrchr($email, "@"), 1);
        
        // Check if the domain contains any blocked patterns
        foreach ($blocked_patterns as $pattern) {
            if (stripos($email_domain, $pattern) !== false) {
                die("We do not accept email addresses from domains. Please use a different email.");
            }
        }
        // Block any email with a dot before the '@' symbol
        if (preg_match('/\./', strstr($email, '@', true))) {
            die("Invalid email");
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email: Please enter a valid email address.");
        }
        
       $recaptchaSecret = '6LclVMEqAAAAAEY1X1NmLz_5aQP5ZZJZ-q7Cf9PL'; // Replace with your secret key
        $recaptchaResponse = $_POST['g-recaptcha-response'];
        
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
            'remoteip' => $_SERVER['REMOTE_ADDR'],
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        
        if (curl_errno($ch)) {
            echo "cURL error: " . curl_error($ch);
            curl_close($ch);
            exit;
        }
        
        curl_close($ch);
        
        $response = json_decode($result, true);
        
        if ($response['success']) {
            if ($response['score'] >= 0.5) {
                
            } else {
                echo "Validation Failed: Score too low (" . $response['score'] . ")";
            }
        } else {
            $ERR =  "reCAPTCHA verification failed.";
        }





}
	if (!isset($_POST['terms_check']))
	{
		$ERR = $ERR_078;
	}
	if (empty($_POST['TPL_name']))
	{
		$missing['name'] = true;
	}
	if (empty($_POST['TPL_nick']))
	{
		$missing['nick'] = true;
	}
	if (empty($_POST['TPL_password']))
	{
		$missing['password'] = true;
	}
	if (empty($_POST['TPL_repeat_password']))
	{
		$missing['repeat_password'] = true;
	}
	if (empty($_POST['TPL_email']))
	{
		$missing['email'] = true;
	}
	if (empty($_POST['TPL_address']) && $MANDATORY_FIELDS['address'] == 'y')
	{
		$missing['address'] = true;
	}
	if (empty($_POST['TPL_city']) && $MANDATORY_FIELDS['city'] == 'y')
	{
		$missing['city'] = true;
	}
	if (empty($_POST['TPL_prov']) && $MANDATORY_FIELDS['prov'] == 'y')
	{
		$missing['prov'] = true;
	}
	if (empty($_POST['TPL_country']) && $MANDATORY_FIELDS['country'] == 'y')
	{
		$missing['country'] = true;
	}
	if (empty($_POST['TPL_zip']) && $MANDATORY_FIELDS['zip'] == 'y')
	{
		$missing['zip'] = true;
	}
	if (empty($_POST['TPL_phone']) && $MANDATORY_FIELDS['tel'] == 'y')
	{
		$missing['tel'] = true;
	}
	if ((empty($_POST['TPL_day']) || empty($_POST['TPL_month']) || empty($_POST['TPL_year'])) && $MANDATORY_FIELDS['birthdate'] == 'y')
	{
		$missing['birthday'] = true;
	}
	foreach ($gateway_data as $gateway)
	{
		if ($gateway['gateway_required'] == 1 && isset($_POST[$gateway['name']]['address']) && empty($_POST[$gateway['name']]['address']))
		{
			$missing[$gateway['name']] = true;
		}
	}
	if (checkMissing($missing))
	{
		$ERR = $ERR_047;
	}
	if ($system->SETTINGS['wordsfilter'] == 'y')
	{
		if (empty($system->filter($_POST['TPL_nick'])))
		{
			$ERR = $MSG['wordfilter_banned_username']; // User name altered by word filter
		}
	}
	if (!isset($ERR))
	{
		$birth_day = (isset($_POST['TPL_day'])) ? $_POST['TPL_day'] : '';
		$birth_month = (isset($_POST['TPL_month'])) ? $_POST['TPL_month'] : '';
		$birth_year = (isset($_POST['TPL_year'])) ? $_POST['TPL_year'] : '';
		$DATE = $birth_year . $birth_month . $birth_day;

// 		if ($system->SETTINGS['spam_register'] == 2)
// 		{
// 			$recaptcha_response = (isset($_POST['g-recaptcha-response'])) ? $_POST['g-recaptcha-response'] : '';
// 			$resp = recaptcha_check_answer($system->SETTINGS['recaptcha_private'], $recaptcha_response);
// 		}

// 		if ($system->SETTINGS['spam_register'] == 2 && !$resp)
// 		{
// 			$ERR = $MSG['752'];
// 		}
// // 		elseif ($system->SETTINGS['spam_register'] == 1 && !$resp->check($_POST['captcha_code']))
// // 		{
// // 			$ERR = $MSG['752'];
// // 		}
// 		else
if (strlen($_POST['TPL_nick']) < 6)
		{
			$ERR = $ERR_107;
		}
		elseif (strlen ($_POST['TPL_password']) < 6)
		{
			$ERR = $ERR_108;
		}
		elseif ($_POST['TPL_password'] != $_POST['TPL_repeat_password'])
		{
			$ERR = $ERR_109;
		}
		elseif (strlen($_POST['TPL_email']) < 5)
		{
			$ERR = $ERR_110;
		}
		elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+([\.][a-z0-9-]+)+$/i', $_POST['TPL_email']))
		{
			$ERR = $ERR_008;
		}
		elseif (!checkEmail($_POST['TPL_email']))
		{
			$ERR = $MSG['spam_blocked_email_domains_register_error'];
		}
		elseif (!CheckAge($birth_day, $birth_month, $birth_year) && $MANDATORY_FIELDS['birthdate'] == 'y')
		{
			$ERR = $ERR_113;
		}
		elseif (!empty($birth_month) && !empty($birth_day) && !empty($birth_year) && !checkdate($birth_month, $birth_day, $birth_year))
		{
			$ERR = $ERR_117;
		}
		else
		{
			// check username is unique
			$query = "SELECT nick FROM " . $DBPrefix . "users WHERE nick = :name";
			$params = array();
			$params[] = array(':name', $system->cleanvars($_POST['TPL_nick']), 'str');
			$db->query($query, $params);
			if ($db->numrows() > 0)
			{
				$ERR = $ERR_111; // Selected user already exists
			}
			// check email is unique
			$query = "SELECT email FROM " . $DBPrefix . "users WHERE email = :email";
			$params = array();
			$params[] = array(':email', $system->cleanvars($_POST['TPL_email']), 'str');
			$db->query($query, $params);
			if ($db->numrows() > 0)
			{
				$ERR = $ERR_115; // E-mail already used
			}

			if (!isset($ERR))
			{
				$TPL_nick_hidden = $_POST['TPL_nick'];
				$TPL_password_hidden = $_POST['TPL_password'];
				$TPL_name_hidden = $_POST['TPL_name'];
				$TPL_email_hidden = $_POST['TPL_email'];
				$SUSPENDED = ($system->SETTINGS['activationtype'] == 2) ? 0 : 8;
				$SUSPENDED = ($system->SETTINGS['activationtype'] == 0) ? 10 : $SUSPENDED;

				$query = "SELECT value FROM " . $DBPrefix . "fees WHERE type = 'signup_fee'";
				$db->direct_query($query);
				$signup_fee = $db->result('value');
				if ($system->SETTINGS['fee_type'] == 2 && $signup_fee > 0)
				{
					$SUSPENDED = 9;
					$query = "UPDATE " . $DBPrefix . "counters SET inactiveusers = inactiveusers + 1";
					$db->direct_query($query);
				}
				elseif ($system->SETTINGS['activationtype'] == 1 || $system->SETTINGS['activationtype'] == 0)
				{
					$query = "UPDATE " . $DBPrefix . "counters SET inactiveusers = inactiveusers + 1";
					$db->direct_query($query);
				}
				else
				{
					$query = "UPDATE " . $DBPrefix . "counters SET users = users + 1";
					$db->direct_query($query);
				}
				$balance = ($system->SETTINGS['fee_type'] == 2) ? 0 : ($system->SETTINGS['fee_signup_bonus'] - $signup_fee);

				$query = "SELECT id FROM " . $DBPrefix . "groups WHERE auto_join = 1";
				$db->direct_query($query);
				$groups = array();
				while ($row = $db->fetch())
				{
					$groups[] = $row['id'];
				}
				$hash = get_hash();
				// prepare to hash the password
				include PACKAGE_PATH . 'PasswordHash.php';
				$phpass = new PasswordHash(8, false);
				$query = "INSERT INTO " . $DBPrefix . "users
						(`nick`, `password`, `hash`, `name`, `address`, `city`, `prov`, `country`, `zip`, `phone`, `nletter`, `email`, `reg_date`, `birthdate`,
						`suspended`, `language`, `groups`, `balance`, `timezone`)
						VALUES
						(:nick, :password, :hash, :name, :address, :city, :prov, :country, :zip, :phone, :nletter, :email, :reg_date, :birthdate,
						:suspended, :language, :groups, :balance, :timezone)";
				$params = array(
					array(':nick', $system->cleanvars($TPL_nick_hidden), 'str'),
					array(':password', $phpass->HashPassword($TPL_password_hidden), 'str'),
					array(':hash', $hash, 'str'),
					array(':name', $system->cleanvars($TPL_name_hidden), 'str'),
					array(':address', $system->cleanvars((isset($_POST['TPL_address'])) ? $_POST['TPL_address'] : ''), 'str'),
					array(':city', $system->cleanvars((isset($_POST['TPL_city'])) ? $_POST['TPL_city'] : ''), 'str'),
					array(':prov', $system->cleanvars((isset($_POST['TPL_prov'])) ? $_POST['TPL_prov'] : ''), 'str'),
					array(':country', $system->cleanvars((isset($_POST['TPL_country'])) ? $_POST['TPL_country'] : ''), 'str'),
					array(':zip', $system->cleanvars((isset($_POST['TPL_zip'])) ? $_POST['TPL_zip'] : ''), 'str'),
					array(':phone', $system->cleanvars((isset($_POST['TPL_phone'])) ? $_POST['TPL_phone'] : ''), 'str'),
					array(':nletter', $_POST['TPL_nletter'], 'int'),
					array(':email', $system->cleanvars($_POST['TPL_email']), 'str'),
					array(':reg_date', time(), 'int'),
					array(':birthdate', ((!empty($DATE)) ? $DATE : 0), 'str'),
					array(':suspended', $SUSPENDED, 'int'),
					array(':language', $language, 'str'),
					array(':groups', implode(',', $groups), 'str'),
					array(':balance', $balance, 'float'),
					array(':timezone', $_POST['TPL_timezone'], 'str')
				);
				$db->query($query, $params, $test = true);
			//	var_dump($db->error_handler($query)); exit;
				$TPL_id_hidden = $db->lastInsertId();
				$query = "INSERT INTO " . $DBPrefix . "usersips VALUES
							(NULL, :id_hidden, :remote_addr, 'first', 'accept')";
				$params = array();
				$params[] = array(':id_hidden', $TPL_id_hidden, 'int');
				$params[] = array(':remote_addr', $_SERVER['REMOTE_ADDR'], 'str');
				$db->query($query, $params);
				foreach ($gateway_data as $gateway)
				{
					if (isset($_POST[$gateway['name']]['address']) && empty($_POST[$gateway['name']]['address']))
					{
						$query = "INSERT INTO " . $DBPrefix . "usergateways (gateway_id, user_id, address, password) VALUES (:gateway_id, :user_id, :address, :password)";
						$params = array(
							array(':user_id', $TPL_id_hidden, 'int'),
							array(':gateway_id', $gateway['id'], 'int'),
							array(':address', ((isset($_POST[$gateway['name']]['address'])) ? $system->cleanvars($_POST[$gateway['name']]['address']) : ''), 'str'),
							array(':password', ((isset($_POST[$gateway['name']]['password'])) ? $system->cleanvars($_POST[$gateway['name']]['password']) : ''), 'str'),
						);
					}
				}

				$_SESSION['language'] = $language;
				$first = false;

				if (defined('TrackUserIPs'))
				{
					// log registration IP
					$system->log('user', 'Registered User', $TPL_id_hidden);
				}

				// send emails
				if ($system->SETTINGS['activationtype'] == 0)
				{
					require_once INCLUDE_PATH . 'email/user_needapproval.php';
					$TPL_message = $MSG['016_a'];
				}
				elseif ($system->SETTINGS['activationtype'] == 1)
				{
					require_once INCLUDE_PATH . 'email/user_confirmation.php';
					$TPL_message = sprintf($MSG['016'], $TPL_email_hidden, $system->SETTINGS['sitename']);
				}
				else
				{
					$USER = array('name' => $TPL_name_hidden, 'email' => $_POST['TPL_email']);
					require_once INCLUDE_PATH . 'email/user_approved.php';
					$TPL_message = $MSG['016_b'];
				}

				if ($system->SETTINGS['fee_type'] == 2 && $signup_fee > 0)
				{
					$_SESSION['signup_id'] = intval($TPL_id_hidden);
					header('location: pay.php?a=3');
					exit;
				}

				$template->assign_vars(array(
						'L_HEADER' => sprintf($MSG['859'], $TPL_name_hidden),
						'L_MESSAGE' => $TPL_message
						));
			}
		}
	}
}

$query = "SELECT value FROM " . $DBPrefix . "fees WHERE type = 'signup_fee'";
$db->direct_query($query);
$signup_fee = $db->result('value');

$country_dropdown = '';

$selcountry = isset($_POST['TPL_country']) ? $_POST['TPL_country'] : '';

$query = "SELECT country_id, country FROM " . $DBPrefix . "countries";
$db->direct_query($query);
$countries = $db->fetchall();

foreach($countries as $country)
{
	$country_dropdown .= '<option value="' . $country['country'] . '"';
	if ($country['country'] == $selcountry)
	{
		$country_dropdown .= ' selected';
	}
	elseif ($system->SETTINGS['defaultcountry'] == $country['country'])
	{
		$country_dropdown .= ' selected';
	}
	$country_dropdown .= '>' . $country['country'] . '</option>' . "\n";
}

$dobclass = ($missing['birthday']) ? ' class="missing"' : '';
$dobmonth = '<select name="TPL_month"' . $dobclass . '>
		<option value="00"></option>
		<option value="01"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '01') ? ' selected' : '') . '>' . $MSG['MON_001E'] . '</option>
		<option value="02"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '02') ? ' selected' : '') . '>' . $MSG['MON_002E'] . '</option>
		<option value="03"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '03') ? ' selected' : '') . '>' . $MSG['MON_003E'] . '</option>
		<option value="04"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '04') ? ' selected' : '') . '>' . $MSG['MON_004E'] . '</option>
		<option value="05"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '05') ? ' selected' : '') . '>' . $MSG['MON_005E'] . '</option>
		<option value="06"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '06') ? ' selected' : '') . '>' . $MSG['MON_006E'] . '</option>
		<option value="07"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '07') ? ' selected' : '') . '>' . $MSG['MON_007E'] . '</option>
		<option value="08"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '08') ? ' selected' : '') . '>' . $MSG['MON_008E'] . '</option>
		<option value="09"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '09') ? ' selected' : '') . '>' . $MSG['MON_009E'] . '</option>
		<option value="10"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '10') ? ' selected' : '') . '>' . $MSG['MON_010E'] . '</option>
		<option value="11"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '11') ? ' selected' : '') . '>' . $MSG['MON_011E'] . '</option>
		<option value="12"' . ((isset($_POST['TPL_month']) && $_POST['TPL_month'] == '12') ? ' selected' : '') . '>' . $MSG['MON_012E'] . '</option>
	</select>';
$dobday = '<select name="TPL_day"' . $dobclass . '>
		<option value=""></option>';
for ($i = 1; $i <= 31; $i++)
{
	$j = (strlen($i) == 1) ? '0' . $i : $i;
	$dobday .= '<option value="' . $j . '"' . ((isset($_POST['TPL_day']) && $_POST['TPL_day'] == $j) ? ' selected' : '') . '>' . $j . '</option>';
}
$dobday .= '</select>';

$selectsetting = (isset($_POST['TPL_timezone'])) ? $_POST['TPL_timezone'] : $system->SETTINGS['timezone'];
$time_correction = generateSelect('TPL_timezone', $timezones, $selectsetting);

foreach ($gateway_data as $gateway)
{
	if ($gateway['gateway_active'])
	{
		$template->assign_block_vars('gateways', array(
				'GATEWAY_ID' => $gateway['id'],
				'NAME' => $gateway['displayname'],
				'PLAIN_NAME' => $gateway['name'],
				'MISSING' => ($missing[$gateway['name']]) ? 1 : 0,
				'REQUIRED' => ($gateway['gateway_required'] == 1) ? 'checked' : '',
				'ADDRESS' => isset($_POST[$gateway['name']]['address']) ? $_POST[$gateway['name']]['address'] : '',
				'PASSWORD' => isset($_POST[$gateway['name']]['password']) ? $_POST[$gateway['name']]['password'] : '',
				'ADDRESS_NAME' => isset($address_string[$gateway['name']]) ? $address_string[$gateway['name']] : $gateway['name'],
				'PASSWORD_NAME' => isset($password_string[$gateway['name']]) ? $password_string[$gateway['name']] : '',
				'ERROR_STRING' => $error_string[$gateway['name']],

				'B_PASSWORD' => isset($password_string[$gateway['name']])
				));
	}
}

// Generate two random numbers for the math question
$num1 = rand(1, 10);
$num2 = rand(1, 10);

// Randomly decide whether the operation is addition or multiplication
$operation = rand(0, 1) ? '+' : '*';

// Store the correct answer in the session based on the operation
if ($operation === '+') {
    $_SESSION['captcha_answer'] = $num1 + $num2;
} else {
    $_SESSION['captcha_answer'] = $num1 * $num2;
}

// HTML for the CAPTCHA question
$captcha_html = '<label for="captcha_code">Solve this: <br/>' . $num1 . ' ' . $operation . ' ' . $num2 . ' </label>';
$captcha_html .= '<input type="text" name="captcha_code" id="captcha_code" required placeholder="?">';

$template->assign_vars(array(
		'ERROR' => (isset($ERR)) ? $ERR : '',
		'ali' => $captcha_html,
		'er' => $er,
		'L_COUNTRIES' => $country_dropdown,
		'L_DATEFORMAT' => ($system->SETTINGS['datesformat'] == 'USA') ? $dobmonth . ' ' . $dobday : $dobday . ' ' . $dobmonth,
		'TIMEZONE' => $time_correction,
		'TERMSTEXT' => $system->SETTINGS['termstext'],

		'B_ADMINAPROVE' => ($system->SETTINGS['activationtype'] == 0),
		'B_NLETTER' => ($system->SETTINGS['newsletter'] == 1),
		'B_FIRST' => $first,
		'B_FEES' => ($signup_fee > 0),

		'CAPTCHATYPE' => $system->SETTINGS['spam_register'],
		'CAPCHA' => ($system->SETTINGS['spam_register'] == 2) ? recaptcha_get_html($system->SETTINGS['recaptcha_public']) : $spam_html,
		'BIRTHDATE' => ($DISPLAYED_FIELDS['birthdate_regshow'] == 'y'),
		'ADDRESS' => ($DISPLAYED_FIELDS['address_regshow'] == 'y'),
		'CITY' => ($DISPLAYED_FIELDS['city_regshow'] == 'y'),
		'PROV' => ($DISPLAYED_FIELDS['prov_regshow'] == 'y'),
		'COUNTRY' => ($DISPLAYED_FIELDS['country_regshow'] == 'y'),
		'ZIP' => ($DISPLAYED_FIELDS['zip_regshow'] == 'y'),
		'TEL' => ($DISPLAYED_FIELDS['tel_regshow'] == 'y'),
		'REQUIRED' => array(
					($MANDATORY_FIELDS['birthdate'] == 'y') ? ' *' : '',
					($MANDATORY_FIELDS['address'] == 'y') ? ' *' : '',
					($MANDATORY_FIELDS['city'] == 'y') ? ' *' : '',
					($MANDATORY_FIELDS['prov'] == 'y') ? ' *' : '',
					($MANDATORY_FIELDS['country'] == 'y') ? ' *' : '',
					($MANDATORY_FIELDS['zip'] == 'y') ? ' *' : '',
					($MANDATORY_FIELDS['tel'] == 'y') ? ' *' : ''
					),
		'MISSING0' => ($missing['name']) ? 1 : 0,
		'MISSING1' => ($missing['nick']) ? 1 : 0,
		'MISSING2' => ($missing['password']) ? 1 : 0,
		'MISSING3' => ($missing['repeat_password']) ? 1 : 0,
		'MISSING4' => ($missing['email']) ? 1 : 0,
		'MISSING5' => ($missing['birthday']) ? 1 : 0,
		'MISSING6' => ($missing['address']) ? 1 : 0,
		'MISSING7' => ($missing['city']) ? 1 : 0,
		'MISSING8' => ($missing['prov']) ? 1 : 0,
		'MISSING9' => ($missing['country']) ? 1 : 0,
		'MISSING10' => ($missing['zip']) ? 1 : 0,
		'MISSING11' => ($missing['tel']) ? 1 : 0,
		'FEES'=> $system->print_money($signup_fee),

		'V_YNEWSL' => ((isset($_POST['TPL_nletter']) && $_POST['TPL_nletter'] == 1) || !isset($_POST['TPL_nletter'])) ? 'checked=true' : '',
		'V_NNEWSL' => (isset($_POST['TPL_nletter']) && $_POST['TPL_nletter'] == 2) ? 'checked=true' : '',
		'V_YNAME' => (isset($_POST['TPL_name'])) ? $_POST['TPL_name'] : '',
		'V_UNAME' => (isset($_POST['TPL_nick'])) ? $_POST['TPL_nick'] : '',
		'V_EMAIL' => (isset($_POST['TPL_email'])) ? $_POST['TPL_email'] : '',
		'V_YEAR' => (isset($_POST['TPL_year'])) ? $_POST['TPL_year'] : '',
		'V_ADDRE' => (isset($_POST['TPL_address'])) ? $_POST['TPL_address'] : '',
		'V_CITY' => (isset($_POST['TPL_city'])) ? $_POST['TPL_city'] : '',
		'V_PROV' => (isset($_POST['TPL_prov'])) ? $_POST['TPL_prov'] : '',
		'V_POSTCODE' => (isset($_POST['TPL_zip'])) ? $_POST['TPL_zip'] : '',
		'V_PHONE' => (isset($_POST['TPL_phone'])) ? $_POST['TPL_phone'] : ''
		));
		


include 'header.php';
$template->set_filenames(array(
		'body' => 'registerlivebid.tpl'
		));
$template->display('body');
include 'footer.php';