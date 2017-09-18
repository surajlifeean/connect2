<?php 
require('connection.php');

$name=$_REQUEST['name'];

$email=$_REQUEST['email'];

$pwd=$_REQUEST['password'];

$gender=$_REQUEST['gender'];




if(isset($_FILES['profilepic'])){

	$error=array();

	$filename=$_FILES['profilepic']['name'];

	$filetemp=$_FILES['profilepic']['tmp_name'];


	$ext=strtolower(end(explode('.',$filename)));


	// echo $filename."-".$filetemp."-".$ext;
	
	$ext_allowed=['png','jpg','jpeg'];

	if(in_array($ext,$ext_allowed)==false){

		$error[]="Extension Not Allowed";


	}

	$newfilename=date("YmdHis").".".$ext;
	
	if(empty($error)==true){
		move_uploaded_file($filetemp,'images/'.$newfilename);


		$sql="Insert into user(name,email,gender,pwd,profilepic)values('".$name."','".$email."','".$gender."','".$pwd."','".$newfilename."')";

		$conn->exec($sql);
	}

	else 
		print_r($error);

}







?>