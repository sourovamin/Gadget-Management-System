
<?php
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");



if($_SESSION['admin']=='1'){     
$id=$_POST['id'];
$user=$_POST['user'];
$first=$_POST['first'];
$last=$_POST['last'];
$user_sex=$_POST['user_sex'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$salt=$_POST['salt'];
$admin=$_POST['admin'];
if(strlen($pass)>4 && strlen($user)>0){
$query="INSERT INTO admin VALUES('$id','$first','$last','$user','$email','$pass','$user_sex','$admin','0')";
            $result=mysql_query($query);
if (!$result){
    die ("Database access failed: " . mysql_error());
}
else{
    echo "Record Added Successfully";
}
}
else{
    header("location:addusererror.php");
}
}
?>
     