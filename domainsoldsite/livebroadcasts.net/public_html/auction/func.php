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
$going_once = $auction_data['going_once'];
$going_twice = $auction_data['going_twice'];
$sold = $auction_data['sold'];
$suspended = $auction_data['suspended'];
$high_bid = $auction_data['current_bid'];
$minimum_bid = $auction_data['minimum_bid'];
$query = "SELECT b.*, u.nick, u.rate_sum FROM " . $DBPrefix . "bids b
LEFT JOIN " . $DBPrefix . "users u ON (u.id = b.bidder)
WHERE b.auction = :auc_id ORDER BY b.bid DESC, b.quantity DESC, b.id DESC";
$params = array();
$params[] = array(':auc_id', $_REQUEST['q'], 'int');
$db->query($query, $params);
$num_bids = $db->numrows();
$high_bid = ($num_bids == 0) ? $minimum_bid : $high_bid;
$high_bid = $system->print_money($high_bid);

if($sold != "y")
{
	if($suspended > 0)
	{
		$result = "<div class='alert alert-warning' role='alert'><center><strong><h2>Auction ended without being sold</h2></strong></center></div>";
		$data = [
			'result' => $result,
			'current_bid' => $high_bid
		];
		
	}
	elseif($going_twice > 0)
	{
		$result = "<div class='alert alert-danger' role='alert'></center><h2>Going Twice....Last chance to bid!</h2></center></div>";
	 $data = [
			'result' => $result,
			'current_bid' => $high_bid
		];
	}
	elseif($going_once > 0)
	{
		$result = "<div class='alert alert-warning' role='alert'><center><h2>Going Once....Hurry & bid!</h2></center></div>";
		$data = [
			'result' => $result,
			'current_bid' => $high_bid
		];
	}
	else
	{
		$result = "<div class='alert alert-success' role='alert'><center><h2>Still opened for bidding....</h2></center></div>";
		$data = [
			'result' => $result,
			'current_bid' => $high_bid
		];
	}
}
else
{
	$result = "<div class='alert alert-success' role='alert'><center><strong><h2>Sold! This auction has now ended.</h2></strong></center></div>";
	$data = [
			'result' => $result,
			'current_bid' => $high_bid
		];
}

echo json_encode($data);

?>