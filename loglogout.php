<?php
session_start();

include ("db.php");

$username = $_SESSION['username'];

$datetime = date_create()->format('Y-m-d H:i:s');

$query = "INSERT INTO loguser(username,action,logtime) VALUES('$username' ,'log keluar', '$datetime')";
$result = mysql_query($query) or die(mysql_error());

header("location: logout.php"); 
?>
    