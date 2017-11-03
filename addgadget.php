<?php
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");

if(!loggedin()) {
	header("location:index.php?not_logged_in");}
?>

<?php
if($_SESSION['admin']=='1'){
?>
    <style>
        #case{
margin-top:90px;
margin-bottom:50px;
margin-right:150px;
margin-left:350px;
border:3px solid #a1a1a1;
padding:9px 35px; 
width:500px;border-radius:20px;
box-shadow: 7px 7px 6px;
		}
#button{
width:700px;
height:90px;
font-weight:bold;
font-size:70px;
background:#ff0000;
margin-left:auto;
margin-right:auto;
display:block;
}

.input:focus {
    height:300px;
}
.input{
    width:450px;
    height:90px;
}

	</style>


<?php
$query1="SELECT MAX(gadget_id) AS id FROM gadgets";
$result1=mysql_query($query1);
$ro1=mysql_fetch_array($result1);
$id1=$ro1['id']+1;
?>

<form method="POST" action="addgadget_action.php" enctype="multipart/form-data">
	
<div id="case">
    <fieldset style="width:30%"><legend>BASIC INFORMATION</legend>
	<pre>
*Gadget ID <br><input type="number" name="gadget_id" value="<?php echo $id1 ?>" min="0"><br>
*Device Model <br><input type="text" name="gadget_name" size="70" maxlength="200"><br>

*Category <br><select name="category">
<option value="Mobile">Mobile</option>
<option value="Laptop">Laptop</option>
<option value="Gaming Device">Gaming Device</option>
<option value="Accessories">Accessories</option>
<option value="Others">Others</option>
</select>

*Brand <br><input type="text" name="brand" size="70" maxlength="200"><br>
Price <br><input type="number" name="price" min="10"><br>
Discount (%) <br><input type="number" name="discount" min="0" max="99" value="0"><br>
Released Date <br><input type="date" name="announced">

*Availability <br><select name="availability">
<option value="Available">Available</option>
<option value="Not Available">Not Available</option>
<option value="Coming Soon">Coming Soon</option>
<option value="Market Out">Market Out</option>
</select>
<br>
Colors Available <br><input type="text" name="colors_available" size="70" maxlength="200"><br>
*Device Image <br><input type="file" name="image">
	    </pre>
</fieldset>
</div>




<div id="case">
    <fieldset style="width:30%"><legend>NETWORK</legend>
	<pre>
        
Neteork Specifications<br><textarea class="input" name="network" ></textarea>
	    </pre>
</fieldset>
</div>



<div id="case">
    <fieldset style="width:30%"><legend>HARDWARE</legend>
	<pre>
        
RAM <br><input type="text" name="ram" size="70" maxlength="200"><br>
ROM <br><input type="text" name="rom" size="70" maxlength="200"><br>
SIM <br><input type="text" name="sim" size="70" maxlength="200"><br>
Processor <br><input type="text" name="processor" size="70" maxlength="200"><br>
GPU <br><input type="text" name="gpu" size="70" maxlength="200"><br>
Battery <br><input type="text" name="battery" size="70" maxlength="200">
	    </pre>
</fieldset>
</div>




<div id="case">
    <fieldset style="width:30%"><legend>SPECIFICATIONS</legend>
	<pre>
        
Dimensions <br><input type="text" name="dimensions" size="70" maxlength="200"><br>
Weight <br><input type="text" name="weight" size="70" maxlength="200"><br>
Display Type <br><input type="text" name="display_type" size="70" maxlength="200"><br>
Display Size <br><input type="text" name="display_size" size="70" maxlength="200"><br>
Display Resolution <br><input type="text" name="display_resolution" size="70" maxlength="200"><br>
Display Details<br><textarea class="input" name="display_details" ></textarea><br>
Operating System <br><input type="text" name="os" size="70" maxlength="200"><br>
Camera Details<br><textarea class="input" name="camera" ></textarea><br>
Sound <br><input type="text" name="sound" size="70" maxlength="200">
	    </pre>
</fieldset>
</div>



<div id="case">
    <fieldset style="width:30%"><legend>Other Features</legend>
	<pre>
        
Features<br><textarea class="input" name="features" ></textarea>
	    </pre>
</fieldset>
</div>



<div id="case">
    <fieldset style="width:30%"><legend>RATTINGS</legend>
	<pre>
        
Rattings (On a scale of 100) <br><input type="number" name="ratting" min="1" max="100"><br>
	    </pre>
</fieldset>
</div>



<input id="button" type="submit" name="add" value="ADD DEVICE">


</form>
	
<?php } ?>	