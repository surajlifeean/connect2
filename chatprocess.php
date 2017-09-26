<?php

session_start();

// include('bootstraplinks.php');
include('connection.php');

$message=$_REQUEST['message'];

$sender_id=$_SESSION['user_id'];

$receiver_id=$_SESSION['receiver_id'];



$sql="insert into messages(sender_id,receiver_id,message) values('".$sender_id."','".$receiver_id."','".$message."')";

$conn->exec($sql);

echo json_encode("done");





?>