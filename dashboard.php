<?php
session_start();
if(strlen($_SESSION['id'])=="")
{
  header('location:logout.php');
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/style.css" rel="stylesheet">
    <script src="assess/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</head>
<body>
<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="" align="center">Welcome Back : <?php  echo  $_SESSION['name'];?></legend>
    </div>

    <div class="control-group" align="center">
      <!-- Button -->
      <div class="controls">
        <a href="logout.php" class="btn btn-success" type="submit" name="signin">Logout</a>
      </div>
    </div>

  </fieldset>
</form>
<script type="text/javascript">
</script>
</body>
</html>
<?php } ?>