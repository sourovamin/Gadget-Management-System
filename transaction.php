<?php
include("includes/db_connect.php");
include("includes/functions.php"); 
include("includes/header.php");


$id=$_SESSION['id'];
$account=$_POST['account'];
$pin=$_POST['pin'];
if(strlen($account)==11 && strlen($pin)==4){
$query2 = "UPDATE admin SET cart='0' WHERE id='$id' ";
	$result2 = mysql_query($query2);
    if ($result2){
        echo "\n***Payment Successful!";
    }
    else{
        echo "Transaction Failed!";
    }
}
else{
    echo "Wrong Account Information!";
}

?>