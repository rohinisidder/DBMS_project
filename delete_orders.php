<?php
include("connection/connect.php");
error_reporting(0);
session_start();

// Assuming $_GET['order_del'] contains the order ID to delete
$orderID = $_GET['order_del'];

// Prepare and execute the stored procedure
$stmt = $db->prepare("CALL DeleteUserOrder(?)");
$stmt->bind_param("i", $orderID);
$stmt->execute();

// Redirect to your_orders.php after deletion
header("location: your_orders.php");
exit();
?>
