<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parents Information</title>
</head>

<body>
<?php
  require('db.php');
  require('autologout.php');
 // require_once('calendar/classes/tc_calendar.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['Register'])){
        $nama = $_POST['nama'];
        $nama = stripslashes($nama);
        $nama = mysql_real_escape_string($nama);
        $nric = $_POST['nric'];
        $nric = stripslashes($nric);
        $nric = mysql_real_escape_string($nric);
        $tlhr = date("d-m-Y");
        //$tlhr = stripslashes($tlahir);
        //$tlhr = mysql_real_escape_string($tlahir);
        $negara = $_POST['negara'];
        $negara = stripslashes($negara);
        $negara = mysql_real_escape_string($negara);
        $bangsa = $_POST['bangsa'];
        $bangsa = stripslashes($bangsa);
        $bangsa = mysql_real_escape_string($bangsa);
        $agama = $_POST['agama'];
        $agama = stripslashes($agama);
        $agama = mysql_real_escape_string($agama);
        $alamat = $_POST['alamat'];
        $alamat = stripslashes($alamat);
        $alamat = mysql_real_escape_string($alamat);
        $kerja = $_POST['kerja'];
        $kerja = stripslashes($kerja);
        $kerja = mysql_real_escape_string($kerja);
        $gaji = $_POST['gaji'];
        $gaji = stripslashes($gaji);
        $gaji = mysql_real_escape_string($gaji);
        $tel1 = $_POST['tel1'];
        $tel1 = stripslashes($tel1);
        $tel1 = mysql_real_escape_string($tel1);
        $tel2 = $_POST['tel2'];
        $tel2 = stripslashes($tel2);
        $tel2 = mysql_real_escape_string($tel2);
        $emel = $_POST['emel'];
        $emel = stripslashes($emel);
        $emel = mysql_real_escape_string($emel);
                       
        $query = "INSERT INTO student (nama,   nric, tlahir, negara, bangsa, agama, alamat, kerja, gaji, tel1, tel2, emel) VALUES ('$nama',  '$nric', '$tlhr','$negara', '$bangsa', '$agama', '$alamat', '$kerja', '$gaji', '$tel1', '$tel2', '$emel')";

        $result = mysql_query($query) or die (mysql_error());
        // var_dump($query);
        if($result){
            // echo "<div class='form'><h3>Student information are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>"
            //echo "<table>";
            //echo "<tr>";
            //echo"<td>$name</td>";
            echo"<td> Student are registered successfully.Click here to view data <a href='senaraipelajar.php'>Back</a></td>";
            echo "</tr>";
        }
    }else{
?>
<div class="form">
<form method="post" action="" width='650'>  
<table width='650' style=" border:1px solid black" cellpadding="10px" cellspacing="0px" align="center" border="0" >
<tr> <br/><br/><br/> 
<td width= '950' colspan="4" style="background:#9ACD32; color:#FFFFFF; font size:20px"><center>
  <strong>PARENTS INFORMATION</strong>
</center></td> 
<tr align="left"> 
<th scope= "row">NAME</th>
<td>:</td>
<td>
<input type="varchar" name="nama" placeholder="Guardian Name" required /></td></tr>
<tr align="left"> 
<th scope= "row">IC NUM</th>
<td>:</td>
<td>
<input type="bigint" name="nric" placeholder="Guardian IC" required /></td></tr>

<tr align="left"> 
<th scope= "row">DOB</th>
<td>:</td>
<td>
<input type="date" name="tlahir" placeholder="date of birth" required /></td></tr>

<tr align="left"> 
<th scope= "row">CITIZEN</th>
<td>:</td>
<td>
<input type="varchar" name="negara" placeholder="citizen" required /></td></tr>

<tr align="left"> 
<th scope= "row">RACE</th>
<td>:</td>
<td>
<input type="varchar" name="bangsa" placeholder="race" required /></td>
<td align="left"> 
<th scope= "row">RELIGION</th>
<td>:</td>
<td>
<input type="varchar" name="agama" placeholder="religion" required /> </td></tr>

<tr align="left"> 
<th scope= "row">ADDRESS</th>
<td>:</td>
<td>
<input type="varchar" name="alamat" placeholder="address" required /></td>

<td align="left"> 
<th scope= "row">JOB</th>
<td>:</td>
<td><input type="varchar" name="kerja" placeholder="job type" required /></td></tr>

<tr align="left"> 
<th scope= "row">SALARY</th>
<td>:</td>
<td>
<input type="float" name="gaji" placeholder="salary" required /></td></tr>
<tr align="left"> 
<th scope= "row">PHONE 1</th>
<td>:</td>
<td>
<input type="int" name="tel1" placeholder="phone number" required /></td>
<td align="left"> 
<th scope= "row">PHONE 2</th>
<td>:</td>
<td>
<input type="int" name="tel2" placeholder="phone number" required /></td></tr>
<tr>


<tr align="left"> 
<th scope= "row">EMAIL</th>
<td>:</td>
<td>
<input type="varchar" name="emel" placeholder="email" required /></td></tr>
<tr>
<th></th>
<td></td>
<td>
<input type="submit" name="submit" value="Register" />&nbsp; &nbsp;<a href="senaraipelajar.php">Back</a></td></tr>
</tr></table>
</form>
</div>
<?php } ?>
</body>
</html>