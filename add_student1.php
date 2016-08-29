<?php 
require('db.php');
// require('autologout.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Logo</a> -->
    <img class="index_logo" height="45" width="100" src="images/logosmall.png">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active" ><a href="in.php">Home</a></li>
        <!-- <li><a href="#">Class</a></li> -->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Class <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_class.php">Add Class</a></li>
          <li><a href="view_class.php">View Class</a></li></ul></li>
        <!-- <li><a href="#">Student</a></li> -->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_student.php">Add Student</a></li>
          <li><a href="shuh.php">View Student</a></li></ul></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li></ul> -->
         <!-- <ul class="nav navbar-right top-nav"> -->
                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php
        //Check to see if the user is logged in.
        
        if(isset($_SESSION['username']))
        { 
        echo 
        "".$_SESSION['username']. " ";
        }

        ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                     <li>
                        <a href="loglogout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a>
                    </li>
                    </ul>
                </li>
            </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
   <div class="container">
  <ul class="pagination">
    <li><a href="add_student.php">Student Details</a></li>
    <li class="active"><a href="add_student1.php">Parent Details</a></li>
    <li><a href="add_student2.php">Finish</a></li>
    </ul>
</div>
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
           // echo"<td> Student are registered successfully.Click here to view data <a href='senaraipelajar.php'>Back</a></td>";
            //echo "</tr>";
           header("location: add_student2.php");
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
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright HR @ NadiCOM Technology Centre 2016</p>
</footer>

</body>
</html>

