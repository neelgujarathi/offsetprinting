<?php
include_once 'configu.php';

$db = new mysqli("localhost:3307", "root", "", "paypal");

if($db->connect_errno)
{
    print("Connect failed: %s\n". $db->connect_error);
    exit();
}
?>