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

	$friend_id=$_REQUEST['id'];
	$sql="update friends set request_status=0 where user_id=".$_SESSION['user_id']." and friend_id=".$friend_id;
	$conn->exec($sql);
	$_SESSION['success']="Your Are No Longer A Friend of ".getuserfromid($friend_id);

	header('Location:requestsentlist.php?id='.$_SESSION['user_id']);

?>