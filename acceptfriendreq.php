<?php

	include('bootstraplinks.php');
	include('connection.php');


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

	$user_id=$_REQUEST['id'];
	$sql="update friends set request_status=1 where user_id=".$user_id." and friend_id=".$_SESSION['user_id'];
	$conn->exec($sql);
	$_SESSION['success']="Your Are Now A Friend of ".getuserfromid($user_id);

	header('Location:requestlist.php?id='.$_SESSION['user_id']);



?>