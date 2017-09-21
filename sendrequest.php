<?php

session_start();

$user_id=$_SESSION['user_id'];

$friend_id=$_REQUEST['id'];

include('connection.php');


	$stmt=$conn->prepare("select * from friends where user_id='".$user_id."' and friend_id='".$friend_id."'");

	 $stmt->execute();

	 $match=$stmt->fetchAll();

	 if(count($match)==0)
	{
	$sql="insert into friends(user_id,friend_id,request_status) values('".$user_id."','".$friend_id."','0')";
	$conn->exec($sql);


	$_SESSION['success']="Friend Request Has Been Sent";
} 
else{

	$_SESSION['success']="You Have Already Sent A Request!";
}

	header('Location:http://localhost/connect2/view.php');

?>