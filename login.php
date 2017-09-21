<?php

session_start();


require('connection.php');
	
	$email=$_REQUEST['email'];

	$pwd=$_REQUEST['password'];


	$stmt=$conn->prepare("select * from user where email='".$email."'");

	$stmt->execute();

	$alldata=$stmt->fetchAll();



	foreach ($alldata as $data) {
		# code...

		if($pwd==$data['pwd']){
			
			$_SESSION['user_name']=$data['name'];
			$_SESSION['user_id']=$data['id'];
			$_SESSION['image_name']=$data['profilepic'];
			$_SESSION['profession']=$data['profession'];
			
			header('Location:view.php');


		}
		else{
			$_SESSION['message']="Wrong Credentials";
			header('Location:loginpage.php');

		}


	}

	// $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);

?>
