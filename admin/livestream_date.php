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

// Data check
if (!isset($_REQUEST['id']))
{
	$URL = $_SESSION['RETURN_LIST'];
	//unset($_SESSION['RETURN_LIST']);
	header('location: ' . $URL);
	exit;
}

if (isset($_POST['action']) && $_POST['action'] == "save")
{
	$date = time() + ($_POST['duration'] * 24 * 60 * 60);
	$auc_id = intval($_POST['id']);
		// update main counters
		$query = "UPDATE " . $DBPrefix . "auctions SET live_stream_date = :date";
		$params = array();
		$params[] = array(':date', $date, 'str');
		$db->query($query, $params);

	$URL = $_SESSION['RETURN_LIST'];
	//unset($_SESSION['RETURN_LIST']);
	header('location: ' . $URL);
	exit;
}

$query = "SELECT title,live_stream_date FROM " . $DBPrefix . "auctions WHERE id = :auc_id";
$params = array();
$params[] = array(':auc_id', $_GET['id'], 'int');
$db->query($query, $params);
$res = $db->result();
$title = $res['title'];
$live_stream_date = $res['live_stream_date']/(3600 * 24);
$template->assign_vars(array(
		'ID' => $_GET['id'],
		'MESSAGE' => 'Add Live Stream Start Date for auction: '. $title,
		'TYPE' => 1,
    'DATE' => $live_stream_date
		));

include 'header.php';
$template->set_filenames(array(
		'body' => 'livestream_date.tpl'
		));
$template->display('body');
include 'footer.php';
?>
