<?php
session_start();
// include Function  file
include_once('function.php');
// Object creation
$usercredentials=new DB_con();
if(isset($_POST['signin']))
{
// Posted Values
$username=$_POST['username'];
$password=md5($_POST['password']);
//Function Calling
$ret=$usercredentials->signin($username,$password);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['id']=$num['id'];
  $_SESSION['name']=$num['name'];
// For success
echo "<script>window.location.href='dashboard.php'</script>";
}
else
{
// Message for unsuccessfull login
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/style.css" rel="stylesheet">
    <script src="assets/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</head>
<body>
<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">User Sign In</legend>
    </div>

<div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>


    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>
 

 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" type="submit" name="signin">Signin</button>
      </div>
    </div>

 <div class="control-group">
      <!-- Button -->
      <div class="controls">
      Not Registered yet? <a href="index.php">Register Here</a>
      </div>
    </div>

  </fieldset>
</form>
<script type="text/javascript">

</script>
</body>
</html>
