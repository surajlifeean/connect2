<?php 

session_start();
require('connection.php');

$name=$_REQUEST['name'];

$email=$_REQUEST['email'];

$pwd=$_REQUEST['password'];

$gender=$_REQUEST['gender'];

$profession=$_REQUEST['profession'];





if(isset($_FILES['profilepic'])){

	$error=array();

	$filename=$_FILES['profilepic']['name'];

	$filetemp=$_FILES['profilepic']['tmp_name'];


	$ext=strtolower(end(explode('.',$filename)));


	// echo $filename."-".$filetemp."-".$ext;
	
	$ext_allowed=['png','jpg','jpeg'];

	if(in_array($ext,$ext_allowed)==false){

		$_SESSION['errormessage']="Plz, Upload An Image!";

		$error[]="Extension Not Allowed";


	}

	$newfilename=date("YmdHis").".".$ext;
	
	if(empty($error)==true){
		move_uploaded_file($filetemp,'images/'.$newfilename);

try{

		$sql="Insert into user(name,email,gender,profession,pwd,profilepic)values('".$name."','".$email."','".$gender."','".$profession."','".$pwd."','".$newfilename."')";

		$conn->exec($sql);

		$_SESSION['message']="Congo! Your Account Is Created.";
		header('Location:loginpage.php');
}

catch(PDOException $e){
		$_SESSION['emailerror']="Email Id Has been Used!.";
		header('Location:registerpage.php');

}

	}

	else 
		print_r($error);

}







?>