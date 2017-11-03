<?php
include("includes/db_connect.php");
include("includes/functions.php"); 
include("includes/header.php");


?>
    <style>
        #pay{
margin-top:100px;
margin-bottom:150px;
margin-right:150px;
margin-left:450px;
border:3px solid #a1a1a1;
padding:9px 35px; 
width:250px;border-radius:20px;
box-shadow: 7px 7px 6px;
}
#button{
width:auto;
height:30px;
font-weight:bold;
font-size:20px
}
    </style>
    
<div id="pay">
    <fieldset style="width:30%"><legend>Account Information</legend>
<form method="POST" action="transaction.php">
    <br>Account No.<br><input type="text" name="account" size="40"><br>
    Pin <br><input type="number" name="pin" ><br>
    
    <br><input id="button" type="submit" name="pay" value="Pay Now">
    </form>
</fieldset>
</div>
</body>
</html>

