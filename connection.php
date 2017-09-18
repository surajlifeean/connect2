<?php
	

	$sname="localhost";
	$username="root";
	$pwd="";

	try{
	$conn=new PDO("mysql:host=$sname; dbname=connecttwo",$username,$pwd);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	echo "success";

	}
	catch(PDOException $e){

		echo "fail".$e->getMessage();
	}


?>