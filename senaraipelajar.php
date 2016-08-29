<?php 
require('db.php');
require('autologout.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!-- <p><!-- <input align="center" /> --> <!-- <h2> This is another secured page. </h2></p> --> 

<?php
//mysql_connect("localhost", "root", "");
//mysql_select_db("register")

$sql = "SELECT * FROM student WHERE flag='0'";
$records=mysql_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Data</title>
	<!-- --CSS FILE-- -->
	<link rel="stylesheet" href="css/style.css" />

	<!-- --JAVASCRIPT FILE-- -->
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body> 
<form method="post" action="">  <center><strong><h2>STUDENT INFORMATION</h2></strong></center>
<center><!-- <form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form> --></center><br/>
<table width="200" style=" border:1px solid silver" cellpadding="10" cellspacing="0px" 
align="center" border="1">  
 <tr colspan="10" style="background:#9ACD32; color:#FFFFFF; font size:20px">

<td> NAME</td>
<td> IC NUM </td>
<!-- <td> GENDER </td>
<td> OLD IC </td>
<td> DOB </td>
<td> PLACE OF BIRTH </td>
<td> DATE OF REGISTRATION </td>
<td> CITIZEN </td>
<td> RACE </td>
<td> RELIGION </td>
<td> ADDRESS 1 </td>
<td> ADDRESS 2 </td>
<td> ADDRESS 3 </td>
<td> POSTCODE </td>
<td> CITY </td>
<td> STATE </td>
<!-- <td> PHOTO </td> -->
<!-- <td> PHONE </td>
<td> EMAIL </td>
<td> YEAR </td>
<td> CLASS </td>  -->
</tr>

<?php
while ($student=mysql_fetch_assoc($records)){
	//error_reporting(0);
 
	echo "<tr>";
	echo "<td>". $student['name']. "</td>";
	echo "<td>". $student['icno']. "</td>";
	// echo "<td>". $student['gender']. "</td>";
	// echo "<td>". $student['oic']. "</td>";
	// echo "<td>". $student['dob']. "</td>";
	// echo "<td>". $student['pob']. "</td>";
	// echo "<td>". $student['issuedate']. "</td>";
	// echo "<td>". $student['citizen']. "</td>";
	// echo "<td>". $student['race']. "</td>";
	// echo "<td>". $student['religion']. "</td>";
	// echo "<td>". $student['address1']. "</td>";
	// echo "<td>". $student['address2']. "</td>";
 //    echo "<td>". $student['address3']. "</td>";
 //    echo "<td>". $student['postcode']. "</td>";
 //    echo "<td>". $student['city']. "</td>";
 //    echo "<td>". $student['state']. "</td>";
 //    // echo "<td>". $student['photo']. "</td>";
 //    echo "<td>". $student['phone']. "</td>";
 //    echo "<td>". $student['email']. "</td>";
 //    echo "<td>". $student['tahun']. "</td>";
 //    echo "<td>". $student['kelas']. "</td>";
 echo "<td><a href='maklumatindividu.php?icno=".$student['icno']."'>DETAILS</a></td>";
	echo "<td><a href='edit1.php?icno=".$student['icno']."'>EDIT</a></td>";
	echo "<td><a class='delete' title=".$student['icno'].">X</a></td>";
} //end while
?>
 </table>

<!-- <p><a href="user.php">Customer View</a></p> -->
<p><a href="index.php">Home </a> &nbsp; &nbsp;&nbsp; 
<a  href="loglogout.php">Logout</a>&nbsp; &nbsp;&nbsp; 
<a  href="cuba.php">Tambah</a>&nbsp; &nbsp;&nbsp;
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
        				window.location.href = 'delete1.php?icno='+$delete_id;
        			}
        return true;
    			});
    		}

        
    );
});
</script>
</html>
