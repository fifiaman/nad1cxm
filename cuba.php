<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
<?php
  require('db.php');
  require('autologout.php');
 // require_once('calendar/classes/tc_calendar.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        $name = stripslashes($name);
        $name = mysql_real_escape_string($name);
        $gmpcname = $_POST['gmpcname'];
        $gmpcname = stripslashes($gmpcname);
        $gmpcname = mysql_real_escape_string($gmpcname);
        $kptname = $_POST['kptname'];
        $kptname = stripslashes($kptname);
        $kptname = mysql_real_escape_string($kptname);
        $icno = $_POST['icno'];
        $icno = stripslashes($icno);
        $icno = mysql_real_escape_string($icno);
        $gender = $_POST['formgender'];
		//$gender = stripslashes($_POST['gender']);
       //$gender = mysql_real_escape_string($gender);
        $oic = $_POST['oic'];
        $oic = stripslashes($oic);
        $oic = mysql_real_escape_string($oic);
        $dob = date("d-m-Y");
        $dob = stripslashes($dob);
        $dob = mysql_real_escape_string($dob);
        $pob = $_POST['pob'];
        $pob = stripslashes($pob);
        $pob = mysql_real_escape_string($pob);
        $issuedate = date("d-m-Y H:i:s");
        $citizen = $_POST['citizen'];
        $citizen = stripslashes($citizen);
        $citizen = mysql_real_escape_string($citizen);
        $race = $_POST['race'];
        $race = stripslashes($race);
        $race = mysql_real_escape_string($race);
        $religion = $_POST['religion'];
        $religion = stripslashes($religion);
        $religion = mysql_real_escape_string($religion);
        $address1 = $_POST['address1'];
        $address1 = stripslashes($address1);
        $address1 = mysql_real_escape_string($address1);
        $address2 = $_POST['address2'];
        $address2 = stripslashes($address2);
        $address2 = mysql_real_escape_string($address2);
        $address3 = $_POST['address3'];
        $address3 = stripslashes($address3);
        $address3 = mysql_real_escape_string($address3);
        $postcode = $_POST['postcode'];
        $postcode = stripslashes($postcode);
        $postcode = mysql_real_escape_string($postcode);
        $city = $_POST['city'];
        $city = stripslashes($city);
        $city = mysql_real_escape_string($city);
        $state = $_POST['state'];
        $state = stripslashes($state);
        $state = mysql_real_escape_string($state);
        // $photo = $_POST['photo'];
        $phone = $_POST['phone'];
        $phone = stripslashes($phone);
        $phone = mysql_real_escape_string($phone);
        $email = $_POST['email'];
        $email = stripslashes($email);
        $email = mysql_real_escape_string($email);
        $tahun = $_POST['formyear'];
        $kelas = $_POST['formclass'];
               
        $query = "INSERT INTO student (name,  gmpcname, kptname, icno, gender, oic, dob, pob, issuedate, citizen, race, religion, address1, address2, address3, postcode, city, state,  phone, email, tahun, kelas) VALUES ('$name', '$gmpcname', '$kptname', '$icno', '$gender','$oic', '$dob', '$pob', '$issuedate', '$citizen', '$race', '$religion', '$address1', '$address2', '$address3', '$postcode', '$city', '$state', '$phone', '$email', '$tahun', '$kelas')";

        $result = mysql_query($query) or die (mysql_error());
        // var_dump($query);
        if($result){
            // echo "<div class='form'><h3>Student information are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>"
            //echo "<table>";
            //echo "<tr>";
            //echo"<td>$name</td>";
            echo"<td> Click here to add parents data <a href='maklumatparent.php'>Next</a></td>";
            echo "</tr>";
        }
    }else{
?>
<div class="form">
<form method="post" action="" width='650'>  <center>
<table width='650' style=" border:1px solid black" cellpadding="10px" cellspacing="0px" align="center" border="0" >
<tr> <br/><br/><br/> 
<td width= '950' colspan="4" style="background:#9ACD32; color:#FFFFFF; font size:20px"><center>
  <strong>STUDENT REGISTRATION</strong>
</center></td> 
<tr align="left"> 
<th scope= "row">NAME</th>
<td>:</td>
<td>
<input type="varchar" name="name" placeholder="Student Name" required /></td></tr>
<tr align="left"> 
<th scope= "row">GMPC NAME</th>
<td>:</td>
<td>
<input type="varchar" name="gmpcname" placeholder="Student Name" required /></td></tr>

<tr align="left"> 
<th scope= "row">KPT NAME</th>
<td>:</td>
<td>
<input type="text" name="kptname" placeholder="Student Name" required /></td></tr>

<tr align="left"> 
<th scope= "row">IC CARD</th>
<td>:</td>
<td>
<input type="bigint" name="icno" placeholder="ic num" required /></td>
<td align="left"> 
<th scope= "row">OLD IC</th>
<td>:</td>
<td>
<input type="bigint" name="oic" placeholder="old ic num" required /> </td></tr>

<tr align="left"> 
<th scope= "row">DATE OF BIRTH</th>
<td>:</td>
<td>
<input type="date" name="dob" placeholder="date of dob" required /></td>
<td align="left"> 
<th scope= "row">GENDER</th>
<td>:</td>
<td><form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"><label for='formgender'></label><br>
<select name="formgender">
<option value="">Select Gender..</option>
<option value="Male">Male</option>
<option value="Female">Female</option></select>
</form></td></tr>

<tr align="left"> 
<th scope= "row">PLACE OF BIRTH</th>
<td>:</td>
<td>
<input type="varchar" name="pob" placeholder="name of pob" required /></td></tr>
<tr align="left"> 
<th scope= "row">CITIZEN</th>
<td>:</td>
<td>
<input type="varchar" name="citizen" placeholder="citizen" required /></td>
<td align="left"> 
<th scope= "row">RACE</th>
<td>:</td>
<td>
<input type="varchar" name="race" placeholder="race" required /></td></tr>
<tr>


<tr align="left"> 
<th scope= "row">DATE OF REGISTRATION</th>
<td>:</td>
<td>
<input type="datetime" name="issuedate" placeholder="registration" required /></td>
<td align="left"> 
<th scope= "row">RELIGION</th>
<td>:</td>
<td>
<input type="varchar" name="religion" placeholder="religion" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 1</th>
<td>:</td>
<td>
<input type="varchar" name="address1" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 2</th>
<td>:</td>
<td>
<input type="varchar" name="address2" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 3</th>
<td>:</td>
<td>
<input width ='400' type="varchar"  name="address3" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">POSTCODE</th>
<td>:</td>
<td>
<input type="int" name="postcode" placeholder="postcode" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">CITY</th>
<td>:</td>
<td>
<input type="varchar" name="city" placeholder="city name" required /></td>
<td align="left"> 
<th scope= "row">STATE</th>
<td>:</td>
<td>
<input type="varchar" name="state" placeholder="state" required /></td></tr>

<tr>
<tr align="left"> 
<th scope= "row">PHONE</th>
<td>:</td>
<td>
<input type="int" name="phone" placeholder="phone num" required /></td>
<th scope= "row">EMAIL</th>
<td>:</td>
<td>
<input type="varchar" name="email" placeholder="email" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">YEAR</th>
<td>:</td>
<td>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"><label form='formyear'></label><br>
<select name="formyear">
<option value="">Select Form..</option>
<option value="1">Tingkatan 1</option>
<option value="2">Tingkatan 2</option>
<option value="3">Tingkatan 3</option>
<option value="4">Tingkatan 4</option>
<option value="5">Tingkatan 5</option>
</select>
</form></td>
<td align="left"> 
<th scope= "row">CLASS NAME</th>
<td>:</td>
<td> 
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"><label form='formclass'></label><br>
<select name="formclass">
<option value="">Select Class..</option>
<option value="amanah">Amanah</option>
<option value="Bijak">Bijak</option>
<option value="Cemerlang">Cemerlang</option>
<option value="Desaru">Desaru</option>
<option value="Economic">Economic</option>
</select>
</form></td></tr>
<tr>
<th></th>
<td></td>
<td>
<input type="submit" name="submit" value="Register" />&nbsp; &nbsp;<a href="senaraipelajar.php">Back</a></td></tr>
</tr></table></center>
</form>
</div>
<?php } ?>
</body>
</html>