<?php include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");

if(!loggedin()) {
	header("location:index.php?not_logged_in");
    }
    
    
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
width:auto;
height:40px;
font-weight:bold;
font-size:30px;
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
$receive=$_POST['edid'];
	
$query="select * from gadgets where gadgets.gadget_id='$receive' ";
$result=mysql_query($query);
confirm_connection($result);
		while($ro=mysql_fetch_array($result)) {
								$gadget_id=$ro['gadget_id'];
								$category=$ro['category'];
								$gadget_name=$ro['gadget_name'];
								$brand=$ro['brand'];
								$announced=$ro['announced'];
								$availability=$ro['availability'];
                                $network=$ro['network'];
								$dimensions=$ro['dimensions'];
								$weight=$ro['weight'];
								$sim=$ro['sim'];
                                
                                $display_type=$ro['display_type'];
								$display_size=$ro['display_size'];
								$display_resolutio=$ro['display_resolutio'];
								$display_details=$ro['display_details'];
								$colors_available=$ro['colors_available'];
								$ram=$ro['ram'];
								$rom=$ro['rom'];
								$os=$ro['os'];
								$processor=$ro['processor'];
								$gpu=$ro['gpu'];
                                $camera=$ro['camera'];
								$sound=$ro['sound'];
								$features=$ro['features'];
								$battery=$ro['battery'];
								$image=$ro['image'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$ratting=$ro['ratting'];
        }
					  ?>
                      

                      
                      
                      
 <form method="POST" action="editgadget_action.php" enctype="multipart/form-data">
	
<div id="case">
    <fieldset style="width:30%"><legend>BASIC INFORMATION</legend>
	<pre>
*Device Model <br><input type="text" name="gadget_name" size="70" maxlength="200" value="<?php echo $gadget_name ?>"><br>
<input type="hidden" name="gadget_id" value="<?php echo $gadget_id ?>">
*Category <br><select name="category">

<option value="Mobile">Mobile</option>
<option value="Laptop">Laptop</option>
<option value="Gaming Device">Gaming Device</option>
<option value="Accessories">Accessories</option>
<option value="Others">Others</option>
<option value="<?php echo $category ?>" selected><?php echo $category ?></option>
</select>

*Brand <br><input type="text" name="brand" size="70" maxlength="200" value="<?php echo $brand ?>"><br>
Price <br><input type="number" name="price" min="10" value="<?php echo $price ?>"><br>
Discount (%) <br><input type="number" name="discount" min="0" max="99" value="0" value="<?php echo $discount ?>"><br>
Released Date <br><input type="date" name="announced" value="<?php echo $announced ?>">

*Availability <br><select name="availability">
<option value="Available">Available</option>
<option value="Not Available">Not Available</option>
<option value="Coming Soon">Coming Soon</option>
<option value="Market Out">Market Out</option>
<option value="<?php echo $availability ?>" selected><?php echo $availability ?></option>
</select>
<br>
Colors Available <br><input type="text" name="colors_available" size="70" maxlength="200" value="<?php echo $colors_available ?>"><br>
Update Image <br><input type="file" name="image" >
	    </pre>
</fieldset>
</div>




<div id="case">
    <fieldset style="width:30%"><legend>NETWORK</legend>
	<pre>
        
Neteork Specifications<br><textarea class="input" name="network"><?php echo $network ?></textarea>
	    </pre>
</fieldset>
</div>



<div id="case">
    <fieldset style="width:30%"><legend>HARDWARE</legend>
	<pre>
        
RAM <br><input type="text" name="ram" size="70" maxlength="200" value="<?php echo $ram ?>"><br>
ROM <br><input type="text" name="rom" size="70" maxlength="200" value="<?php echo $rom ?>"><br>
SIM <br><input type="text" name="sim" size="70" maxlength="200" value="<?php echo $sim ?>"><br>
Processor <br><input type="text" name="processor" size="70" maxlength="200" value="<?php echo $processor ?>"><br>
GPU <br><input type="text" name="gpu" size="70" maxlength="200" value="<?php echo $gpu ?>"><br>
Battery <br><input type="text" name="battery" size="70" maxlength="200" value="<?php echo $battery ?>">
	    </pre>
</fieldset>
</div>




<div id="case">
    <fieldset style="width:30%"><legend>SPECIFICATIONS</legend>
	<pre>
        
Dimensions <br><input type="text" name="dimensions" size="70" maxlength="200" value="<?php echo $dimensions ?>"><br>
Weight <br><input type="text" name="weight" size="70" maxlength="200" value="<?php echo $weight ?>"><br>
Display Type <br><input type="text" name="display_type" size="70" maxlength="200" value="<?php echo $display_type ?>"><br>
Display Size <br><input type="text" name="display_size" size="70" maxlength="200" value="<?php echo $display_size ?>"><br>
Display Resolution <br><input type="text" name="display_resolution" size="70" maxlength="200" value="<?php echo $display_resolution ?>"><br>
Display Details<br><textarea class="input" name="display_details"><?php echo $display_details ?></textarea><br>
Operating System <br><input type="text" name="os" size="70" maxlength="200" value="<?php echo $os ?>"><br>
Camera Details<br><textarea class="input" name="camera"><?php echo $camera ?></textarea><br>
Sound <br><input type="text" name="sound" size="70" maxlength="200" value="<?php echo $sound ?>">
	    </pre>
</fieldset>
</div>



<div id="case">
    <fieldset style="width:30%"><legend>Other Features</legend>
	<pre>
        
Features<br><textarea class="input" name="features"><?php echo $features ?></textarea>
	    </pre>
</fieldset>
</div>



<div id="case">
    <fieldset style="width:30%"><legend>RATTINGS</legend>
	<pre>
        
Ratting (On a scale of 100) <br><input type="number" name="ratting" min="1" max="100" value="<?php echo $ratting ?>"><br>
	    </pre>
</fieldset>
</div>



<input id="button" type="submit" name="edit" value="UPDATE DEVICE">


</form>

