<?php
/*
 * AJAX endpoint to fetch real-time auction state
 * Used for live updates of manual countdown mode without page refresh
 */

include 'common.php';

if (empty($_REQUEST['id'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing auction ID']);
    exit;
}

$auction_id = intval($_REQUEST['id']);

$query = "SELECT going_once, going_twice, ends, closed, sold FROM " . $DBPrefix . "auctions WHERE id = :id";
$params = array();
$params[] = array(':id', $auction_id, 'int');
$db->query($query, $params);

if ($db->numrows() == 0) {
    http_response_code(404);
    echo json_encode(['error' => 'Auction not found']);
    exit;
}

$auction = $db->result();
$current_time = time();
$remaining = max(0, $auction['ends'] - $current_time);

$manual_mode = ($auction['going_once'] == 1 || $auction['going_twice'] == 2);
$manual_label = '';
if ($manual_mode) {
    $manual_label = ($auction['going_twice'] == 2) ? 'Fair Warning....Last chance to bid!' : 'Going Once....Hurry & bid!';
}

echo json_encode([
    'going_once' => (int)$auction['going_once'],
    'going_twice' => (int)$auction['going_twice'],
    'ends' => (int)$auction['ends'],
    'closed' => (int)$auction['closed'],
    'sold' => $auction['sold'],
    'current_time' => $current_time,
    'remaining' => $remaining,
    'manual_mode' => $manual_mode,
    'manual_label' => $manual_label
]);
?>

