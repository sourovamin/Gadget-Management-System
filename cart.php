<?php
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");

if(!loggedin()) {
	header("location:index.php?not_logged_in");
	}
    
    
 $cartid=$_POST['cartid'];
 $user=$_SESSION['username'];
 $id=$_SESSION['id'];
 
 $query="select * from gadgets where gadgets.gadget_id='$cartid' ";
 $result=mysql_query($query);
 $ro=mysql_fetch_array($result);
 $price=$ro['price'];
 $discount=$ro['discount'];
 $pay=$price-(($price*$discount)/100);
 
 
 $query1 = "SELECT * FROM admin where admin.id='$id'";
 $result1=mysql_query($query1);
 $ro1=mysql_fetch_array($result1);
 $buy=$ro1['cart'];
 
 $new_cart=$pay+$buy;
 
 
            
 

 $query2 = "UPDATE admin SET cart='$new_cart' WHERE id='$id' ";
	$result2 = mysql_query($query2);
    if ($result2){
        echo "\n***Item has been added to cart successfully!";
    }
    else{
        echo "Proccess Failed!";
    }
            
            

  
?>


