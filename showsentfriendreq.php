<?php

$stmt=$conn->prepare("select * from friends where user_id=".$_SESSION['user_id']);

$stmt->execute();

$result=$stmt->fetchAll();


function getuserfromid($id){

include('connection.php');
$stmt=$conn->prepare("select * from user where id=".$id);

$stmt->execute();

$senders=$stmt->fetchAll();

foreach ($senders as $sender) {
	# code...

		return $sender['name'];
	}

}


?>