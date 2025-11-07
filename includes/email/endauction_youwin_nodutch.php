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

if (!defined('InWeBid')) exit();

$item_title = htmlspecialchars($Auction['title']);
$query = "SELECT w.id, w.winner, w.tax_id, w.tax_fee, w.auc_title, w.auc_shipping_cost, w.bid,w.buyer_fee FROM " . $DBPrefix . "winners w
		WHERE w.paid = 0 AND w.id = :id
		LIMIT 1";
$params = array();
$params[] = array(':id', $Winner_id, 'int');
$db->query($query, $params);
$row = $db->result();
$query = "SELECT * FROM " . $DBPrefix . "tax WHERE id = 2";
			$db->direct_query($query);
			$row1 = $db->result();
			$tax_name = $row1['tax_name'];
			$tax_rate = $row1['tax_rate'];
$emailer = new email_handler();
$emailer->assign_vars(array(
		'W_NAME' => $Winner['name'],
		'BUYER_FEE_VAL' => $system->print_money($row['buyer_fee']),
		'BUYER_FEE' => $MSG['775']. ' 15%',
		'TAX_TITLE' => $tax_name.' '.$tax_rate.'%',
		'TAX_FEE' => $system->print_money($row['tax_fee']),
		'A_PICURL' => ($Auction['pict_url'] != '') ? UPLOAD_FOLDER . $Auction['id'] . '/' . $Auction['pict_url'] : 'images/email_alerts/default_item_img.jpg',
		'A_URL' => $system->SETTINGS['siteurl'] . 'item.php?id=' . $Auction['id'],
		'A_TITLE' => $item_title,
		'A_CURRENTBID' => $system->print_money($Auction['current_bid']),
		'A_ENDS' => $ends_string,

		'S_NICK' => $Seller['nick'],
		'S_EMAIL' => $Seller['email'],

		'SITE_URL' => $system->SETTINGS['siteurl'],
		'SITENAME' => $system->SETTINGS['sitename']
		));
$emailer->email_uid = $Winner['id'];
$emailer->email_sender($Winner['email'], 'endauction_youwin_nodutch.inc.php', $system->SETTINGS['sitename'] . $MSG['909'] . ': ' . $item_title);
