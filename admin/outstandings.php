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
$current_page = 'users';
include '../common.php';
include INCLUDE_PATH . 'functions_admin.php';
include 'loggedin.inc.php';

// Handle both PAGE and offset parameters
if (isset($_GET['PAGE']) && $_GET['PAGE'] > 1) {
	$PAGE = intval($_GET['PAGE']);
	$OFFSET = ($PAGE - 1) * $system->SETTINGS['perpage'];
} elseif (isset($_GET['offset'])) {
	$OFFSET = intval($_GET['offset']);
	$PAGE = floor($OFFSET / $system->SETTINGS['perpage']) + 1;
	if ($PAGE < 1) $PAGE = 1;
} else {
	$OFFSET = 0;
	$PAGE = 1;
}

// Find auctions where this user is the highest bidder (from bids table)
// This works even when "Winning Bidder No" has been set in winners table
// We need to find the highest bid for each auction and check if the bidder matches
$query = "SELECT COUNT(DISTINCT w.id) As COUNT FROM " . $DBPrefix . "winners w
		WHERE w.paid = 0 
		AND EXISTS (
			SELECT 1 FROM " . $DBPrefix . "bids b1
			WHERE b1.auction = w.auction
			AND b1.bidder = :user_id
			AND b1.id = (
				SELECT b2.id FROM " . $DBPrefix . "bids b2
				WHERE b2.auction = w.auction
				ORDER BY b2.bid DESC, b2.quantity DESC, b2.id DESC
				LIMIT 1
			)
		)";
$params = array();
$params[] = array(':user_id', $_GET['id'], 'int');
$db->query($query, $params);
$TOTALAUCTIONS = $db->result('COUNT');
$PAGES = ($TOTALAUCTIONS == 0) ? 1 : ceil($TOTALAUCTIONS / $system->SETTINGS['perpage']);

$query = "SELECT w.id, w.winner, w.tax_id, w.tax_fee, w.auc_title, a.tax, a.taxinc, w.auc_shipping_cost, a.shipping_cost, w.bid, w.buyer_fee, w.qty, w.auction As auc_id, a.additional_shipping_cost, a.shipping, u.nick AS winner_nick FROM " . $DBPrefix . "winners w
		JOIN " . $DBPrefix . "auctions a ON (a.id = w.auction)
		LEFT JOIN " . $DBPrefix . "users u ON (u.id = w.winner)
		WHERE w.paid = 0 
		AND EXISTS (
			SELECT 1 FROM " . $DBPrefix . "bids b1
			WHERE b1.auction = w.auction
			AND b1.bidder = :user_id
			AND b1.id = (
				SELECT b2.id FROM " . $DBPrefix . "bids b2
				WHERE b2.auction = w.auction
				ORDER BY b2.bid DESC, b2.quantity DESC, b2.id DESC
				LIMIT 1
			)
		)
		LIMIT :OFFSET, :per_page";
$params = array();
$params[] = array(':user_id', $_GET['id'], 'int');
$params[] = array(':OFFSET', $OFFSET, 'int');
$params[] = array(':per_page', $system->SETTINGS['perpage'], 'int');
$db->query($query, $params);
// $i=0;
$totalNomiamount =0;
while ($row = $db->fetch())
{
    $row['tax_id'] = 2;
// $

if($row['tax'] ==1 && $row['taxinc'] ==1){
	   // echo 'noomi';
	   
	   $row['tax_fee'] = $row['bid'] * 0.0875;
	   
	}
	
	$row['buyer_fee'] = $row['bid'] * 0.15;
    // echo '<pre>';
    // print_r($row);
    // die();
	$query = "SELECT * FROM " . $DBPrefix . "tax WHERE id = 2";
			$db->direct_query($query);
			$row1 = $db->result();
			$tax_name = $row1['tax_name'];
			$tax_rate = $row1['tax_rate'];
	$shipping_data = calculate_shipping_data($row, $row['qty'], false);
	
	// Get the "Winning Bidder No" from winners table (this is what admin entered when clicking "Sold")
	// This is the value that should be displayed as "Winner ID"
	$actual_winner_label = $row['winner']; // This is the "Winning Bidder No" entered by admin
	
// 	echo '<pre>';
// 	echo $i.' :';
// 	echo 
     $totalNomiamount += ($row['bid'] * $row['qty']) + $shipping_data['shipping_total'] + $row['buyer_fee'] + $row['tax_fee'];
// 	echo '<br>';
// 	die();
	$template->assign_block_vars('to_pay', array(
			'ID' => $row['id'],
			'URL' => $system->SETTINGS['siteurl'] . 'item.php?id=' . $row['auc_id'],
			'TITLE' => htmlspecialchars($row['auc_title']),
			'WINNER_LABEL' => $actual_winner_label,
			'BUYER_FEE' => $MSG['775']. ' 15%',
			'TAX_TITLE' => $tax_name.' '.$tax_rate.'%',
			'TAX_FEE' => $system->print_money($row['tax_fee']),
			'TAX_FEE_COUNT' => $row['tax_fee'],
			'BUYER_FEE_VAL' => $system->print_money($row['buyer_fee']),
			'PAY_SHIPPING' => ($row['shipping'] == 1),
			'SHIPPING' => $system->print_money($shipping_data['shipping_cost']),
			'ADDITIONAL_SHIPPING_COST' => $system->print_money($shipping_data['additional_shipping_cost']),
			'TOTAL_SHIPPING_COST' => $system->print_money($shipping_data['shipping_total']),
			'ADDITIONAL_SHIPPING' => $system->print_money($row['additional_shipping_cost']),
			'ADDITIONAL_SHIPPING_PLAIN' => $row['additional_shipping_cost'],
			'ADDITIONAL_SHIPPING_QUANTITYS' => $row['qty'] - 1,
			'QUANTITY' => $row['qty'],
			'BID' => $system->print_money($row['bid'] * $row['qty']),
			'TOTAL' => $system->print_money(($row['bid'] * $row['qty']) + $shipping_data['shipping_total'] + $row['buyer_fee'] + $row['tax_fee']),
			'AUC_ID' => $row['auc_id'],
			'WINID'=> $row['id'],

			'B_NOTITLE' => (empty($row['auc_title']))
			));
			$i++;
}

// get pagenation
$PREV = intval($PAGE - 1);
$NEXT = intval($PAGE + 1);
if ($PAGES > 1)
{
	$LOW = $PAGE - 5;
	if ($LOW <= 0) $LOW = 1;
	$COUNTER = $LOW;
	while ($COUNTER <= $PAGES && $COUNTER < ($PAGE + 6))
	{
		$template->assign_block_vars('pages', array(
				'PAGE' => ($PAGE == $COUNTER) ? '<b>' . $COUNTER . '</b>' : '<a href="' . $system->SETTINGS['siteurl'] . 'admin/outstandings.php?id=' . $_GET['id'] . '&PAGE=' . $COUNTER . '"><u>' . $COUNTER . '</u></a>'
				));
		$COUNTER++;
	}
}

$query = "SELECT balance FROM " . $DBPrefix . "users WHERE id = :user_id";
$params = array();
$params[] = array(':user_id', $_GET['id'], 'int');
$db->query($query, $params);
$user_balance = $db->result('balance');
$query = "SELECT SUM(tax_fee) As tax,SUM(buyer_fee) as BUYER_FEE, SUM(bid) As bid,SUM(auc_shipping_cost) as shipping_cost, COUNT(id) As COUNT FROM " . $DBPrefix . "winners
		WHERE paid = 0 AND winner = :winner_id";
// 		echo 'nomi';
// 		die();
$params = array();
$params[] = array(':winner_id', $_GET['id'], 'int');
$db->query($query, $params);
$result_win = $db->result();
$TOTALAUCTIONS = $result_win['COUNT'];
if($system->SETTINGS['fee_type'] == 1){
$user_balance =$user_balance + $result_win['bid'] + $result_win['tax'] + $result_win['shipping_cost'];
} else { 
	$user_balance =$result_win['BUYER_FEE'] + $result_win['bid'] + $result_win['tax'] + $result_win['shipping_cost'];
}
// print_r($totalNomiamount);
// die();
$_SESSION['INVOICE_RETURN'] = 'admin/outstandings.php';
$template->assign_vars(array(
		'USER_BALANCE' => $system->print_money($totalNomiamount),
		'PAY_BALANCE' => $system->print_money_nosymbol($totalNomiamount),
		'CURRENCY' => $system->SETTINGS['currency'],
		'USER_ID' => $_GET['id'],
		'HASH' => $_SESSION['WEBID_ADMIN_NUMBER'],

		'PREV' => ($PAGES > 1 && $PAGE > 1) ? '<a href="' . $system->SETTINGS['siteurl'] . 'admin/outstandings.php?id=' . $_GET['id'] . '&PAGE=' . $PREV . '"><u>' . $MSG['5119'] . '</u></a>&nbsp;&nbsp;' : '',
		'NEXT' => ($PAGE < $PAGES) ? '<a href="' . $system->SETTINGS['siteurl'] . 'admin/outstandings.php?id=' . $_GET['id'] . '&PAGE=' . $NEXT . '"><u>' . $MSG['5120'] . '</u></a>' : '',
		'PAGE' => $PAGE,
		'PAGES' => $PAGES
		));

include 'header.php';
$TMP_usmenutitle = $MSG['422'];
//nclude INCLUDE_PATH . 'user_cp.php';
$template->set_filenames(array(
		'body' => 'outstanding.tpl'
		));
$template->display('body');
include 'footer.php';
