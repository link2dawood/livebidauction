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

require_once 'common.php';

//if (isset($_GET['id']) && isset($_GET['hash']) && !isset($_POST['action']))
//{
	$query = "SELECT id, suspended, reg_date, hash FROM " . $DBPrefix . "users WHERE suspended = :suspended";
	$params = array();
	$params[] = array(':suspended', 8, 'int');
	$db->query($query, $params);
	while ($user_data = $db->fetch())
{
   $assigned_time = date('Y-m-d H:i:s', $user_data['reg_date']);
    $completed_time= date('Y-m-d H:i:s');   

    $d1 = new DateTime($assigned_time);
    $d2 = new DateTime($completed_time);
    $interval = $d2->diff($d1);

    $diff =  $interval->format('%I');
   
	if ($db->numrows() > 0)
	{
		if ($diff >= 30)
	{
		$query1 = "DELETE FROM `" . $DBPrefix . "users` WHERE id = :id";
		$params1 = array();
		$params1[] = array(':id', $user_data['id'], 'int');
		$db->query($query1, $params1);
	}
	}
	
}
    
//}