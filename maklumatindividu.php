<?php 
require('db.php');
require('autologout.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!-- <p><!-- <input align="center" /> --> <!-- <h2> This is another secured page. </h2></p> --> 

<?php
//mysql_connect("localhost", "root", "");
//mysql_select_db("register")
$icno = $_GET['icno'];

if(! is_numeric($icno))
die('invalid ic num');
//if(isset($_GET['icno']))
//{
//$icno=$_GET['icno'];
$sql = "SELECT * FROM student where icno ='$icno' ";
$records=mysql_query($sql);

echo "<h1>Student Details</h1>";
while($student = mysql_fetch_array($records, MYSQL_ASSOC))
{
	$name = $student['name'];
	$icno = $student['icno'];
	$gender = $student['gender'];
	$oic = $student['oic'];
	$dob = date("d-m-Y");
	$pob = $student['pob'];
	$issuedate = date("d-m-Y H:i:s");
	$citizen = $student['citizen'];
	$race = $student['race'];
	$religion = $student['religion'];
	$address1 = $student['address1'];
	$address2 = $student['address2'];
	$address3 = $student['address3'];
	$postcode = $student['postcode'];
	$city = $student['city'];
	$state = $student['state'];
	$phone = $student['phone'];
	$email = $student['email'];
	$tahun = $student['tahun'];
	$kelas = $student['kelas'];
	$nama = $student['nama'];
	$nric = $student['nric'];
	$tlahir = $student['tlahir'];
	$negara = $student['negara'];
	$bangsa = $student['bangsa'];
	$agama = $student['agama'];
	$alamat = $student['alamat'];
	$kerja = $student['kerja'];
	$gaji = $student['gaji'];
	$tel1 = $student['tel1'];
	$tel2 = $student['tel2'];
	$emel = $student['emel'];
	
	echo "<center><div border='1'  style='margin:30px 0px;'></center>
	Name    : $name<br/>
	IC NUm    : $icno<br/>
	Gender    : $gender<br/>
	OLD IC    : $oic<br/>
	DOB    : $dob<br/>
	POB    : $pob<br/>
	Registration Date    : $issuedate<br/>
	Citizen   : $citizen<br/>
	Race    : $race<br/>
	Religion    : $religion<br/>
	Address 1    : $address1<br/>
	Address 2    : $address2<br/>
	Address 3    : $address3<br/>
	Postcode    : $postcode<br/>
	City    : $city<br/>
	State    : $state<br/>
	Phone    : $phone<br/>
	Email    : $email<br/>
	Year    : $tahun<br/>
	Class Name    : $kelas<br/></div>
	
	<p><h1>Parents Details</h1></p>
	<div style='margin-right:30px 0px;'>
	Name    : $nama<br/>
	IC Num    : $nric<br/>
	DOB   : $tlahir<br/>
	Citizen    : $negara<br/>
	Race   : $race<br/>
	Religion    : $agama<br/>
	Address    : $alamat<br/>
	Job   : $kerja<br/>
	Salary    : $gaji<br/>
	Phone 1    : $tel1<br/>
	Phone 2    : $tel2<br/>
	Email    : $emel<br/>
	"; 
	}
mysql_close();

?>


<p><a href="in.php">HOME </a> &nbsp; &nbsp;&nbsp; 
<a  href="loglogout.php">LOGOUT</a>&nbsp; &nbsp;&nbsp; 
<!-- <a href='edit1.php?icno=".$student['icno']."'>UPDATE</a>&nbsp; &nbsp;&nbsp;-->
<a href="edit1.php">UPDATE</a>&nbsp; &nbsp;&nbsp;
<a  href="shuh.php">BACK</a>&nbsp; &nbsp;&nbsp;
<button onClick="window.print()">Print</button>
</p>

</body>
</html>