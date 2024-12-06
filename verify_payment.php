<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simulating Payment Success
    $user_id = $_SESSION['user_id'];

    // Add logic to verify UPI Payment if required
    echo "Payment successful! <a href='https://t.me/+54QRp6eRp_llYzE1'>Join Super Profit Method Telegram Group</a>";
}
?>
