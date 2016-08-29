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
    <li><a href="add_student1.php">Parent Details</a></li>
    <li class="active"><a href="add_student2.php">Finish</a></li>
    </ul>
</div>

    <div class="col-sm-8 text-center">
      <center><h1>Thank You!</h1></center>
      <center><h1>You Are Successful Registered!</h1></center>
      <br><br><center>
      <img src="images/images.jpg">

    </div>
      </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright HR @ NadiCOM Technology Centre 2016</p>
</footer>

</body>
</html>

