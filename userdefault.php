<?php
include("includes/db_connect.php");
include("includes/functions.php");
$query="select * from gadgets order by gadget_id desc limit 15";
//where crime_case.crime_id=victimize.crime_id and criminal.criminal_id=victimize.criminal_id and victim.victim_id=victimize.victim_id and case_status.crime_id=crime_case.crime_id"
$result=mysql_query($query);
confirm_connection($result);
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
<br>	  
					  <?php
						while($ro=mysql_fetch_array($result)) {
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
					  ?>



<div id="footer" style="background-color:#1ba523;height:80px;text-align:center">
<br/>
    <p>© #amin-1204107 </p>
</div>				
					    
<?php include("includes/db_disconnect.php");
?>