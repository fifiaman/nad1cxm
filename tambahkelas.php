<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Class</title>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
<?php 
              if(isset($_POST['Save'])){
                $class_name =$_POST['class_name'];
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

                $query = mysql_query("SELECT * FROM class WHERE class_name = '$class_name'") or die(mysql_error());
                $count = mysql_num_rows($query);

                if($count > 0){  ?>
                  <script> 
                  alert('Class Already Exist');
                  </script>
                  <?php
                     }else{
                      mysql_query("INSERT INTO class (class_name, yu_daftar, yu_exam, yu_yik, yu_koko, yu_PIBG, yu_pustaka, yu_teks, yu_alatan, yu_majalah, buku_peraturan, yu_kebajikan, yu_rohani, takaful, utiliti_skul, buku_disiplin, buku_koko, fail_pelajar, sps, asrama, lain) VALUES ('$class_name', '$yu_daftar', '$yu_exam', '$yu_yik', '$yu_koko', '$yu_PIBG', '$yu_pustaka', '$yu_teks', '$yu_alatan', '$yu_majalah', '$buku_peraturan', '$yu_kebajikan', '$yu_rohani', '$takaful', '$utiliti_skul', '$buku_disiplin', '$buku_koko', '$fail_pelajar', '$sps', '$asrama', '$lain')") or die(mysql_error());
                      ?>
                      <script>
                      alert('Successfully Save');
                      window.location = "view_class.php";
                      </script><?php
                     }
             }?>
<div class="form">
<form method="post" action="" width='650'>  <center>
<table width='650' style=" border:1px solid black" cellpadding="10px" cellspacing="0px" align="center" border="0" >
<tr> <br/><br/><br/> 
<td width= '950' colspan="4" style="background:#9ACD32; color:#FFFFFF; font size:20px"><center>
  <strong>ADD NEW CLASS</strong>
</center></td> 
<tr align="left"> 
<th scope= "row">CLASS NAME</th>
<td>:</td>
<td>
<input type="varchar" name="name" placeholder="Student Name" required /></td></tr>
<tr align="left"> 
<th scope= "row">REGISTRATION FEES</th>
<td>:</td>
<td>
<input type="varchar" name="gmpcname" placeholder="Student Name" required /></td></tr>

<tr align="left"> 
<th scope= "row">EXAMINATION FEES</th>
<td>:</td>
<td>
<input type="varchar" name="kptname" placeholder="Student Name" required /></td></tr>

<tr align="left"> 
<th scope= "row">IC CARD</th>
<td>:</td>
<td>
<input type="bigint" name="icno" placeholder="ic num" required /></td>
<td align="left"> 
<th scope= "row">OLD IC</th>
<td>:</td>
<td>
<input type="bigint" name="oic" placeholder="old ic num" required /> </td></tr>

<tr align="left"> 
<th scope= "row">DATE OF BIRTH</th>
<td>:</td>
<td>
<input type="date" name="dob" placeholder="date of dob" required /></td>
<td align="left"> 
<th scope= "row">GENDER</th>
<td>:</td>
<td><form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"><label for='formgender'></label><br>
<select name="formgender">
<option value="">Select Gender..</option>
<option value="Male">Male</option>
<option value="Female">Female</option></select>
</form></td></tr>

<tr align="left"> 
<th scope= "row">PLACE OF BIRTH</th>
<td>:</td>
<td>
<input type="varchar" name="pob" placeholder="name of pob" required /></td></tr>
<tr align="left"> 
<th scope= "row">CITIZEN</th>
<td>:</td>
<td>
<input type="varchar" name="citizen" placeholder="citizen" required /></td>
<td align="left"> 
<th scope= "row">RACE</th>
<td>:</td>
<td>
<input type="varchar" name="race" placeholder="race" required /></td></tr>
<tr>


<tr align="left"> 
<th scope= "row">DATE OF REGISTRATION</th>
<td>:</td>
<td>
<input type="datetime" name="issuedate" placeholder="registration" required /></td>
<td align="left"> 
<th scope= "row">RELIGION</th>
<td>:</td>
<td>
<input type="varchar" name="religion" placeholder="religion" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 1</th>
<td>:</td>
<td>
<input type="varchar" name="address1" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 2</th>
<td>:</td>
<td>
<input type="varchar" name="address2" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">ADDRESS 3</th>
<td>:</td>
<td>
<input width ='400' type="varchar"  name="address3" placeholder="address" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">POSTCODE</th>
<td>:</td>
<td>
<input type="int" name="postcode" placeholder="postcode" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">CITY</th>
<td>:</td>
<td>
<input type="varchar" name="city" placeholder="city name" required /></td>
<td align="left"> 
<th scope= "row">STATE</th>
<td>:</td>
<td>
<input type="varchar" name="state" placeholder="state" required /></td></tr>

<tr>
<tr align="left"> 
<th scope= "row">PHONE</th>
<td>:</td>
<td>
<input type="int" name="phone" placeholder="phone num" required /></td>
<th scope= "row">EMAIL</th>
<td>:</td>
<td>
<input type="varchar" name="email" placeholder="email" required /></td></tr>
<tr>
<tr align="left"> 
<th scope= "row">YEAR</th>
<td>:</td>
<td>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"><label form='formyear'></label><br>
<select name="formyear">
<option value="">Select Form..</option>
<option value="1">Tingkatan 1</option>
<option value="2">Tingkatan 2</option>
<option value="3">Tingkatan 3</option>
<option value="4">Tingkatan 4</option>
<option value="5">Tingkatan 5</option>
</select>
</form></td>
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
<input type="submit" name="submit" value="Register" />&nbsp; &nbsp;<a href="senaraipelajar.php">Back</a></td></tr>
</tr></table></center>
</form>
</div>
<?php } ?>
</body>
</html>