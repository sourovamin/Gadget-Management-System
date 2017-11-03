<?php include("includes/db_connect.php");?>
<?php include("includes/functions.php"); 
			include("includes/header.php");
			
?>

<style>
#button{
width:400px;
height:50px;
font-weight:bold;
font-size:30px;
background:#ff0000;
margin-left:auto;
margin-right:auto;
display:block;
}
#button1{
width:160px;
height:30px;
font-weight:bold;
font-size:13px;
background:#ff0000;
margin-left:auto;
margin-right:auto;
}
        #case{
margin-top:20px;
margin-bottom:40px;
margin-right:150px;
margin-left:290px;
border:3px solid #a1a1a1;
padding:9px 35px; 
width:600px;border-radius:20px;
box-shadow: 7px 7px 6px;
		}
	</style>
<?php
$rec=$_GET['cid'];
if($_SESSION['admin']=='1' && (loggedin())){
?>
<br><br>
<form method="POST" action="editgadget.php">
<input type="hidden" name="edid" value="<?php echo $rec ?>">
<input id="button" type="submit" name="editgadget" value="EDIT THIS DEVICE" />
</form>

<form method="POST" action="deletegadget.php">
<input type="hidden" name="delid" value="<?php echo $rec ?>">
<input id="button" type="submit" name="deletegadget" value="DELETE THIS DEVICE" />
</form>
<?php } ?>


<?php
$rec=$_GET['cid'];
if($_SESSION['admin']=='0' && (loggedin())){
?>
<br><br>
<form method="POST" action="cart.php">
<input type="hidden" name="cartid" value="<?php echo $rec ?>">
<input id="button" type="submit" name="editgadget" value="ADD TO CART" />
</form>

<?php } ?>


<?php 
if(isset($_GET['cid'])) {
	$receive=$_GET['cid'];
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
								$network=nl2br(htmlspecialchars($ro['network']));
								$dimensions=$ro['dimensions'];
								$weight=$ro['weight'];
								$sim=$ro['sim'];
                                
                                $display_type=$ro['display_type'];
								$display_size=$ro['display_size'];
								$display_resolutio=$ro['display_resolutio'];
								$display_details=nl2br(htmlspecialchars($ro['display_details']));
								$colors_available=$ro['colors_available'];
								$ram=$ro['ram'];
								$rom=$ro['rom'];
								$os=$ro['os'];
								$processor=$ro['processor'];
								$gpu=$ro['gpu'];
                                $camera=nl2br(htmlspecialchars($ro['camera']));;
								$sound=$ro['sound'];
								$features=nl2br(htmlspecialchars($ro['features']));;
								$battery=$ro['battery'];
								$image=$ro['image'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$ratting=$ro['ratting'];
								          
                                
					  ?>
             


			         
                      
					  <div id="case">
	<b><h3><?php echo $gadget_name;?></h3></b><hr><br>					
						
			<?php
			if($discount>0){
			$dis_price=$price-(($price*$discount)/100);
						?>
			<h3><i>Offer Price: </i>	<?php echo $dis_price;?> taka<br></h3>			
			<i>Discount: </i>	<?php echo $discount;?>%<br>
			<?php
			}
			?>
			
	        <img src="data:image;base64,<?php echo base64_encode($image); ?>" alt="***No Image Found!" style="height:400px;"> <br>
			<h3><i>Price: </i>	<?php echo $price;?> taka<br></h3>
			
						<hr></div>
					  

                      
					  <div id="case">
	<b>BASIC INFORMATION</b><hr><br>
	        <i>Model: </i>	<?php echo $gadget_name;?><br>
			<i>Category: </i>	<?php echo $category;?><br>
			<i>Brand: </i>	<?php echo $brand;?><br>
		    <i>Realeased Date: </i>		<?php echo $announced;?><br>
			<i>Availability: </i>		<?php echo $availability;?><br>
			<i>Colors Available: </i>		<?php echo $colors_available;?><br>
						<hr></div>
                      
                      
                      
                      <div id="case">
	<b>NETWORK</b><hr><br>
	        <?php echo $network;?><br>
						<hr></div>
                      
					  
					  

					  
                      
                      <div id="case">
	<b>HARDWARE</b><hr><br>
	        <i>RAM: </i>	<?php echo $ram;?><br>
			<i>ROM: </i>	<?php echo $rom;?><br>
			<i>Sim: </i>	<?php echo $sim;?><br>
		    <i>Processor: </i>		<?php echo $processor;?><br>
			<i>GPU: </i>		<?php echo $gpu;?><br>
            <i>Battery: </i>		<?php echo $battery;?><br>
						<hr></div>
                      
                      
                      
                      <div id="case">
	<b>SPECIFICATION</b><hr><br>
	        <i>Dimensions: </i>	<?php echo $dimensions;?><br>
			<i>Weight: </i>	<?php echo $weight;?><br>
			<i>Display Type: </i>	<?php echo $display_type;?><br>
		    <i>Display Size: </i>		<?php echo $display_size;?><br>
			<i>Display Resolution: </i>		<?php echo $display_resolutio;?><br>
			<i>Display Details: </i>		<?php echo $display_details;?><br>
            <i>Operating System: </i>		<?php echo $os;?><br>
			<i>Camera: </i>	<?php echo $camera;?><br>
			<i>Sound: </i>	<?php echo $sound;?><br>
						<hr></div>
                      
                      
                      
                      <div id="case">
	<b>OTHER FEATURES</b><hr><br>
	        <?php echo $features;?><br>
						<hr></div>
					  
					  
					  <div id="case">
	<b>RATINGS</b><hr><br>
	        <i>GMS Device Rating: </i>	<b><?php echo $ratting;?></b><br>
						<hr></div>
                      
            
			
			
					  
					  <?php }?>
					  
					  
	 <?php }?>
	 
	 
	 




<?php
$rating_count=1;
$rating_total=60;
$query6="select * from rating where rating.g_id='$rec' ";
$result6=mysql_query($query6);
confirm_connection($result6);
		while($ro6=mysql_fetch_array($result6)){
			$dev_rating=$ro6['rating'];
			$rating_total = $rating_total+$dev_rating;
			$rating_count = $rating_count+1;
		}
		$final_rating = $rating_total/$rating_count;
?>

					  <div id="case">
	<b>USER RATING</b><hr><br>
	        <i>User Device Rating: </i>	<b><?php echo $final_rating;?></b><br>
						<hr></div>
	 



	 
	 
<?php	 
if($_SESSION['admin']=='0' && (loggedin())){


$useruser_id=$_SESSION['id'];
$query7="select * from rating where rating.g_id='$rec' and rating.u_id='$useruser_id' ";
$result7=mysql_query($query7);
confirm_connection($result7);
$ro7=mysql_fetch_array($result7);
$old_rating=$ro7['rating'];

if(strlen($old_rating)>0){
?>

<div id="case">
	<b>YOUR RATING</b><hr><br>
	        <i>Your Rating For This Device: </i>	<b><?php echo $old_rating;?></b><br>
						<hr></div>
<?php }

else{
?>			


<div id="case">
    <fieldset style="width:30%"><legend>Rate This Device</legend>			
			
<form method="POST" action="rating_action.php"><pre>
<input type="number" name="rating" min="1" max="100">			
<input type="hidden" name="g_id" value="<?php echo $rec ?>">
<input type="hidden" name="u_id" value="<?php echo $_SESSION['id'] ?>">
<input id="button" type="submit" name="rate_gadget" value="Rate Device" />
</pre>
</form>
</fieldset>
</div>
<?php }?>

	 <?php }?>	 
	 

	 
	 

<?php  include("includes/db_disconnect.php"); ?>