<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("localhost","root","","deportedb");

if(!$conn)
{
	echo "Database connection faild...";
}

$database="deportedb";
$user='root';
$password='';


try {

    $con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
    echo "Error".$e->getMessage();
}
?>