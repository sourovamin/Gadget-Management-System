<?php error_reporting(0); ?>


<html>
<body>
<div id="container">
    
    <?php
    if((loggedin())){
         
         
 
 $id=$_SESSION['id'];        
 $query1 = "SELECT * FROM admin where admin.id='$id'";
 $result1=mysql_query($query1);
 $ro1=mysql_fetch_array($result1);
 $buy=$ro1['cart'];
        
        
        ?>
<div id="hello" style="background-color:#1ba523;height:50px;float:right;font-size:20px;">
    <br/>
    <font color="white">Hello, <a href="accounts.php?token=<?php echo $_SESSION['id'];?>" style="color:#C7D7EE"><?php echo $_SESSION['username'];?></a> !</font>
    <br/>
    <a href="login.php" style="color:#C7D7EE">Logout</a><br>
    <?php
    if($_SESSION['admin']=='0'){
        ?>
    <a href="pay.php" style="color: #f2ef26">Pay Now: <?php echo $buy?> Tk.</a>
    <?php } ?>
</div>
    <?php } ?>

    
<div id="header" style="background-color:#1ba523;height:100px;text-align:center">
<br/>
    <h1 style="margin-bottom:0;"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gadget Management System</font></h1></div>
<div id="search" style="background-color:#F3F4F5;height:40px;float:none;text-align:center;font-size:25px;">
<b>Search by:</b>&nbsp;&nbsp;&nbsp;
<a href="searchbymodel.php" style="color:#952A0C;text-decoration: none;">Model</a>&nbsp;&nbsp;&nbsp;
<a href="searchbyprice.php" style="color:#952A0C;text-decoration: none;">Price</a>&nbsp;&nbsp;&nbsp;
<a href="advancesearch.php" style="color:#952A0C;text-decoration: none;">Advance Search</a>&nbsp;&nbsp;&nbsp;
</div>
<div id="menu" style="background-color:#1ba523;height:40px;float:none;text-align:center;font-size:25px;">
    <a href="userdefault.php" style="color:#EFF9F9;text-decoration: none;">Home</a>&nbsp;&nbsp;&nbsp;
    <a href="category.php" style="color:#EFF9F9;text-decoration: none;">Categories</a>&nbsp;&nbsp;&nbsp;
    <a href="offer.php" style="color:#EFF9F9;text-decoration: none;">Discount Offer</a>&nbsp;&nbsp;&nbsp;
    <a href="highlyrated.php" style="color:#EFF9F9;text-decoration: none;">Highly Rated</a>&nbsp;&nbsp;&nbsp;
    
    <?php
    if((loggedin())){
        ?>
    <a href="accounts.php?token=<?php echo $_SESSION['id'];?>" style="color:#EFF9F9;text-decoration: none;">Account</a>&nbsp;&nbsp;
    <?php
    }
    else{
        ?>
        <a href="login.php" style="color:#EFF9F9;text-decoration: none;">Login/Register</a>&nbsp;&nbsp;&nbsp;
    <?php } ?>


</div>
</div>
</body>
</html>

<?php
if($_SESSION['admin']=='1' && (loggedin())){
    include("includes/adminpanel.php");
}
?>