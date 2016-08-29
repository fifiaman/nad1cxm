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

//Start the Session
session_start();

if (isset($_POST['username']) and isset($_POST['password'])){

//3.1.1 Assigning posted values to variables.
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$action = $_POST['action'];
	//$timestamp = date('Y-m-d H:i:s');

//3.1.2 Checking the values are existing in the database or not
	$query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
	$result = mysql_query($query) or die(mysql_error());
	$count = mysql_num_rows($result);
	
	$datetime = date_create()->format('Y-m-d H:i:s');
    $query = "INSERT INTO loguser(username,action,logtime) VALUES('$username' ,'log masuk', '$datetime')";
    $result = mysql_query($query) or die(mysql_error());
    

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
	//{ $success = "INSERT INTO staff_action (username, action, timestamp) VALUES ('$username', 'login', '$timestamp')";
	header("location: in.php"); //}
}else{
	
?>

<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
}
?>

<center><img src="images/nadi.png" align="center" alt="This is my Dog" width="450" height="200";></center>

<form method="POST" action="login_admin.php">

<table height="100" width="0" border="0" cellspacing="5" cellpadding="5" align="center" style=" border:1px solid black">

<td colspan="7" style="background:#9ACD32; color:#FFFFFF; font size:20px"><center>
  <strong>LOGIN SYSTEM</strong>
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
    <th colspan="3" align="right" scope="row"><label><input id="button" type="submit" name="submit" value="Login" /></label></th>
</tr>

<br/>
<th colspan="3" align="right" scope="row">
<p>Not registered yet? <a href='pendaftaran.php'>Register Here</a></p>
<p>Login As Administrator <a href="login1.php">Click Here</p>
</th>
</div>

</form> 
   <?php
}
?>
</body>
</html>
