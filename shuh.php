<?php 
require('db.php');
require('autologout.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<?php
$sql = "SELECT * FROM student WHERE flag='0'";
$records=mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>List of Student</title>
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
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Class <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_class.php">Add Class</a></li>
          <li><a href="view_class.php">View Class</a></li></ul></li>
        <!-- <li><a href="#">Student</a></li> -->
        <li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student <span class="caret"></span></a>
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
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left">
      <form method="post" action="">  <center><strong><h2>STUDENT INFORMATION</h2></strong></center>
<br/>
<table width="800" style=" border:1px solid silver" cellpadding="10" cellspacing="0px" 
align="center" border="1">  
 <tr colspan="10" style="background:#9ACD32; color:#FFFFFF; font size:20px">

<td> NAME</td>
<td> IC NUM </td>
</tr>

<?php
while ($student=mysql_fetch_assoc($records)){
  //error_reporting(0);
 
  echo "<tr>";
  echo "<td>". $student['name']. "</td>";
  echo "<td>". $student['icno']. "</td>";
  echo "<td><a href='maklumatindividu.php?icno=".$student['icno']."'>DETAILS</a></td>";
  echo "<td><a href='edit1.php?icno=".$student['icno']."'>EDIT</a></td>";
  echo "<td><a class='delete' title=".$student['icno'].">X</a></td>";
} //end while
?>
 </table>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
  //syntax dia mmg guna document

      $("a.delete").each(
        //class delete dri <a>
        function(intIndex,domEle)
        {
          $(this).bind("click",function(e)
          {
            //initliaze delete_id with value title
            var $delete_id = $(domEle).attr("title");
            
            //alert($delete_id);

            if(!confirm('Are you sure?')){
                e.preventDefault();
                return false;
              }
              else
              {
                window.location.href = 'deleteRekod.php?icno='+$delete_id;
              }
        return true;
          });
        }

        
    );
});
</script>
</html>

