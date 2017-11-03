<?php
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");

?>

    <style>
        #case{
margin-top:10px;
margin-bottom:10px;
margin-right:150px;
margin-left:290px;
border:3px solid #a1a1a1;
padding:9px 35px;
height: 130px;
width:600px;
border-radius:20px;
box-shadow: 7px 7px 6px;
		}
		div.left {
width: 40%;
padding: 0 0 0 5%;
float: left}
        div.right {
width: 40%;
padding: 0 5% 0 0;
float: left}	
	</style>

<?php
if(isset($_POST['mobile'])){
	 										 	$query=mysql_query("select * from gadgets where category='Mobile'");
	 										 	confirm_connection($query);
	 										 	if(mysql_num_rows($query)>0) {
	 										 	while($ro=mysql_fetch_array($query)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
					  ?>
			<div id="case">
						 <div class="left">
			<img src="data:image;base64,<?php echo base64_encode($image); ?>" alt="***No Image Found!" style="height:120px;"> <br>
						 </div>
						 
						 <div class="right">
			<h3><a href="gadgetdetails.php?cid=<?php echo $ro['gadget_id']; ?>">	<?php echo $gadget_name;?></a><br></h3>
			
			<?php
			if($discount>0){
			$dis_price=$price-(($price*$discount)/100);
						?>
			<h4><i>Offer Price: </i>	<?php echo $dis_price;?> taka<br></h4>			
			<i>Discount: </i>	<?php echo $discount;?>%<br>
			<?php
			}
			else{
			?>
			<h4><i>Price: </i>	<?php echo $price;?> taka<br></h4>
			<?php } ?>
			</div>
						
						 </div>
<?php
																}
							}
}
							
?>









<?php
if(isset($_POST['laptop'])){
	 										 	$query=mysql_query("select * from gadgets where category='Laptop'");
	 										 	confirm_connection($query);
	 										 	if(mysql_num_rows($query)>0) {
	 										 	while($ro=mysql_fetch_array($query)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
					  ?>
			<div id="case">
						 <div class="left">
			<img src="data:image;base64,<?php echo base64_encode($image); ?>" alt="***No Image Found!" style="height:120px;"> <br>
						 </div>
						 
						 <div class="right">
			<h3><a href="gadgetdetails.php?cid=<?php echo $ro['gadget_id']; ?>">	<?php echo $gadget_name;?></a><br></h3>
			
			<?php
			if($discount>0){
			$dis_price=$price-(($price*$discount)/100);
						?>
			<h4><i>Offer Price: </i>	<?php echo $dis_price;?> taka<br></h4>			
			<i>Discount: </i>	<?php echo $discount;?>%<br>
			<?php
			}
			else{
			?>
			<h4><i>Price: </i>	<?php echo $price;?> taka<br></h4>
			<?php } ?>
			</div>
						
						 </div>
<?php
																}
							}
}
							
?>





<?php
if(isset($_POST['gaming'])){
	 										 	$query=mysql_query("select * from gadgets where category='Gaming Device'");
	 										 	confirm_connection($query);
	 										 	if(mysql_num_rows($query)>0) {
	 										 	while($ro=mysql_fetch_array($query)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
					  ?>
			<div id="case">
						 <div class="left">
			<img src="data:image;base64,<?php echo base64_encode($image); ?>" alt="***No Image Found!" style="height:120px;"> <br>
						 </div>
						 
						 <div class="right">
			<h3><a href="gadgetdetails.php?cid=<?php echo $ro['gadget_id']; ?>">	<?php echo $gadget_name;?></a><br></h3>
			
			<?php
			if($discount>0){
			$dis_price=$price-(($price*$discount)/100);
						?>
			<h4><i>Offer Price: </i>	<?php echo $dis_price;?> taka<br></h4>			
			<i>Discount: </i>	<?php echo $discount;?>%<br>
			<?php
			}
			else{
			?>
			<h4><i>Price: </i>	<?php echo $price;?> taka<br></h4>
			<?php } ?>
			</div>
						
						 </div>
<?php
																}
							}
}
							
?>







<?php
if(isset($_POST['accessories'])){
	 										 	$query=mysql_query("select * from gadgets where category='Accessories'");
	 										 	confirm_connection($query);
	 										 	if(mysql_num_rows($query)>0) {
	 										 	while($ro=mysql_fetch_array($query)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
					  ?>
			<div id="case">
						 <div class="left">
			<img src="data:image;base64,<?php echo base64_encode($image); ?>" alt="***No Image Found!" style="height:120px;"> <br>
						 </div>
						 
						 <div class="right">
			<h3><a href="gadgetdetails.php?cid=<?php echo $ro['gadget_id']; ?>">	<?php echo $gadget_name;?></a><br></h3>
			
			<?php
			if($discount>0){
			$dis_price=$price-(($price*$discount)/100);
						?>
			<h4><i>Offer Price: </i>	<?php echo $dis_price;?> taka<br></h4>			
			<i>Discount: </i>	<?php echo $discount;?>%<br>
			<?php
			}
			else{
			?>
			<h4><i>Price: </i>	<?php echo $price;?> taka<br></h4>
			<?php } ?>
			</div>
						
						 </div>
<?php
																}
							}
}
							
?>








<?php
if(isset($_POST['others'])){
	 										 	$query=mysql_query("select * from gadgets where category='Others'");
	 										 	confirm_connection($query);
	 										 	if(mysql_num_rows($query)>0) {
	 										 	while($ro=mysql_fetch_array($query)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
					  ?>
			<div id="case">
						 <div class="left">
			<img src="data:image;base64,<?php echo base64_encode($image); ?>" alt="***No Image Found!" style="height:120px;"> <br>
						 </div>
						 
						 <div class="right">
			<h3><a href="gadgetdetails.php?cid=<?php echo $ro['gadget_id']; ?>">	<?php echo $gadget_name;?></a><br></h3>
			
			<?php
			if($discount>0){
			$dis_price=$price-(($price*$discount)/100);
						?>
			<h4><i>Offer Price: </i>	<?php echo $dis_price;?> taka<br></h4>			
			<i>Discount: </i>	<?php echo $discount;?>%<br>
			<?php
			}
			else{
			?>
			<h4><i>Price: </i>	<?php echo $price;?> taka<br></h4>
			<?php } ?>
			</div>
						
						 </div>
<?php
																}
							}
}
							
?>


