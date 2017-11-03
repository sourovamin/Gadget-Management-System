<?php
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");

if(isset($_POST['submit'])) {
if($_POST['model']) {
	$model=$_POST['model'];
	$name="%".$model."%";
				$query="select *  from gadgets where (gadget_name like '$name' or brand like '$name') LIMIT 0 , 30";
				$result=mysql_query($query);
			if(mysql_num_rows($result) > 0) {
						while($ro=mysql_fetch_array($result)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
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
					  <?php }}
					else {
							echo 'No result found';
						}	
				}
}
			
			?>
			
			
			
			
			
			
			
			
<?php	
if(isset($_POST['submit'])) {
if($_POST['model']) {
	$model=$_POST['model'];
	$name="%".$model."%";
				$query="select *  from gadgets where (gadget_name like '$name' or brand like '$name')LIMIT 0 , 30";
				$result=mysql_query($query);
			if(mysql_num_rows($result) > 0) {
						while($ro=mysql_fetch_array($result)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
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
					  <?php }}
					else {
							echo 'No result found';
						}	
				}
}
			
			?>			
			
			
			
			





<?php	
if(isset($_POST['pricesubmit'])) {
if($_POST['start'] && $_POST['end']) {
	$start=$_POST['start'];
	$end=$_POST['end'];
	  $query1="select *  from gadgets where price between '$start' and '$end'";
				$result1=mysql_query($query1);
			if(mysql_num_rows($result1) > 0) {
						while($ro=mysql_fetch_array($result1)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
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
					  <?php }}
					else {
							echo 'No result found';
						}	
				}
}
			
			?>				
			








<?php	
if(isset($_POST['advance'])) {

	if($_POST['start']){
		$start=$_POST['start'];
	}
	else{
		$start=0;
	}
	
	if($_POST['end']){
		$end=$_POST['end'];
	}
	else{
		$end=99999999;
	}
	
	$model=$_POST['model'];
	$name="%".$model."%";
	$category=$_POST['category'];
	$availability=$_POST['availability'];
	
	  $query2="select *  from gadgets where (gadget_name like '$name' or brand like '$name') and (price between '$start' and '$end') and (category='$category') and (availability='$availability') limit 50";
				$result2=mysql_query($query2);
			if(mysql_num_rows($result2) > 0) {
						while($ro=mysql_fetch_array($result2)) {
								$gadget_name=$ro['gadget_name'];
								$price=$ro['price'];
								$discount=$ro['discount'];
								$image=$ro['image'];
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
					  <?php }}
					else {
							echo 'No result found';
						}	
				
}
			
			?>				





			
			
			
			
<?php include("includes/db_disconnect.php");
?>