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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'common.php';

$query = "SELECT * FROM `webid_auctions` WHERE id = :id";
$params = array();
$params[] = array(':id', $_REQUEST['q'], 'int');
$db->query($query, $params);
$auction_data = $db->result();
$going_once = (int)$auction_data['going_once'];
$going_twice = (int)$auction_data['going_twice'];
$sold = $auction_data['sold'];
$suspended = $auction_data['suspended'];
$high_bid = $auction_data['current_bid'];
$minimum_bid = $auction_data['minimum_bid'];
$closed = (int)$auction_data['closed'];
$ends = (int)$auction_data['ends'];
$manual_mode = ($going_once === 1 || $going_twice === 2);
$manual_label = '';
if ($going_twice === 2)
{
	$manual_label = 'Fair Warning....Last chance to bid!';
}
elseif ($going_once === 1)
{
	$manual_label = 'Going Once....Hurry & bid!';
}
$remaining = $ends - time();
if ($remaining < 0)
{
	$remaining = 0;
}
$auto_enabled = (!$manual_mode && $closed == 0 && $suspended == 0 && $ends > time());
$query = "SELECT b.*, u.nick, u.rate_sum FROM " . $DBPrefix . "bids b
LEFT JOIN " . $DBPrefix . "users u ON (u.id = b.bidder)
WHERE b.auction = :auc_id ORDER BY b.bid DESC, b.quantity DESC, b.id DESC";
$params = array();
$params[] = array(':auc_id', $_REQUEST['q'], 'int');
$db->query($query, $params);
$num_bids = $db->numrows();
$Winner = $db->result();
$high_bid = ($num_bids == 0) ? $minimum_bid : $high_bid;
$high_bid = $system->print_money($high_bid);

if($sold != "y")
{
	if($suspended > 0)
	{
		$result = "<div class='alert alert-warning' role='alert'><center><strong><h2>Auction ended without being sold</h2></strong></center></div>";
		$data = [
			'result' => $result,
			'current_bid' => $high_bid,
			'num_bids' => $num_bids,
			'Winner' => $Winner['nick']
		];
		
	}
	elseif($manual_mode)
	{
		// In manual mode, show brief status without large heading (heading timer displays in panel-heading)
		$status = ($going_twice === 2) ? 'Fair Warning - Auction in final stage' : 'Manual mode active - Ready to bid';
		$result = "<div class='alert alert-info' role='alert'><center><small>$status</small></center></div>";
		$data = [
			'result' => $result,
			'current_bid' => $high_bid,
			'num_bids' => $num_bids,
			'Winner' => $Winner['nick']
		];
	}
	else
	{
		$result = "<div class='alert alert-success' role='alert'><center><h2>Live Bid Auction with Live Streaming </h2></center></div>";
		$data = [
			'result' => $result,
			'current_bid' => $high_bid,
			'num_bids' => $num_bids,
			'Winner' => $Winner['nick']
		];
	}
}
else
{
	$result = "<div class='alert alert-success' role='alert'><center><strong><h2>Sold! This auction has now ended.</h2></strong></center></div>";
	$data = [
			'result' => $result,
			'current_bid' => $high_bid,
			'num_bids' => $num_bids,
			'Winner' => $Winner['nick']
		];
}

// attach shared countdown attributes
$data['manual_mode'] = $manual_mode;
$data['manual_label'] = $manual_label;
$data['remaining'] = $remaining;
$data['auto_enabled'] = $auto_enabled;
$data['going_once'] = $going_once;
$data['going_twice'] = $going_twice;
$data['closed'] = $closed;
$data['ends'] = $ends;

echo json_encode($data);

?>

