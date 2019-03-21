<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $lname = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (Firstname,Lastname,Email,Password) VALUES ('$fname','$lname','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: index.php");
}
else
{
	echo "Error :".$sql;
}
?>