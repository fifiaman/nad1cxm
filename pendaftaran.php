

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Staff Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	require('autologout.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $username = stripslashes($username);
        $username = mysql_real_escape_string($username);
        $password = $_POST['password'];
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		

        $query = "INSERT INTO admin (username,   password) VALUES ('$username', '($password)')";
        $result = mysql_query($query) or die (mysql_error());
        // var_dump($query);
        if($result){
            // echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>"
            echo "<table>";
            echo "<tr>";
            echo"<td>$username</td>";
            echo"<td> are registered successfully.Click here to log in <a href='login_admin.php'>LOGIN</a></td>";
            echo "</tr>";
        }
    }else{
?>
<div class="form">
<form method="post" action="">  <br/><br/>
<table style=" border:1px solid black" cellpadding="10px" cellspacing="0px" 
align="center" border="0"> 
<tr> 
<td colspan="4" style="background:#9ACD32; color:#FFFFFF; font size:20px"><center>
  <strong>ADMIN REGISTRATION</strong>
</center></td> 
<tr align="left"> 
<th scope= "row">Username</th>
<td>:</td>
<td><input type="varchar" name="username" placeholder="Username" required /></td></tr>

<tr align="left"> 
<th scope= "row">Password</th>
<td>:</td>
<td>
<input type="varchar" name="password" placeholder="Password" required /></td></tr>
<tr>
<th></th>
<td></td>
<td>
<input type="submit" name="submit" value= "submit" />&nbsp; &nbsp;<a href="login_admin.php">Back</a></td></tr></tr></table>
</form>
</div>
<?php } ?>
</body>
</html>
