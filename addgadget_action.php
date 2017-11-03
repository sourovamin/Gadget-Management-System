<?php
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");

/*
if(!loggedin()) {
	header("location:index.php?not_logged_in");}
*/

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
                                



if(strlen($gadget_name)>0 && strlen($brand)>0 && strlen($content)>0){
$query1="INSERT INTO gadgets VALUES('$gadget_id','$category','$gadget_name','$brand','$announced','$availability','$network','$dimensions','$weight','$sim','$display_type','$display_size','$display_resolution','$display_details','$colors_available',
'$ram','$rom','$os','$processor','$gpu','$camera','$sound','$features','$battery','$content','$price','$discount','$ratting')";
            $result1=mysql_query($query1);
if (!$result1){
    die ("Database access failed: " . mysql_error());
}
else{
    echo "***$gadget_name has been added to the Database Successfully***";

}
}
else{
    header("location:addgadget.php");
}


?>