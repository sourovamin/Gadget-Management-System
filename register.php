<?php
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header.php");

?>
<?php

?>

    <style>
        #add{
margin-top:80px;
margin-bottom:50px;
margin-right:150px;
margin-left:450px;
border:3px solid #a1a1a1;
padding:9px 35px; 
width:300px;border-radius:20px;
box-shadow: 7px 7px 6px;
}
        #button{
width:100px;
height:30px;
font-weight:bold;
font-size:13px;
background:#ff0000;
margin-left:auto;
margin-right:auto;
}
	</style>


<?php
$query1="SELECT MAX(id) AS id FROM admin";
$result1=mysql_query($query1);
$ro1=mysql_fetch_array($result1);
$id1=$ro1['id']+1;
?>

<div id="add">
    <fieldset style="width:30%"><legend>Add New User</legend>
	<form method="POST" action="adduser_action.php"><pre>
*ID <br><input type="number" name="id" value="<?php echo $id1 ?>"><br>
First Name <br><input type="text" name="first" size="40"><br>
Last Name <br><input type="text" name="last" size="40"><br>
*Username <br><input type="text" name="user" size="40"><br>
Email <br><input type="text" name="email" size="40"><br>
*Password <br><input type="password" name="pass" size="40"><br>

Sex <br><select name="user_sex">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>



<input type="hidden" name="admin" value="0">

<br><br>
    <input id="button" type="submit" name="add" value="Register">
	</pre>
</form>
</fieldset>
</div>
						
