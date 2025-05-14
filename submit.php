<?php
session_start();
include_once 'configu.php';
include_once 'dbConnect.php';

$pid = $_SESSION['product_id'];

if(isset($_GET['PayerID']))
{
    echo "<h1>Paymant Successful.</h1>";
    $insert = $db->query("UPDATE product SET status='Completed' where id= '".$pid."'");
}
else
{
    echo "<h1>Payment Failed</h1>";
}
session_destroy();
?>

<a href="paymentgate.php">Go Back</a>