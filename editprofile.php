<head>

<?php

	include('bootstraplinks.php');




?>

<style type="text/css">
	


	.myimage {
    width: 400px;
    height: 300px;
    margin: auto;
    display: block;
}

	p {
    border: 2px solid grey;
    border-radius: 5px;
}
</style>



</head>

		<body>


<?php

	include('connection.php');


	$user_id=$_REQUEST['id'];


	 $stmt=$conn->prepare("select * from user where id=".$user_id);

	 $stmt->execute();


	 $result=$stmt->fetchAll();


//	 var_dump($result);



	
?>



<?php
include('navbar.php');
?>


		<div class="container">


		<div style="text-align:center;"> <h1>EDIT PROFILE</h1> </div>


		<div class="col-md-6 col-md-offset-3">
		

		<form name="registration" onsubmit="return validate();" enctype="multipart/form-data" method="post" action="updateprofile.php">


		<?php foreach($result as $res){ ?>
				<img class="myimage" src="http://localhost/connect2/images/<?php echo $res['profilepic'] ?>">   </img><br>

				

						User Name:<input type="text" name="name" class="form-control" placeholder="Enter a Unique User Name" value="<?php echo $res['name'] ?>" ><br>


						Email Id:<input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Id" value="<?php echo $res['email'] ?>">
						<?php 
						 if(isset($_SESSION['emailerror'])){

						 	echo $_SESSION['emailerror'];
						 	}
						 	?>

						<br>

						Gender:<select name="gender" class="form-control">
								<option value="boy" <?php if($res['gender']=="boy") echo "selected" ?> >Boy</option>
								<option value="girl" <?php if($res['gender']=="girl") echo "selected" ?> >Girl</option>

							</select><br>

						Profession:<input type="text" name="profession" class="form-control" placeholder="What do u do?" value="<?php echo $res['profession'] ?>"><br>


						Password:<input type="Password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $res['pwd'] ?>"><br>


						Confirm Password:<input type="Password" name="cpassword" class="form-control" placeholder="Confirm Your Password" value="<?php echo $res['pwd'] ?>"><br>

						Profile Image:<input type="file" name="profilepic"><?php
						
							include('message.php');

?>
<br>

						<button type="submit" class="btn btn-primary">Save Changes</button>


				

				<a href="http://localhost/connect2/loginpage.php"><b>Already A User! Log In.!</b></a>


				<?php }  ?>

				</form>
				</div>
				<br>



</div>
				<script type="text/javascript">
					

						function validate(){

							var name=registration.name.value;
							var email=registration.email.value;
							var password=registration.password.value;
							var cpassword=registration.cpassword.value;
								
						
							var ereg=/(\w+)\@(\w+)\.[a-zA-Z]/g;


							if(!email.match(ereg)){
									
									document.getElementById('email').focus();

									return false;
								}


							if(password!=cpassword){
									
									
									alert("password not same");
									return false;
								}

						}



				</script>


<?php
		include('footer.php');

?>







</body>