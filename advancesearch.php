<?php
include("includes/db_connect.php");
include("includes/functions.php"); 
include("includes/header.php");

?> 
    <style>
        #advancesearch{
margin-top:100px;
margin-bottom:150px;
margin-right:150px;
margin-left:400px;
border:3px solid #a1a1a1;
padding:9px 35px; 
width:400px;border-radius:20px;
box-shadow: 7px 7px 6px;
}
#button{
width:100px;
height:30px;
font-weight:bold;
font-size:20px
}
    </style>
    
<div id="advancesearch">
    <fieldset style="width:30%"><legend>Advance Search</legend>
<form method="POST" action="search.php">
    <br>Device Model <br><input type="text" name="model" size="50"><br>
	Minimum Price <br><input type="number" name="start"><br>
    Maximum Price <br><input type="number" name="end" ><br>
	
	Category <br><select name="category">
<option value="Mobile">Mobile</option>
<option value="Laptop">Laptop</option>
<option value="Gaming Device">Gaming Device</option>
<option value="Accessories">Accessories</option>
<option value="Others">Others</option>
</select><br>
	
	Availability <br><select name="availability">
<option value="Available">Available</option>
<option value="Not Available">Not Available</option>
<option value="Coming Soon">Coming Soon</option>
<option value="Market Out">Market Out</option>
</select>
<br><br>
	
    <input id="button" type="submit" name="advance" value="Search">
    </form>
</fieldset>
</div>
</body>
</html>
