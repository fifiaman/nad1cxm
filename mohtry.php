<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages 

if (isset($_POST['Submit'])){
  $name = $_POST['name'];
  $gmpcname = $_POST['gmpcname'];


$sql = "INSERT INTO pelajar (name, gmpcname) VALUES ('$name', '$gmpcname') ";
$records=mysql_query($sql);
if ($records){
  echo" congrats. click here to go next page";
}}else{
?>

<div class="container">
  <h2>Horizontal form with static control</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gmpcname">GMPC Name:</label>
      <div class="col-sm-10">
        <input type="varchar" class="form-control" id="gmpcname" placeholder="Enter GMPC Name">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php } ?>
</body>
</html>
