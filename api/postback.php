<?php
// Get data from OGAds postback
$offerId = $_GET['id'] ?? 'unknown';
$payout = $_GET['payout'] ?? '0.00';
$ip = $_GET['ip'] ?? '0.0.0.0';

// Format the data
$logEntry = date('Y-m-d H:i:s') . " | Offer: $offerId | Payout: $payout | IP: $ip\n";

// Save to a file named leads.txt
file_put_contents('leads.txt', $logEntry, FILE_APPEND);

echo "OK";
?>
