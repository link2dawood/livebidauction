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
define('InAdmin', 1);
include '../common.php';

// If user is not logged in redirect to login page
// $query = "SELECT * FROM " . $DBPrefix . "users WHERE is_floor =1 AND id = :user_id";
// 					$params = array();
// 					$params[] = array(':user_id', $_POST['user_id'], 'int');
// 					$db->query($query, $params);
// 		if ($db->numrows() < 1)
// 		{
// 			header('location: outstandings.php?id='.$_POST['user_id'].'');
// 			exit;
// 		}
$fees = new fees;

$paying_fee = true;
switch($_GET['a'])
{
	case 2: // pay for an item
		$query = "SELECT w.id as w_id, w.seller, w.tax_fee, a.title, a.shipping_cost, a.additional_shipping_cost, a.shipping, w.bid,w.buyer_fee,
				u.id As uid, u.nick, a.payment, w.qty
				FROM " . $DBPrefix . "winners w
				LEFT JOIN " . $DBPrefix . "auctions a ON (a.id = w.auction)
				LEFT JOIN " . $DBPrefix . "users u ON (u.id = w.seller)
				WHERE w.id = :pfval AND w.winner = :user_id";
		$params = array();
		$params[] = array(':pfval', $_POST['pfval'], 'int');
		$params[] = array(':user_id', $_POST['user_id'], 'int');
		$db->query($query, $params);

		// check its real
		if ($db->numrows() < 1)
		{
			header('location: outstandings.php?id='.$_POST['user_id'].'');
			exit;
		}
		$data = $db->result();		
		$query = "UPDATE " . $DBPrefix . "winners SET paid = 1 WHERE id = :custom_id";
				$params = array(
					array(':custom_id', $data['w_id'], 'int')
				);
				$db->query($query, $params);
				//Enable User
					$query = "UPDATE " . $DBPrefix . "users SET temp_suspended = 1 WHERE id = :user_id";
					$params = array();
					$params[] = array(':user_id', $_POST['user_id'], 'int');
					$db->query($query, $params);
		break;
		case 8: // floor bidder payment
// 		echo 'nomi';
// die();
			 //   echo 'nomi'; 	    die();
		$payvalue = $system->input_money($_POST['pfval']);
		$custom_id = $_POST['user_id'];
		$addquery = '';
				if ($system->SETTINGS['fee_disable_acc'] == 'y')
				{
					$query = "SELECT suspended, balance FROM " . $DBPrefix . "users WHERE id = :custom_id";
					$params = array(
						array(':custom_id', $custom_id, 'int')
					);
					$db->query($query, $params);
				// echo 'nomi';
				//     die();
					$data = $db->result();
					// reable user account if it was disabled
				// 	if ($data['suspended'] == 7 && ($data['balance'] + $payvalue) >= 0)
				// 	{
				// 		$addquery = 'suspended = 0 ';
				// 	}
				}
				$query = "UPDATE " . $DBPrefix . "users SET balance = :payment WHERE id = :user_id";
					
				// echo $query;
				// echo '<br>';
				$params[] = array(':payment', $payvalue, 'float');
				$params[] = array(':user_id', $custom_id, 'int');
				$db->query($query, $params);
				// add invoice
				// 	echo 'nomi';
				//     die();
				$query = "INSERT INTO " . $DBPrefix . "useraccounts (user_id, date, balance, total, paid) VALUES
						(:user_id, :time_stamp, :payment, :extra_payment, 1)";
				$params = array(
					array(':user_id', $custom_id, 'int'),
					array(':time_stamp', time(), 'int'),
					array(':payment', $payvalue, 'float'),
					array(':extra_payment', $payvalue, 'float')
				);
				
				// 	echo 'nomi';
				//     die();
				//$db->query($query, $params);
				// $query = "UPDATE " . $DBPrefix . "winners SET paid = 1 WHERE winner = :custom_id";
				// $params = array(
				// 	array(':custom_id', $custom_id, 'int')
				// );
				// $db->query($query, $params);
		break;
		
}
header('location: outstandings.php?id='.$_POST['user_id'].'');