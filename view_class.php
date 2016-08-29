<?php 
require('db.php');
//require('autologout.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<?php
$sql = "SELECT * FROM room ";
$records=mysql_query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>List of Class</title>
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

<form method="post" action="">  <center><strong><h2>CLASS INFORMATION</h2></strong></center>
<br/>
<table width="1000" style=" border:1px solid black" cellpadding="10" cellspacing="0px" 
align="center" border="1">  
 <tr colspan="10" style="background:#9ACD32; color:#FFFFFF; font size:20px">

<td><center> #</center> </td>
<td><center> Class Name</center></td>
<td><center> Registration Fees</center></td>
<td><center> Examination Fees </center></td>
<td><center> Yik Fees</center></td>
<td><center> Cocurriculum Fees</center></td>
<td><center> PIBG Fees</center></td>
<td><center> Library Fees</center></td>
<td><center> Text Book</center></td>
<td><center> Stationery</center></td>
<td><center> School Magazine</center></td>
<td><center> Rules Book</center></td>
<td><center> Welfare Fees</center></td>
<td><center> Spiritual Fees</center></td>
<td><center> Takaful Insurance</center></td>
<td><center> School Utilities</center></td>
<td><center> Discipline Book</center></td>
<td><center> Cocurriculum Book</center></td> 
<td><center> Students File</center></td>
<td><center> SPS</center></td>
<td><center> Hostel Fees</center></td>
<td><center> Others</center></td>
</tr>

<?php
while ($kelas=mysql_fetch_assoc($records)){
	//error_reporting(0);
 
	echo "<tr>";
	echo "<td><center>". $kelas['room_id']. "</center></td>";
	echo "<td><center>". $kelas['room_name']. "</center></td>";
	echo "<td><center>". $kelas['yu_daftar']. "</center></td>";
	echo "<td><center>". $kelas['yu_exam']. "</center></td>";
	echo "<td><center>". $kelas['yu_yik']. "</center></td>";
	echo "<td><center>". $kelas['yu_koko']. "</center></td>";
	echo "<td><center>". $kelas['yu_PIBG']. "</center></td>";
	echo "<td><center>". $kelas['yu_pustaka']. "</center></td>";
	echo "<td><center>". $kelas['yu_teks']. "</center></td>";
	echo "<td><center>". $kelas['yu_alatan']. "</center></td>";
	echo "<td><center>". $kelas['yu_majalah']. "</center></td>";
	echo "<td><center>". $kelas['buku_peraturan']. "</center></td>";
	echo "<td><center>". $kelas['yu_kebajikan']. "</center></td>";
    echo "<td><center>". $kelas['yu_rohani']. "</center></td>";
    echo "<td><center>". $kelas['takaful']. "</center></td>";
    echo "<td><center>". $kelas['utiliti_skul']. "</center></td>";
    echo "<td><center>". $kelas['buku_disiplin']. "</center></td>";
    echo "<td><center>". $kelas['buku_koko']. "</center></td>";
    echo "<td><center>". $kelas['fail_pelajar']. "</center></td>";
    echo "<td><center>". $kelas['sps']. "</center></td>";
    echo "<td><center>". $kelas['asrama']. "</center></td>";
	echo "<td><center>". $kelas['lain']. "</center></td>";
	//echo "<td><a href='edit1.php?icno=".$student['icno']."'>EDIT</a></td>";
	echo "<td><a class='delete' title=".$kelas['room_id']."> X </a></td>";
} //end while
?>
 </table>

<br/><br/>
<a  href="loglogout.php">Logout</a>&nbsp; &nbsp;&nbsp; 
<button onClick="window.print()">Print</button>
</p>
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
        				window.location.href = 'delete1.php?room_id='+$delete_id;
        			}
        return true;
    			});
    		}

        
    );
});
</script>

<footer class="container-fluid text-center">
  <p>Copyright HR @ NadiCOM Technology Centre 2016</p>
</footer>

</body>
</html>