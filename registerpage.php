<html>

<head>


   <?php

include('bootstraplinks.php');





?> 
	

<style>
	p {
    border: 2px solid grey;
    border-radius: 5px;
}
</style>



</head>

		<body>

<?php
include('navbar.php');
?>


		<div class="container">


		<div style="text-align:center;"> <h1>REGISTRATION</h1> </div>

		<div class="col-md-6 col-md-offset-3">
		

				<form name="registration" onsubmit="return validate();" enctype="multipart/form-data" method="post" action="register.php">

						User Name:<input type="text" name="name" class="form-control" placeholder="Enter a Unique User Name"><br>


						Email Id:<input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Id">
						<?php 
						 if(isset($_SESSION['emailerror'])){

						 	echo $_SESSION['emailerror'];
						 	}
						 	?>

						<br>


						Gender:<select name="gender" class="form-control">
								<option value="boy">Boy</option>
								<option value="girl">Girl</option>

							</select><br>

						Profession:<input type="text" name="profession" class="form-control" placeholder="What do u do?"><br>


						Password:<input type="Password" name="password" class="form-control" placeholder="Enter Password"><br>


						Confirm Password:<input type="Password" name="cpassword" class="form-control" placeholder="Confirm Your Password"><br>

						Profile Image:<input type="file" name="profilepic"><?php
				include('message.php');

?>
<br>

						<button type="submit" class="btn btn-primary">Submit</button>


				</form>

				<a href="http://localhost/connect2/loginpage.php"><b>Already A User! Log In.!</b></a>
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


</html>