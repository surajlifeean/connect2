<?php



$stmt=$conn->prepare("select * from user where id='".$_SESSION['user_id']."'");
							$stmt->execute();
							$users=$stmt->fetchAll();


?>



		<div class="col-md-4">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->



				<?php 


					foreach ($users as $user) {
	# code...


				?>
				<div class="profile-userpic">
					<img src="http://localhost/connect2/images/<?php echo $user['profilepic'] ?>" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						 <?php
       					 echo $user['name'];
       					   ?>
					</div>
					<div class="profile-usertitle-job">
						 <?php
       					 echo $user['profession'];
       					   ?>
					</div>
				</div>


				<?php
					}


				?>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<!-- <button type="button" class="btn btn-success btn-sm">Follow</button> -->
					<a href="http://localhost/connect2/editprofile.php?id=<?php echo $_SESSION['user_id']  ?>" type="button" class="btn btn-danger btn-sm">Edit Profile</a>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="http://localhost/connect2/requestsentlist.php?id=<?php echo $_SESSION['user_id'] ?>">
							<i class="glyphicon glyphicon-home"></i>
							

								Friend Requests Sent
								<?php

								include('friendrequest.php');


?>
<span class = "badge">

<?php 
echo count($allrequests);


?>


</span>




							


							 </a>
						</li>
						<li>
							<a href="http://localhost/connect2/requestlist.php?id=<?php echo $_SESSION['user_id'] ?>">
							<i class="glyphicon glyphicon-user"></i>
							Friend Request Received </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		
	

