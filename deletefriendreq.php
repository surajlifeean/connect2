<?php

include('bootstraplinks.php');
include('connection.php');
$id=$_REQUEST['id'];
	$sql="delete from friends where id=".$id;

	$conn->exec($sql);

	$_SESSION['success']="Request Deleated!";

header("location:http://localhost/connect2/requestsentlist.php?id=".$_SESSION['user_id']);
?>