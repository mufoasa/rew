<?php
// Get data from OGAds postback
$offerId = $_GET['id'] ?? 'unknown';
$payout = $_GET['payout'] ?? '0.00';
$ip = $_GET['ip'] ?? '0.0.0.0';

// Log the specific offer ID and payout to a file
$logEntry = date('Y-m-d H:i:s') . " | OfferID: $offerId | Payout: $payout | IP: $ip\n";

// Save to a file named leads.txt
file_put_contents('leads.txt', $logEntry, FILE_APPEND);

echo "OK";
?>
