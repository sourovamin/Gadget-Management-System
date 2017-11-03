<?php

include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");


$rating=$_POST['rating'];
$g_id=$_POST['g_id'];
$u_id=$_POST['u_id'];

if(strlen($rating)>0){
$query="INSERT INTO rating VALUES('','$g_id','$u_id','$rating')";
            $result=mysql_query($query);
if (!$result){
    die ("Database access failed: " . mysql_error());
}
else{
    echo "Rating Added Successfully";
}
}
else{
    echo("No input! Try agein.");
}


?>