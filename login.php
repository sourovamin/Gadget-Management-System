<?php error_reporting(0); ?>


<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to Gadget Management System</title>
<link rel="stylesheet" type="text/css" href="style-sign.css">
</head>
<body>
  <?php include("includes/functions.php");
  /*
  if(loggedin()) {
  	header("location:userdefault.php");
  	}
    */
  ?>
  
<div id="header" style="background-color:#952A0C;height:150px;text-align:center">
<br/>
    <h1 style="margin-bottom:0;"><font color="white">Gadget Management System (GMS)</font></h1>
    <p>© mahzabin#1204068 #amin-1204107 #abir-1204112 </p>
</div>

<div id="menu" style="background-color:#952A0C;height:40px;float:none;text-align:center;font-size:25px;">
    <a href="userdefault.php" style="color:#EFF9F9;text-decoration: none;">Home</a>&nbsp;&nbsp;&nbsp;
    <a href="category.php" style="color:#EFF9F9;text-decoration: none;">Categories</a>&nbsp;&nbsp;&nbsp;
    <a href="brands.php" style="color:#EFF9F9;text-decoration: none;">Brands</a>&nbsp;&nbsp;&nbsp;
    <a href="offer.php" style="color:#EFF9F9;text-decoration: none;">Discount Offer</a>&nbsp;&nbsp;&nbsp;
    <a href="highlyrated.php" style="color:#EFF9F9;text-decoration: none;">Highly Rated</a>&nbsp;&nbsp;&nbsp;
    <a href="compare.php" style="color:#EFF9F9;text-decoration: none;">Compare</a>&nbsp;&nbsp;&nbsp;
</div>
  
  
<div id="Sign-In">
    <fieldset style="width:30%"><legend>LOGIN HERE</legend>
    <?php  $log=1;
		if($_GET['log']) {$log=$_GET['log'];}
    if($log>1) {echo '<font color="red">wrong user name or password</font>';}
    if(isset($_GET['not_logged_in'])) {
    	echo '<font color="red">please login first</font>';}
    //if(isset($_GET['logout'])) {
    	session_start();
		unset($_SESSION['username']);
	  session_regenerate_id();
	  $_SESSION['username'] = '';
	 session_write_close();
    session_destroy();
    //}
    ?>
<form method="POST" action="connectivity.php">
    Username <br><input type="text" name="user" size="40"><br>
    Password <br><input type="password" name="pass" size="40"><br><br>
    <input id="button" type="submit" name="submit" value="Login">
    </form>
</fieldset>
</div>

<form method="POST" action="register.php">
<input id="reg" type="submit" name="register" value="REGISTER NOW" />
</form>

</body>
</html>