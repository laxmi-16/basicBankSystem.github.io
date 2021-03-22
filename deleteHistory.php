<?php
include 'Header.php';
$d=$_GET["dat"];
$del="DELETE FROM moneytransfer WHERE date_time='$d';";
mysqli_query($con, $del);
echo "<script>window.location='TransactionHistory.php';</script>";
?>