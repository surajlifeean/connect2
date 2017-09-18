<?php 

session_start();
include 'bootstraplinks.php';

?>

<html>



<head>
<style>	

	footer{
   background-color: #424558;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
</style>

</head>

	<body>

<?php

include('navbar.php');


?>

<div class="container">

<div style="text-align: center;"><h1>LOGIN</h1></div>

	<div class="col-md-6 col-md-offset-3">

	<form method="post" action="login.php" onsubmit="return validate();">
	Name:<input type="text" name="email" class="form-control"><br>
	Password:<input type="Password" name="password" class="form-control"><br>
	<button type="submit" class="btn btn-primary">Submit</button>


	</form>

<div style="color: #ff0000;">
	<?php 
if(isset($_SESSION['message'])){
echo $_SESSION['message']; 
}
?>

</div>

<a href="http://localhost/connect2/registerpage.php"><b>Didn't Register?? Create An Account!</b></a>
	</div>
</div>

	<script>

	function validate(){


							var email=registration.email.value;
							var password=registration.password.value;
							
								
						
							var ereg=/(\w+)\@(\w+)\.[a-zA-Z]/g;


							if(!email.match(ereg)){
									
									document.getElementById('email').focus();

									return false;
								}


						}
	



	</script>


<?php

include('footer.php');

?>

	</body>



</html>