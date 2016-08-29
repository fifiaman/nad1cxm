<?php 
// require('db.php');
//require('autologout.php');
// include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Class</title>
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
        <li><a href="in.php">Home</a></li>
        <!-- <li><a href="#">Class</a></li> -->
        <li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Class <span class="caret"></span></a>
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
    <div class="container-fluid">
      <div class="panel panel-primary">
      <div class="panel-heading"><i class="fa fa-sitemap fa"></i>&nbsp; Add New Class</div>
      <!-- panel heading -->
      <div class="panel-body">
        <div class="table" align="center"> 
       
            <?php 
            require('db.php');
            // require('autologout.php');

              if(isset($_POST['room_name'])){
                $room_name =$_POST['room_name'];
                $yu_daftar =$_POST['yu_daftar'];
                $yu_exam =$_POST['yu_exam'];
                $yu_yik =$_POST['yu_yik'];
                $yu_koko =$_POST['yu_koko'];
                $yu_PIBG =$_POST['yu_PIBG'];
                $yu_pustaka =$_POST['yu_pustaka'];
                $yu_teks =$_POST['yu_teks'];
                $yu_alatan =$_POST['yu_alatan'];
                $yu_majalah =$_POST['yu_majalah'];
                $buku_peraturan =$_POST['buku_peraturan'];
                $yu_kebajikan =$_POST['yu_kebajikan'];
                $yu_rohani =$_POST['yu_rohani'];
                $takaful =$_POST['takaful'];
                $utiliti_skul =$_POST['utiliti_skul'];
                $buku_disiplin =$_POST['buku_disiplin'];
                $buku_koko =$_POST['buku_koko'];
                $fail_pelajar =$_POST['fail_pelajar'];
                $sps =$_POST['sps'];
                $asrama =$_POST['asrama'];
                $lain =$_POST['lain'];

                $query = "INSERT INTO room (room_name, yu_daftar, yu_exam, yu_yik, yu_koko, yu_PIBG, yu_pustaka, yu_teks, yu_alatan, yu_majalah, buku_peraturan, yu_kebajikan, yu_rohani, takaful, utiliti_skul, buku_disiplin, buku_koko, fail_pelajar, sps, asrama, lain) VALUES ('$room_name', '$yu_daftar', '$yu_exam', '$yu_yik', '$yu_koko', '$yu_PIBG', '$yu_pustaka', '$yu_teks', 
                '$yu_alatan', '$yu_majalah', 
                '$buku_peraturan', '$yu_kebajikan', 
                '$yu_rohani', '$takaful', '$utiliti_skul', '$buku_disiplin','$buku_koko', 
                '$fail_pelajar', '$sps', '$asrama', 
                '$lain'))" or die(mysql_error());
                $result = mysql_query($query)
                 or die(mysql_error());
                    if ($result){
                      ?>
                      <script>
                      alert('Successfully Save');
                      window.location = "view_class.php";
                      </script><?php
                    }
                     }
                     else{
                        //$query1 = mysql_query("SELECT * FROM class WHERE class_name = '$class_name'") or die(mysql_error());
                        //  $count = mysql_num_rows($query1);
                          //if($count > 0){?>
                              <script>
                          //   alert('Class Already Exist');
                              </script><?php
                          }
                     //}
             ?>
               </div>                          
                        </div>        
          <div class="form"><center>
          <form method="post" action="">
          <center>
            <table width="650" style="border:1px solid black" cellpadding="10px" cellspacing="0px" align="center" border="0">
              
<tr align="center"> 
<th scope= "row">CLASS NAME</th>
<td>:</td>
<td>
<input type="text" name="room_name" placeholder="Class Name" required /></td></tr>
<tr align="center"> 
<th scope= "row">REGISTRATION FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Registration Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">EXAMINATION FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Examination Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">YIK FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Yik Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">COCURRICULUM FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Cocurriculum Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">PIBG FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="PIBG Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">LIBRARY FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Library Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">TEXT BOOK</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Text Book Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">STATIONERY FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Stationery Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">MAGAZINE FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Magazine Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">RULES BOOK</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Rules Book Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">WELFARE FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="welfare Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">SPIRITUAL FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Spiritual Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">TAKAFUL</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Takaful" required /></td></tr>
<tr align="center"> 
<th scope= "row">SCHOOL UTILITIES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="School Utilities" required /></td></tr>
<tr align="center"> 
<th scope= "row">DISICPLINE BOOK</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Disicpline Book" required /></td></tr>
<tr align="center"> 
<th scope= "row">COCURRICULUM BOOK</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Cocurriculum Book" required /></td></tr>
<tr align="center"> 
<th scope= "row">STUDENT FILE</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Student File" required /></td></tr>
<tr align="center"> 
<th scope= "row">SPS</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="SPS" required /></td></tr>
<tr align="center"> 
<th scope= "row">HOSTEL FEES</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Hostel Fees" required /></td></tr>
<tr align="center"> 
<th scope= "row">Others</th>
<td>:</td>
<td>
<input type="text" name="name" placeholder="Others" required /></td></tr>
<tr>
<th></th>
<td></td>
<td>
<input type="submit" name="submit" value="Save" />&nbsp; &nbsp;<!-- <a href="view_class.php">Back</a> --></td></tr>
            </table>
          </center></form></center>

                        </div>             
                    </div>                   
                </div>
      </div>
    </div>  
        </div>
      

<!-- <footer class="container-fluid text-center"> -->
  <!-- <p>Copyright HR @ NadiCOM Technology Centre 2016</p> -->
<!-- </footer> -->

</body>
</html>

