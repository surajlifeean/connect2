<?php 

include('bootstraplinks.php');
include('connection.php');

	$name=$_REQUEST['name'];

	$email=$_REQUEST['email'];
	
	$gender=$_REQUEST['gender'];
	
	$profession=$_REQUEST['profession'];

	$pwd=$_REQUEST['password'];
	
	$cpwd=$_REQUEST['cpassword'];
	



if(isset($_FILES['profilepic'])){


	if($_FILES['profilepic']['size']!=0){
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

		$sql="UPDATE user SET name='".$name."', email='".$email."' ,gender='".$gender."' ,profession='".$profession."' ,pwd='".$pwd."', profilepic='".$newfilename."' WHERE id='".$_SESSION['user_id']."'";

		 $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();



    	$_SESSION['success']="Congo! Profile is Updated!";
	
		header('Location:loginpage.php');
}

catch(PDOException $e){
				$_SESSION['emailerror']="Oops some error has occured!.";
				header('Location:registerpage.php');
			
}

	}

	else 
		print_r($error);



}
else{



try{

		$sql="UPDATE user SET name='".$name."', email='".$email."' ,gender='".$gender."' ,profession='".$profession."' ,pwd='".$pwd."' WHERE id='".$_SESSION['user_id']."'";

		 $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();


    	$_SESSION['success']="Congo! Profile is Updated!";
	
		header('Location:loginpage.php');
}

catch(PDOException $e){
			$_SESSION['emailerror']="Oops some error has occured!.";
				header('Location:registerpage.php');
			
}


}//else ends

}


?>