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
    <li class="active"><a href="add_student.php">Student Details</a></li>
    <li><a href="add_student1.php">Parent Details</a></li>
    <li><a href="add_student2.php">Finish</a></li>
    </ul>
</div>
    <?php
  require('db.php');
  //require('autologout.php');
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
        // $tahun = $_POST['formyear'];
        $kelas = $_POST['formclass'];
               
        $query = "INSERT INTO student (name,  gmpcname, kptname, icno, gender, oic, dob, pob, issuedate, citizen, race, religion, address1, address2, address3, postcode, city, state,  phone, email, tahun, kelas) VALUES ('$name', '$gmpcname', '$kptname', '$icno', '$gender','$oic', '$dob', '$pob', '$issuedate', '$citizen', '$race', '$religion', '$address1', '$address2', '$address3', '$postcode', '$city', '$state', '$phone', '$email', '$kelas')";

        $result = mysql_query($query) or die (mysql_error());
        if($result){
            // echo"<td> Click here to add parents data <a href='add_student1.php'>Next</a></td>";
            // echo "</tr>";
          header("location: add_student1.php");
        }
    }else{
?>
<div class="form">
<form method="post" action="" width='950'>  <center>
<table width='650' style=" border:1px solid silver" cellpadding="10px" cellspacing="0px" align="center" border="0" >
<tr> <br/><br/><br/> 
<td width= '950' colspan="4" style="background:#9ACD32; color:#FFFFFF; font size:20px"><center>
  <strong>STUDENT REGISTRATION</strong>
</center></td> 
<tr align="left"> 
<th scope= "row">NAME</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Student Name" required /></td></tr>
<tr align="left"> 
<th scope= "row">GMPC NAME</th>
<td>:</td>
<td>
<input type="text" name="gmpcname" placeholder="Student Name" required /></td></tr>

<tr align="left"> 
<th scope= "row">KPT NAME</th>
<td>:</td>
<td>
<input type="text" name="kptname" placeholder="Student Name" required /></td></tr>

<tr align="left"> 
<th scope= "row">IC CARD</th>
<td>:</td>
<td>
<input type="text" name="icno" placeholder="ic num" required /></td></tr>

<tr align="left">
<!--<td align="left"> -->
<th scope= "row">OLD IC</th>
<td>:</td>
<td>
<input type="text" name="oic" placeholder="old ic num" required /> </td></tr>

<tr align="left"> 
<th scope= "row">DATE OF BIRTH</th>
<td>:</td>
<td>
<input type="date" name="dob" placeholder="date of dob" required /></td></tr>

<tr align="left"> 
<th scope= "row">GENDER</th>
<td>:</td>
<td><label for='formgender'></label><br>
<select name="formgender">
<option value="">Select Gender..</option>
<option value="Male">Male</option>
<option value="Female">Female</option></select>
</td></tr>

<tr align="left"> 
<th scope= "row">PLACE OF BIRTH</th>
<td>:</td>
<td>
<input type="text" name="pob" placeholder="name of pob" required /></td></tr>
<tr align="left"> 
<th scope= "row">CITIZEN</th>
<td>:</td>
<td>
<input type="text" name="citizen" placeholder="citizen" required /></td>
<td align="left"> 
<th scope= "row">RACE</th>
<td>:</td>
<td>
<input type="text" name="race" placeholder="race" required /></td></tr>
<tr>


<tr align="left"> 
<th scope= "row">DATE OF REGISTRATION</th>
<td>:</td>
<td>
<input type="datetime" name="issuedate" placeholder="registration" required /></td></tr>
<tr align="left"> 
<th scope= "row">RELIGION</th>
<td>:</td>
<td>
<input type="text" name="religion" placeholder="religion" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 1</th>
<td>:</td>
<td>
<input type="text" name="address1" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 2</th>
<td>:</td>
<td>
<input type="text" name="address2" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 3</th>
<td>:</td>
<td>
<input width ='400' type="text"  name="address3" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">POSTCODE</th>
<td>:</td>
<td>
<input type="text" name="postcode" placeholder="postcode" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">CITY</th>
<td>:</td>
<td>
<input type="text" name="city" placeholder="city name" required /></td>
<td align="left"> 
<th scope= "row">STATE</th>
<td>:</td>
<td>
<input type="text" name="state" placeholder="state" required /></td></tr>

<tr>
<tr align="left"> 
<th scope= "row">PHONE</th>
<td>:</td>
<td>
<input type="text" name="phone" placeholder="phone num" required /></td>
<th scope= "row">EMAIL</th>
<td>:</td>
<td>
<input type="text" name="email" placeholder="email" required /></td></tr>
<tr>
<!--<tr align="left"> 
<th scope= "row">YEAR</th>
<td>:</td>
<td>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"><!--<label form='formyear'></label><br>
<select name="formyear">
<option value="">Select Form..</option>
<option value="1">Tingkatan 1</option>
<option value="2">Tingkatan 2</option>
<option value="3">Tingkatan 3</option>
<option value="4">Tingkatan 4</option>
<option value="5">Tingkatan 5</option>
</select>
</form></td>-->
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
<input type="submit" name="submit" value="Register" />&nbsp; &nbsp;</td></tr>
</tr></table></center>
</form>
</div>
<?php } ?>
    </div>
</div>

<!-- <footer class="container-fluid text-center"> -->
  <!-- <p>Copyright HR @ NadiCOM Technology Centre 2016</p> -->
<!-- </footer> -->

</body>
</html>

