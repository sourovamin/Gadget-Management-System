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
$first=$_POST['first'];
$second=$_POST['second'];
if(strlen($first)>0 && strlen($second)>0) {
	$query="select * from gadgets where gadgets.gadget_name='$first' ";
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
								
                                
                                
                                
                                
                                
                                
                          
                          $query2="select * from gadgets where gadgets.gadget_name='$second' ";
$result2=mysql_query($query2);
confirm_connection($result2);
		while($ro=mysql_fetch_array($result2)) {
								$gadget_id2=$ro['gadget_id'];
								$category2=$ro['category'];
								$gadget_name2=$ro['gadget_name'];
								$brand2=$ro['brand'];
								$announced2=$ro['announced'];
								$availability2=$ro['availability'];
								$network2=nl2br(htmlspecialchars($ro['network']));
								$dimensions2=$ro['dimensions'];
								$weight2=$ro['weight'];
								$sim2=$ro['sim'];
                                
                                $display_type2=$ro['display_type'];
								$display_size2=$ro['display_size'];
								$display_resolutio2=$ro['display_resolutio'];
								$display_details2=nl2br(htmlspecialchars($ro['display_details']));
								$colors_available2=$ro['colors_available'];
								$ram2=$ro['ram'];
								$rom2=$ro['rom'];
								$os2=$ro['os'];
								$processor2=$ro['processor'];
								$gpu2=$ro['gpu'];
                                $camera2=nl2br(htmlspecialchars($ro['camera']));;
								$sound2=$ro['sound'];
								$features2=nl2br(htmlspecialchars($ro['features']));;
								$battery2=$ro['battery'];
								$image2=$ro['image'];
								$price2=$ro['price'];
								$discount2=$ro['discount'];
								$ratting2=$ro['ratting'];                
                                
					  ?>
             
			 
			         
                      
					  <div id="case">
	<b><h3><?php echo "$gadget_name  &  $gadget_name2";?></h3></b><hr><br>					
						
			
			
	        <img src="data:image;base64,<?php echo base64_encode($image); ?>" alt="***No Image Found!" style="height:400px;"> <br><br><br>
            <img src="data:image;base64,<?php echo base64_encode($image2); ?>" alt="***No Image Found!" style="height:400px;"> <br>
			<h3><i>Price: </i>	<?php echo "$price  &  $price2";?> taka<br></h3>
			
						<hr></div>
					  

                      
					  <div id="case">
	<b>BASIC INFORMATION</b><hr><br>
	        <i>Model: </i>	<?php echo "$gadget_name  &  $gadget_name";?><br>
			<i>Category: </i>	<?php echo "$category  &  $category2";?><br>
			<i>Brand: </i>	<?php echo "$brand  &  $brand2";?><br>
		    <i>Realeased Date: </i>		<?php echo "$announced  &  $announced2";?><br>
			<i>Availability: </i>		<?php echo "$availability  &  $availability2";?><br>
			<i>Colors Available: </i>		<?php echo "$colors_available  &  $colors_available2";?><br>
						<hr></div>
                      
                      
                      
                      <div id="case">
	<b>NETWORK</b><hr><br>
	        <?php echo "$network & $network2";?><br>
						<hr></div>
                      
					  
					  

					  
                      
                      <div id="case">
	<b>HARDWARE</b><hr><br>
	        <i>RAM: </i>	<?php echo "$ram  &  $ram2";?><br>
			<i>ROM: </i>	<?php echo "$rom  &  $rom2";?><br>
			<i>Sim: </i>	<?php echo "$sim  &  $sim2";?><br>
		    <i>Processor: </i>		<?php echo "$processor  &  $processor2";?><br>
			<i>GPU: </i>		<?php echo "$gpu  &  $gpu2";?><br>
            <i>Battery: </i>		<?php echo "$battery  &  $battery2";?><br>
						<hr></div>
                      
                      
                      
                      <div id="case">
	<b>SPECIFICATION</b><hr><br>
	        <i>Dimensions: </i>	<?php echo "$dimensions  &  $dimensions2";?><br>
			<i>Weight: </i>	<?php echo "$weight  &  $weight2";?><br>
			<i>Display Type: </i>	<?php echo "$display_type  &  $display_type2";?><br>
		    <i>Display Size: </i>		<?php echo "$display_size  &  $display_size2";?><br>
			<i>Display Resolution: </i>		<?php echo "$display_resolutio  &  $display_resolutio2";?><br>
			<i>Display Details: </i>		<?php echo "$display_details  &  $display_details2";?><br>
            <i>Operating System: </i>		<?php echo "$os  &  $os2";?><br>
			<i>Camera: </i>	<?php echo "$camera  &  $camera2";?><br>
			<i>Sound: </i>	<?php echo "$sound  &  $sound2";?><br>
						<hr></div>
                      
                      
                      
                      <div id="case">
	<b>OTHER FEATURES</b><hr><br>
	        <?php echo "$features  &  $features2";?><br>
						<hr></div>
					  
					  
					  <div id="case">
	<b>RATTINGS</b><hr><br>
	        <i>GMS Ratting: </i>	<b><?php echo "$ratting  &  $ratting2";?></b><br>
						<hr></div>
                      
                      
					

					  
					  <?php }?>
					  
					  
	 <?php }
}
     else{
        echo "Device Not Found!";
     }
     ?>
	 

<?php  include("includes/db_disconnect.php"); ?>