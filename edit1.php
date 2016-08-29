<html>
<body>
<?php
require('db.php');
require('autologout.php');
include('auth.php');
if(isset($_GET['icno']))
{
$icno=$_GET['icno'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$gmpcname=$_POST['gmpcname'];
$kptname=$_POST['kptname'];
$icno=$_POST['icno'];
$gender=$_POST['gender'];
$oic=$_POST['oic'];
$dob = date("d-m-Y");
$pob=$_POST['pob'];
$issuedate = date("d-m-Y H:i:s");
$citizen=$_POST['citizen'];
$race=$_POST['race'];
$religion=$_POST['religion'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$address3=$_POST['address3'];
$postcode=$_POST['postcode'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$tahun=$_POST['tahun'];
$kelas=$_POST['kelas'];
$nama=$_POST['nama'];
$nric=$_POST['nric'];
$tlahir=$_POST['tlahir'];
$negara=$_POST['negara'];
$bangsa=$_POST['bangsa'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$kerja=$_POST['kerja'];
$gaji=$_POST['gaji'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
$emel=$_POST['emel'];

$records2=mysql_query("UPDATE student set name='$name', gmpcname='$gmpcname', kptname='$kptname', icno='$icno', gender='$gender',oic='$oic', dob='$dob', pob='$pob', issuedate='$issuedate', citizen='$citizen', race='$race', religion='$religion', address1='$address1', address2='$address2', address3='$address3', postcode='$postcode', city='$city', state='$state', phone='$phone', email='$email', tahun='$tahun', kelas='$kelas', nama='$nama', nric='$nric', tlahir='$tlahir', negara='$negara', bangsa='$bangsa', agama='$agama', alamat='$alamat', kerja='$kerja', gaji='$gaji', tel1='$tel1', tel2='$tel2', emel='$emel' WHERE icno='$icno'") or die(mysql_error());
if($records2)
{
header('location:senaraipelajar.php');
}
}
$sql=mysql_query ("SELECT * FROM student where icno='$icno'");
$records=mysql_fetch_assoc($sql);
?>

<form method="post" action="">  
<table style=" border:1px solid silver" cellpadding="10px" cellspacing="0px" 
align="center" border="0"> 
<tr> 
<td colspan="4" style="background:#9ACD32; color:#FFFFFF; font size:20px"><center>
  <strong>UPDATE STUDENT INFORMATION</strong>
</center></td> 

<tr align="left"> 
<th scope= "row">NAME</th>
<td>:</td>
<td><input type="varchar" name="name" value="<?php echo $records['name']; ?>" /></td></tr>
<tr align="left"> 
<th scope= "row">GMPCNAME</th>
<td>:</td>
<td><input type="varchar" name="gmpcname" value="<?php echo $records['gmpcname']; ?>" /></td></tr>
<tr align="left"> 
<th scope= "row">KPTNAME</th>
<td>:</td>
<td><input type="varchar" name="kptname" value="<?php echo $records['kptname']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">IC NUM</th>
<td>:</td>
<td><input type="varchar" name="icno" value="<?php echo $records['icno']; ?>" /></td> 
<th scope= "row">OLD IC</th>
<td>:</td>
<td><input type="varchar" name="oic" value="<?php echo $records['oic']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">GENDER</th>
<td>:</td>
<td><input type="varchar" name="gender" value="<?php echo $records['gender']; ?>" /></td> 
<th scope= "row">DOB</th>
<td>:</td>
<td><input type="date" name="dob" value="<?php echo $records['dob']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">PLACE OF BIRTH</th>
<td>:</td>
<td><input type="varchar" name="pob" value="<?php echo $records['pob']; ?>" /></td>
<th scope= "row">DATE OF REGISTRATION</th>
<td>:</td>
<td><input type="datetime(d-m-y his)" name="issuedate" value="<?php echo $records['issuedate']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">CITIZEN</th>
<td>:</td>
<td><input type="varchar" name="citizen" value="<?php echo $records['citizen']; ?>" /></td>
<th scope= "row">RACE</th>
<td>:</td>
<td><input type="varchar" name="race" value="<?php echo $records['race']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">RELIGION</th>
<td>:</td>
<td><input type="varchar" name="religion" value="<?php echo $records['religion']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">ADDRESS 1</th>
<td>:</td>
<td><input type="varchar" name="address1" value="<?php echo $records['address1']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">ADDRESS 2</th>
<td>:</td>
<td><input type="varchar" name="address2" value="<?php echo $records['address2']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">ADDRESS 3</th>
<td>:</td>
<td><input type="varchar" name="address3" value="<?php echo $records['address3']; ?>" /></td> 
<th scope= "row">POSTCODE</th>
<td>:</td>
<td><input type="int" name="postcode" value="<?php echo $records['postcode']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">CITY</th>
<td>:</td>
<td><input type="varchar" name="city" value="<?php echo $records['city']; ?>" /></td>
<th scope= "row">STATE</th>
<td>:</td>
<td><input type="varchar" name="state" value="<?php echo $records['state']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">PHONE</th>
<td>:</td>
<td><input type="int" name="phone" value="<?php echo $records['phone']; ?>" /></td>
<th scope= "row">EMAIL</th>
<td>:</td>
<td><input type="varchar" name="email" value="<?php echo $records['email']; ?>" /></td></tr>

<tr align="left"> 
<th scope= "row">TAHUN</th>
<td>:</td>
<td><input type="varchar" name="tahun" value="<?php echo $records['tahun']; ?>" /></td>
<th scope= "row">KELAS</th>
<td>:</td>
<td><input type="varchar" name="kelas" value="<?php echo $records['kelas']; ?>" /></td></tr>

<td colspan="4" style="background:#9ACD32; color:#FFFFFF; font size:20px"><center>
  <strong>PARENTS INFORMATION</strong>
</center></td> 

<tr align="left"> 
<th scope= "row">NAME</th>
<td>:</td>
<td><input type="varchar" name="nama" value="<?php echo $records['nama']; ?>" /></td></tr>
<tr align="left"> 
<th scope= "row">IC NUM</th>
<td>:</td>
<td><input type="bigint" name="nric" value="<?php echo $records['nric']; ?>" /></td>
<th scope= "row">DOB</th>
<td>:</td>
<td><input type="date" name="tlahir" value="<?php echo $records['tlahir']; ?>" /></td></tr>
<tr align="left"> 
<th scope= "row">CITIZEN</th>
<td>:</td>
<td><input type="varchar" name="citizen" value="<?php echo $records['negara']; ?>" /></td>
<th scope= "row">RACE</th>
<td>:</td>
<td><input type="varchar" name="race" value="<?php echo $records['bangsa']; ?>" /></td></tr>
<tr align="left"> 
<th scope= "row">RELIGION</th>
<td>:</td>
<td><input type="varchar" name="religion" value="<?php echo $records['agama']; ?>" /></td>
<th scope= "row">ADDRESS</th>
<td>:</td>
<td><input type="varchar" name="alamat" value="<?php echo $records['alamat']; ?>" /></td></tr>
<tr align="left"> 
<th scope= "row">JOB</th>
<td>:</td>
<td><input type="varchar" name="kerja" value="<?php echo $records['kerja']; ?>" /></td>
<th scope= "row">SALARY</th>
<td>:</td>
<td><input type="float" name="gaji" value="<?php echo $records['gaji']; ?>" /></td></tr>
<tr align="left"> 
<th scope= "row">PHONE 1</th>
<td>:</td>
<td><input type="int" name="tel1" value="<?php echo $records['tel1']; ?>" /></td>
<th scope= "row">PHONE 2</th>
<td>:</td>
<td><input type="int" name="tel2" value="<?php echo $records['tel2']; ?>" /></td></tr>
<tr align="left"> 
<th scope= "row">EMAIL</th>
<td>:</td>
<td><input type="int" name="emel" value="<?php echo $records['emel']; ?>" /></td></tr>

<tr>
<th></th>
<td></td>
<td><input type="submit" name="submit" value="submit" />&nbsp; &nbsp;<a href="senaraipelajar.php">Back</a></td></tr>
</tr></table></form>
<?php
}
?>
</body>
</html>