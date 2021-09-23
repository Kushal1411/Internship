<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_place');

// get the post records

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `dbtable` VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your message sent successfully...";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>