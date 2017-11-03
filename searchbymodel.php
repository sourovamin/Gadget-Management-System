<?php
include("includes/db_connect.php");
include("includes/functions.php"); 
include("includes/header.php");

?>
  <style>
        #searchbymodel{
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
width:100px;
height:30px;
font-weight:bold;
font-size:20px
}
    </style>
    
<div id="searchbymodel">
    <fieldset style="width:30%"><legend>Search by Model</legend>
<form method="POST" action="search.php">
    <br>Device Model <br><input type="text" name="model" size="40"><br>
    <br><input id="button" type="submit" name="submit" value="Search">
    </form>
</fieldset>
</div>
</body>
</html>
