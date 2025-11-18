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

include 'common.php';
include INCLUDE_PATH . 'functions_invoices.php';

$fromadmin = true;
$winner_label = '';
// first check if from admin
if (!(isset($_GET['hash']) && isset($_SESSION['INVOICE_RETURN']) && in_array($_SESSION['INVOICE_RETURN'], array('admin/invoice.php', 'admin/outstandings.php')) && $_GET['hash'] == $_SESSION['WEBID_ADMIN_NUMBER']))
{
	$fromadmin = false;
	// If user is not logged in redirect to login page
	if (!$user->checkAuth())
	{
		$_SESSION['LOGIN_MESSAGE'] = $MSG['5000'];
		header('location: user_login.php');
		exit;
	}
}

// is this an auction invoice or fee invoice
$auction = false;
if (isset($_POST['pfval']) && isset($_POST['pfwon']))
{
	$auction = true;
	// check input data
	if (intval($_POST['pfval']) == 0 || intval($_POST['pfwon']) == 0)
	{
		invalidinvoice();
	}
}
else
{
	// check input data
	if (intval($_GET['id']) == 0 || !isset($_GET['id']))
	{
		invalidinvoice();
	}
}

$vat = 20; // set default
if ($auction)
{
	// get auction data
	$query = "SELECT a.id, w.winner,w.tax_id, w.tax_fee, u.is_floor, w.closingdate As date, w.auc_title,w.buyer_fee, w.auc_shipping_cost, w.auction AS auc_id, a.title, a.shipping_cost, a.additional_shipping_cost, a.shipping, a.shipping_terms, w.bid, w.qty, w.seller As seller_id, a.tax, a.taxinc
			FROM " . $DBPrefix . "winners w
			LEFT JOIN " . $DBPrefix . "auctions a ON (a.id = w.auction)
			LEFT JOIN " . $DBPrefix . "users u ON (w.winner = u.id)
			WHERE a.id = :auc_id AND w.id = :winner_id";
	$params = array();
	$params[] = array(':auc_id', $_POST['pfval'], 'int');
	$params[] = array(':winner_id', $_POST['pfwon'], 'int');
	$db->query($query, $params);
// 	echo '<pre>';
//     print_r($db->fetch());
//     die();
	// check its real
	if ($db->numrows() < 1)
	{
		invalidinvoice();
	}

	$data = $db->result();

	// do you have permission to view this?
	if (!$fromadmin && $data['seller_id'] != $user->user_data['id'] && $data['winner'] != $user->user_data['id'])
	{
		invalidinvoice();
	}

	// Get the actual winner from the highest bid (this is what gets updated when admin enters floor bidder)
	$query = "SELECT b.bidder, u.nick FROM " . $DBPrefix . "bids b
			LEFT JOIN " . $DBPrefix . "users u ON (b.bidder = u.id)
			WHERE b.auction = :auc_id ORDER BY b.bid DESC, b.quantity DESC, b.id DESC LIMIT 1";
	$params = array();
	$params[] = array(':auc_id', $_POST['pfval'], 'int');
	$db->query($query, $params);
	$actual_winner_id = $data['winner']; // fallback to winners table
	if ($db->numrows() > 0)
	{
		$bid_winner = $db->result();
		$actual_winner_id = $bid_winner['bidder'];
	}

	// sort out auction data
	$seller = getSeller($data['seller_id']);
	$winner = getAddressWinner($actual_winner_id);
	// Show the user ID (what was entered/assigned), not the nickname
	$winner_label = $actual_winner_id;
	$vat = getTax(true, $winner['country'], $seller['country']);
	$title = $system->SETTINGS['sitename'] . ' - ' . htmlspecialchars($data['title']);
	$additional_shipping = $data['additional_shipping_cost'] * ($data['qty'] - 1);
	$shipping_cost = ($data['shipping'] == 1) ? ($data['shipping_cost'] + $additional_shipping) : 0;
	$paysubtotal = ($data['bid'] * $data['qty']);

	$buyer_fee = $data['buyer_fee'];
	
		if($buyer_fee == null ){
		   $bid = $data['bid'];
$buyer_fee = $bid * 0.15; // 15% of bid
// echo $percentage;
// die();
	   // $buyer_fee =
	}
	$tax_fee = $data['tax_fee'];
// 	print_r($tax_fee);
// 	die();
$data['tax_id'] = 2;
// 	echo '<pre>';
	if($data['tax'] ==1 && $data['taxinc'] ==1){
	   // echo 'noomi';
	   
	   $data['tax_fee'] = $data['bid'] * 0.0875;
	   
	}
		$tax_fee = $data['tax_fee'];
	$query = "SELECT * FROM " . $DBPrefix . "tax WHERE id = 2";
			$db->direct_query($query);
			$row1 = $db->result();
			$tax_name = $row1['tax_name'];
			$tax_rate = $row1['tax_rate'];
	        $payvalue = $paysubtotal;
        	$shipping_cost = $data['is_floor'] == 1 ? 0 : $shipping_cost;

	// build winners address
	$winner_address = '';
	$winner_address .= (!empty($winner['address'])) ? '<br>' . $winner['address'] : '';
	$winner_address .= (!empty($winner['city'])) ? '<br>' . $winner['city'] : '';
	$winner_address .= (!empty($winner['prov'])) ? '<br>' . $winner['prov'] : '';
	$winner_address .= (!empty($winner['country'])) ? '<br>' . $winner['country'] : '';
	$winner_address .= (!empty($winner['zip'])) ? '<br>' . $winner['zip'] : '';

	if ($data['tax'] == 0) // no tax
	{
		$unitexcl = $unitpriceincl = $paysubtotal;
		$subtotal = $totalinc = $payvalue;
		$vat = 0;
	}
	else
	{
		if ($data['taxinc'] == 1) // tax is included in price
		{
			$unitexcl = ($paysubtotal); // auction price - tax
			$unitpriceincl = $paysubtotal; // auction price & tax
			$subtotal = ($payvalue); // total invoice - tax
			$totalinc = $payvalue; // total invoice & tax
		}
		else
		{
			$unitexcl = $paysubtotal; // auction price - tax
			$unitpriceincl = vat($paysubtotal); // auction price & tax
			$subtotal = $payvalue; // total invoice - tax
			$totalinc = vat($payvalue); // total invoice & tax
		}
	}

	$totalvat = $totalinc - $subtotal;
	$unitpriceincl = $totalinc / $data['qty'];
	//$unitexcl = $subtotal / $data['qty'];
// 	if(){
	$subtotal = $subtotal + $buyer_fee;
	$totalinc = $totalinc + $buyer_fee;
	// auction specific details
	$template->assign_vars(array(
			'AUCTION_TITLE' => strtoupper($title),
			'ITEM_QUANTITY' => $data['qty'],

			'UNIT_PRICE' => $system->print_money($unitexcl), // auction price
			'UNIT_BUYEER_FEE' => $system->print_money($buyer_fee), // auction price
			'UNIT_PRICE_WITH_TAX' => $system->print_money($unitpriceincl),// auction price & tax
			'TOTAL' => $system->print_money($subtotal), // total invoice
			'TOTAL_WITH_TAX' => $system->print_money($totalinc) // total invoice & tax
			));
}
else
{
	// get fee data
	$query = "SELECT * FROM " . $DBPrefix . "useraccounts WHERE useracc_id = :user_id";
	$params = array();
	$params[] = array(':user_id', $_GET['id'], 'int');
	$db->query($query, $params);

	// check its real
	if ($db->numrows() < 1)
	{
		invalidinvoice();
	}

	$data = $db->result();

	// do you have permission to view this?
	if (!$fromadmin && $data['user_id'] != $user->user_data['id'])
	{
		invalidinvoice();
	}

	//$seller = getSeller($user->user_data['id']); // used as user: ??
	$seller = getSeller($data['user_id']);
	$vat = getTax(true, $seller['country']);
	$winner['nick'] = '';
	$winner_address = '';
	$data['shipping_terms'] = '';
	$data['id'] = $data['useracc_id'];
	$shipping_cost = 0;
	$title = $system->SETTINGS['sitename'] . ' - ' . $MSG['766'] . '#' . $data['id'];
	$payvalue = $data['total'];
	$totalvat = 0;
	// create fee data ready for template & get totals
	$totals = setfeetemplate($data);

	// fee specific details
	$template->assign_vars(array(
			'TOTAL' => $system->print_money($totals[1]),
			'TOTAL_WITH_TAX' => $system->print_money($totals[0])
			));
}

$template->assign_vars(array(
		'DOCDIR' => $DOCDIR,
		'LOGO' => $system->SETTINGS['siteurl'] . 'uploaded/logo/' . $system->SETTINGS['logo'],
		'CHARSET' => $CHARSET,
		'LANGUAGE' => $language,
		'SENDER' => $seller['nick'],
		'WINNER_NICK' => $winner['nick'],
		'WINNER_ADDRESS' => $winner_address,
		'AUCTION_ID' => $data['auc_id'],
		'SHIPPING_METHOD' => (empty($data['shipping_terms'])) ? strtoupper($MSG['000']) : $data['shipping_terms'],
		'INVOICE_DATE' => date('m/d/Y', $data['date'] + $system->tdiff),
		'SALE_ID' => (($auction) ? 'AUC' : 'FEE') . $data['id'],
		// tax start
		'TAX' => $vat . '%',
		'IS_FLOOR' => $data['is_floor'] == 1 ? FALSE : TRUE,
		'BUYER_FEE' => $MSG['775']. ' 15%',
		'SHIPPING_COST' => $system->print_money($shipping_cost),
		'VAT_TOTAL' => $system->print_money($totalvat),
		'TAX_TITLE' => $tax_name.' '.$tax_rate.'%:',
		'TAX_FEE' => $system->print_money($tax_fee),
		'TOTAL_SUM' => $system->print_money($payvalue + $buyer_fee + $tax_fee),
		// tax end
		'YELLOW_LINE' => $system->SETTINGS['invoice_yellow_line'],
		'THANKYOU' => $system->SETTINGS['invoice_thankyou'],

		'B_INVOICE' => true,
		'B_IS_AUCTION' => $auction,
		'WINNER_ID' => $winner_label,
		'B_WINNER_ID' => !empty($winner_label)
		));

$template->set_filenames(array(
		'body' => 'order_invoice.tpl'
		));
$template->display('body');
