<?php
session_start();
include_once 'dbConnect.php';

$pid = $_SESSION['product_id'];

$insert = $db->query("UPDATE product SET status='Canclled' where id='".$pid."'");
session_destroy();
?>

<h1 class="error"> Your Paypal Transcation has been Cancled</h1>
<a href="paymentgate.php">Go Back</a>