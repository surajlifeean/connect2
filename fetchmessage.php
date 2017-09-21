<?php

session_start();

// include('bootstraplinks.php');
include('connection.php');


$sender_id=$_SESSION['user_id'];

$receiver_id=$_SESSION['receiver_id'];
			

$stmt=$conn->prepare("select * from messages where sender_id='".$_SESSION['user_id']."' and receiver_id='".$_SESSION['receiver_id']."' or (receiver_id='".$_SESSION['user_id']."' and sender_id='".$_SESSION['receiver_id']."')");
// SELECT * FROM `messages` WHERE sender_id=7 and receiver_id=9 or (sender_id=9 and receiver_id=7)
$stmt->execute();


$result=$stmt->fetchAll();

echo json_encode($result);




?>