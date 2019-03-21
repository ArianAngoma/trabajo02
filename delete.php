<?php 

	include_once 'connection.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM deporte WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: account.php');
	}else{
		header('Location: account.php');
	}
 ?>