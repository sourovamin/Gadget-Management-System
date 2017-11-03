<?php
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");
if(!loggedin()) {
	header("location:index.php?not_logged_in");}
    
    if($_SESSION['admin']=='1'){
                                $gadget_id=$_POST['gadget_id'];
								$category=$_POST['category'];
								$gadget_name=$_POST['gadget_name'];
								$brand=$_POST['brand'];
								$announced=$_POST['announced'];
								$availability=$_POST['availability'];
								$network=$_POST['network'];
								$dimensions=$_POST['dimensions'];
								$weight=$_POST['weight'];
								$sim=$_POST['sim'];
                                
                                $display_type=$_POST['display_type'];
								$display_size=$_POST['display_size'];
								$display_resolution=$_POST['display_resolution'];
								$display_details=$_POST['display_details'];
								$colors_available=$_POST['colors_available'];
								$ram=$_POST['ram'];
								$rom=$_POST['rom'];
								$os=$_POST['os'];
								$processor=$_POST['processor'];
								$gpu=$_POST['gpu'];
                                $camera=$_POST['camera'];
								$sound=$_POST['sound'];
								$features=$_POST['features'];
								$battery=$_POST['battery'];
								//$image=$_POST['image'];
								$price=$_POST['price'];
								$discount=$_POST['discount'];
								$ratting=$_POST['ratting'];
                                
                                $imagename=$_FILES['image']['name'];
                                $tmpName  = $_FILES['image']['tmp_name'];
                                
                                $fp      = fopen($tmpName, 'r');
                                $content = fread($fp, filesize($tmpName));
                                $content = addslashes($content);
                                fclose($fp);
                                
	if(strlen($gadget_name)>0 && strlen($brand)>0){
        
        
        if(strlen($content)>0){
	$query2 = "UPDATE gadgets_database.gadgets SET image='$content' WHERE gadgets.gadget_id='$gadget_id' ";
	$result2 = mysql_query($query2);
    if ($result2){
        echo "\n***Device Image Updated Sucessfully!";
    }
    }
    
        
        
	$query = "UPDATE gadgets_database.gadgets SET category='$category',gadget_name='$gadget_name',brand='$brand',announced='$announced',availability='$availability',network='$network',dimensions='$dimensions',
    weight='$weight',sim='$sim',display_type='$display_type',display_size='$display_size',display_resolution='$display_resolution',display_details='$display_details',colors_available='$colors_available',
    ram='$ram',rom='$rom',os='$os',processor='$processor',gpu='$gpu',camera='$camera',sound='$sound',features='$features',battery='$battery',price='$price',discount='$discount',ratting='$ratting'
    WHERE gadgets.gadget_id='$gadget_id' ";
    
    
	$result = mysql_query($query);
	if (!$result) {
		die ("Database access failed: " . mysql_error());
	} else {
		echo "***Update Successful!";
	}
      
    
    
    }
    }
    ?>