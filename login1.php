<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
error_reporting(0);
require('db.php');
require('autologout.php');

//Start the Session
session_start();

if (isset($_POST['username']) and isset($_POST['password'])){

//3.1.1 Assigning posted values to variables.
	$username = $_POST['username'];
	$password = $_POST['password'];

//3.1.2 Checking the values are existing in the database or not
	$query = "SELECT * FROM administrator WHERE username='$username' and password='$password'";
	$result = mysql_query($query) or die(mysql_error());
	$count = mysql_num_rows($result);

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
	if ($count == 1){
		$_SESSION['username'] = $username;
	}else{

//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
	echo "Invalid Login Credentials.";
	}
}

//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	header("location: senaraikeseluruhan.php");
}else{
	
?>

<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
}
?>

<center><img src="images/nadi.png" align="center" alt="This is my Dog" width="450" height="200";></center>

<form method="POST" action="login1.php">

<table height="100" width="0" border="0" cellspacing="5" cellpadding="5" align="center" style=" border:1px solid black">

<td colspan="7" style="background:#00CED1; color:#FFFFFF; font size:20px"><center>
  <strong>ADMINISTRATOR LOGIN</strong>
</center>
</td>

<tr>
    <th scope="row">Username</th>
    <td>:</td>
    <td>
<input type="text" name="username" placeholder="Username" required /></td>
</tr>

<tr>
    <th scope="row">Password</th>
    <td>:</td>
    <td>
<input type="password" name="password" placeholder="Password" required /></td>
</tr>

<tr>
    <td><th colspan="3" align="right" scope="row"><label><input id="button" type="submit" name="submit" value="Login" /></label></th></td>
</tr>
<th colspan="3" align="right" scope="row">
<p> <a href='login_admin.php'>Back</a></p></th>
</div>

</form> 
   <?php
}
?>
</body>
</html>
