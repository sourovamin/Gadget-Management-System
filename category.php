<?php include("includes/db_connect.php");?>
<?php include("includes/functions.php"); 
			include("includes/header.php");
			
?>

    <style>
        #case{
margin-top:10px;
margin-bottom:10px;
margin-right:150px;
margin-left:500px;
border:3px solid #a1a1a1;
padding:9px 35px; 
width:180px;border-radius:20px;
box-shadow: 7px 7px 6px;
		}
#button{
width:200px;
height:35px;
font-weight:bold;
font-size:20px;
background:#ff0000;
margin-left:auto;
margin-right:auto;
display:block;
}		
	</style>


 <div id="case">
			<form method="POST" action="category1.php">						
<input id="button" type="submit" name="mobile" value="Mobile" />
</form>
 </div>
 
  <div id="case">
			<form method="POST" action="category1.php">						
<input id="button" type="submit" name="laptop" value="Laptop" />
</form>
 </div>
  
   <div id="case">
			<form method="POST" action="category1.php">						
<input id="button" type="submit" name="gaming" value="Gaming Device" />
</form>
 </div>
   
    <div id="case">
			<form method="POST" action="category1.php">						
<input id="button" type="submit" name="accessories" value="Accessories" />
</form>
 </div>
	
	 <div id="case">
			<form method="POST" action="category1.php">						
<input id="button" type="submit" name="others" value="Others" />
</form>
 </div>

 

<?php include("includes/db_disconnect.php"); ?>