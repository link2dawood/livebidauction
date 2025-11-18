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
$current_page = 'auctions';
include '../common.php';
include INCLUDE_PATH . 'functions_admin.php';
include 'loggedin.inc.php';
include MAIN_PATH . 'language/' . $language . '/categories.inc.php';
include PACKAGE_PATH . 'ckeditor/ckeditor.php';
$catscontrol = new MPTTcategories();

if($_GET['going'] == "1")
{

$now = time();
$manual_countdown = 5 * 60; // 5 minutes manual control window
$end_time = $now + $manual_countdown;

$query = "UPDATE " . $DBPrefix . "auctions 
          SET going_once = 1,
              going_twice = 0,
              starts = :starts, 
              ends = :ends 
          WHERE id = :id";

$params = array();
$params[] = array(':starts', $now, 'int');
$params[] = array(':ends', $end_time, 'int');
$params[] = array(':id', intval($_GET['id']), 'int');

$db->query($query, $params);


	header('location: listauctions.php');
}
else if($_GET['going'] == "2")
{
	$query = "UPDATE " . $DBPrefix . "auctions SET going_twice = 2 WHERE id = :id";
	$params = array();
	$params[] = array(':id', $_GET['id'], 'int');
	$db->query($query, $params);

	$query = "UPDATE " . $DBPrefix . "auctions SET going_once = 0 WHERE id = :id";
	$params = array();
	$params[] = array(':id', $_GET['id'], 'int');
	$db->query($query, $params);
	header('location: listauctions.php');
}
else if($_GET['going'] == "3")
{
	$query = "UPDATE " . $DBPrefix . "auctions SET going_once = 0 WHERE id = :id";
	$params = array();
	$params[] = array(':id', $_GET['id'], 'int');
	$db->query($query, $params);

	$query = "UPDATE " . $DBPrefix . "auctions SET going_twice = 0 WHERE id = :id";
	$params = array();
	$params[] = array(':id', $_GET['id'], 'int');
	$db->query($query, $params);


	$query = "UPDATE " . $DBPrefix . "auctions SET ends = :time WHERE id = :id";
	$params = array();
	$params[] = array(':id', $_GET['id'], 'int');
	$params[] = array(':time', time(), 'int');
	$db->query($query, $params);
	$query = "SELECT u.* FROM " . $DBPrefix . "bids b
			LEFT JOIN " . $DBPrefix . "users u ON (b.bidder = u.id)
			WHERE auction = :auc_id ORDER BY b.bid DESC, b.quantity DESC, b.id DESC";
	$params = array();
	$params[] = array(':auc_id', $_GET['id'], 'int');
	$db->query($query, $params);
	$num_bids = $db->numrows();
	if($num_bids > 0){
		$Winner = $db->result();
		//Disable Bidder Temp expect floor user.
		if($Winner['is_floor'] != 1){
			$query = "UPDATE " . $DBPrefix . "users SET temp_suspended = 0 WHERE id = :user_id";
			$params = array();
			$params[] = array(':user_id', $Winner['id'], 'int');
			$db->query($query, $params);
	}
	}
	// Run cron according to SETTINGS
// 	print_r($system->SETTINGS['cron']);
// 	die();
	if ($system->SETTINGS['cron'] == 2)
	{
		
		include_once '../cron.php';
	}


	header('location: listauctions.php');
}
else if($_GET['going'] == "4")
{
			$k = intval($_GET['id']);
			$query = "SELECT duration, category, quantity FROM " . $DBPrefix . "auctions WHERE id = :auc_id";
			$params = array();
			$params[] = array(':auc_id', $k, 'int');
			$db->query($query, $params);
			$AUCTION = $db->result();

			// auction ends
			$WILLEND = time() + ($AUCTION['duration'] * 24 * 60 * 60);

			$query = "UPDATE " . $DBPrefix . "auctions
					SET starts = :starts,
					ends = :ends,
					closed = 0,
					num_bids = 0,
					relisted = relisted + 1,
					current_bid = 0,
					sold = 'n',
					suspended = :suspended
					WHERE id = :auc_id";
			$params = array();
			$params[] = array(':starts', time(), 'int');
			$params[] = array(':ends', $WILLEND, 'int');
			$params[] = array(':suspended', 0, 'int');
			$params[] = array(':auc_id', $k, 'int');
			$db->query($query, $params);
			//Activate Temp Suspended
			$query = "SELECT winner FROM " . $DBPrefix . "winners WHERE auction = :auc_id";
			$params = array();
			$params[] = array(':auc_id', $k, 'int');
			$db->query($query, $params);
			$winner = $db->result();
			$query = "UPDATE " . $DBPrefix . "users SET temp_suspended = 1 WHERE id = :user_id";
			$params = array();
			$params[] = array(':user_id', $winner['winner'], 'int');
			$db->query($query, $params);
			
/**/
			// delete bids
			$query = "DELETE FROM " . $DBPrefix . "bids WHERE auction = :auc_id";
			$params = array();
			$params[] = array(':auc_id', $k, 'int');
			$db->query($query, $params);
				
			// Proxy Bids
			$query = "DELETE FROM " . $DBPrefix . "proxybid WHERE itemid = :auc_id";
			$params = array();
			$params[] = array(':auc_id', $k, 'int');
			$db->query($query, $params);
/**/
			// Winners: only in case of reserve not reached
			$query = "DELETE FROM " . $DBPrefix . "winners WHERE auction = :auc_id";
			$params = array();
			$params[] = array(':auc_id', $k, 'int');
			$db->query($query, $params);
			
			// Update COUNTERS table
			$query = "UPDATE " . $DBPrefix . "counters SET auctions = auctions + 1";
			$db->direct_query($query);

			// get category data to update it
			$query = "SELECT left_id, right_id, level FROM " . $DBPrefix . "categories WHERE cat_id = :cat_id";
			$params = array();
			$params[] = array(':cat_id', $AUCTION['category'], 'int');
			$db->query($query, $params);

			$parent_node = $db->result();
			$crumbs = $catscontrol->get_bread_crumbs($parent_node['left_id'], $parent_node['right_id']);
			// update recursive categories
			for ($i = 0; $i < count($crumbs); $i++)
			{
				$query = "UPDATE " . $DBPrefix . "categories SET sub_counter = sub_counter + 1 WHERE cat_id = :cat_id";
				$params = array();
				$params[] = array(':cat_id', $crumbs[$i]['cat_id'], 'int');
				$db->query($query, $params);
			}
			header('location: listauctions.php');
		/*	if ($system->SETTINGS['fee_type'] == 2 && isset($relist_fee) && $relist_fee > 0)
			{
				header('location: pay.php?a=5');
				exit;
			} */
}

else if(isset($_POST['going']) && $_POST['going'] == "3")
{
	$query = "UPDATE " . $DBPrefix . "auctions SET going_once = 0 WHERE id = :id";
	$params = array();
	$params[] = array(':id', $_POST['id'], 'int');
	$db->query($query, $params);

	$query = "UPDATE " . $DBPrefix . "auctions SET going_twice = 0 WHERE id = :id";
	$params = array();
	$params[] = array(':id', $_POST['id'], 'int');
	$db->query($query, $params);


	$query = "UPDATE " . $DBPrefix . "auctions SET ends = :time WHERE id = :id";
	$params = array();
	$params[] = array(':id', $_POST['id'], 'int');
	$params[] = array(':time', time(), 'int');
	$db->query($query, $params);
	
	// Store the "Winning Bidder No" value as-is (this is what admin entered, e.g., "112")
	$winning_bidder_no = trim($_POST['bidder']);
	
	$query = "SELECT u.*,b.id as bid_id FROM " . $DBPrefix . "bids b
			LEFT JOIN " . $DBPrefix . "users u ON (b.bidder = u.id)
			WHERE auction = :auc_id ORDER BY b.bid DESC, b.quantity DESC, b.id DESC";
	$params = array();
	$params[] = array(':auc_id', $_POST['id'], 'int');
	$db->query($query, $params);
	$num_bids = $db->numrows();
	if($num_bids > 0){
		$Winner = $db->result();
		
		//Disable Bidder Temp expect floor user.
		if($Winner['is_floor'] != 1){
			$query = "UPDATE " . $DBPrefix . "users SET temp_suspended = 0 WHERE id = :user_id";
			$params = array();
			$params[] = array(':user_id', $Winner['id'], 'int');
			$db->query($query, $params);
		}
	}
	
	// Update the winners table to store the "Winning Bidder No" value
	// This will be displayed as "Winner ID" everywhere
	if (!empty($winning_bidder_no) && is_numeric($winning_bidder_no)) {
		$query = "UPDATE " . $DBPrefix . "winners SET winner = :winner_id WHERE auction = :auc_id";
		$params = array();
		$params[] = array(':winner_id', intval($winning_bidder_no), 'int');
		$params[] = array(':auc_id', $_POST['id'], 'int');
		$db->query($query, $params);
	}
	// Run cron according to SETTINGS
	if ($system->SETTINGS['cron'] == 2)
	{
		
		include_once '../cron.php';
		
	}


	header('location: listauctions.php');
}

else{
	header('location: listauctions.php');
}
?>