<?php
include("includes/db_connect.php");
include("includes/functions.php"); 
include("includes/header.php");


?>
    <style>
        #compare{
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
    
<div id="compare">
    <fieldset style="width:30%"><legend>Compare Devices</legend>
<form method="POST" action="compare1.php">
    <br>Device Name<br><input type="text" name="first" size="40"><br>
    Compare With<br><input type="text" name="second" size="40"><br>
    
    <br><input id="button" type="submit" name="compare" value="Compare Now">
    </form>
</fieldset>
</div>
</body>
</html>

