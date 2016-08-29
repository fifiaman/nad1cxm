<?php
require('db.php');
require('autologout.php');
include('auth.php');
if(isset($_GET['icno']))
{
$icno=$_GET['icno'];

$query1=mysql_query("UPDATE  student SET flag='1' WHERE icno='$icno'") or die(mysql_error());
if($query1)
	// AND UPDATE student SET flag='1' WHERE flag='0'
	//DELETE  FROM student where icno='$icno' 
{
header('location:shuh.php');  
}
}
?>