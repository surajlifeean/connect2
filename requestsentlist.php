
<head>
<?php


	include('bootstraplinks.php');
	include('connection.php');
?>


          <style>


          @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

/*body {
    padding: 30px 0px 60px;
}*/
.panel > .list-group .list-group-item:first-child {
    /*border-top: 1px solid rgb(204, 204, 204);*/
}
@media (max-width: 767px) {
    .visible-xs {
        display: inline-block !important;
    }
    .block {
        display: block !important;
        width: 100%;
        height: 1px !important;
    }
}
#back-to-bootsnipp {
    position: fixed;
    top: 10px; right: 10px;
}


.c-search > .form-control {
   border-radius: 0px;
   border-width: 0px;
   border-bottom-width: 1px;
   font-size: 1.3em;
   padding: 12px 12px;
   height: 44px;
   outline: none !important;
}
.c-search > .form-control:focus {
    outline:0px !important;
    -webkit-appearance:none;
    box-shadow: none;
}
.c-search > .input-group-btn .btn {
   border-radius: 0px;
   border-width: 0px;
   border-left-width: 1px;
   border-bottom-width: 1px;
   height: 44px;
}


.c-list {
    padding: 0px;
    min-height: 44px;
}
.title {
    display: inline-block;
    font-size: 1.7em;
    font-weight: bold;
    padding: 5px 15px;
}
ul.c-controls {
    list-style: none;
    margin: 0px;
    min-height: 44px;
}

ul.c-controls li {
    margin-top: 8px;
    float: left;
}

ul.c-controls li a {
    font-size: 1.7em;
    padding: 11px 10px 6px;   
}
ul.c-controls li a i {
    min-width: 24px;
    text-align: center;
}

ul.c-controls li a:hover {
    background-color: rgba(51, 51, 51, 0.2);
}

.c-toggle {
    font-size: 1.7em;
}

.name {
    font-size: 1 em;
    font-weight: 100;
}

.c-info {
    padding: 5px 10px;
    font-size: 1.25em;
}



/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width:200px;
  height: 200px;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}


/*
the content for request sent content*/ 


.modal.fade .modal-dialog {
    transform: translate(0px, -25%);
    transition: transform 0.3s ease-out 0s;
}
.modal.fade.in .modal-dialog {
    transform: translate(0px, 0px);
}

.flyover {
   left: 150%;
   overflow: hidden;
   position: fixed;
   width: 50%;
   opacity: 0.95;
   z-index: 1050;
   transition: left 0.6s ease-out 0s;
}
 
.flyover-centered {
   top: 50%;
   transform: translate(-50%, -50%);
}

.flyover.in {
   left: 50%;
}

</style>

</head>
<body>

	

<?php 
include('navbar.php');
?>

<div class="container">
<div class="row">
		<div class="col-md-9">

				

<?php

				include('success.php');

				include('sidedashbar.php');

?>   
          <div class="col-md-8">
            <div class="profile-content">
<?php
            				include('showsentfriendreq.php');
								

								foreach($result as $res){
								?>	   
								<div class="alert alert-success" role="alert"><?php echo getuserfromid($res['friend_id'])  ?> Received a Request by you on <?php echo $res['request_sent_date']  ?>


								<?php if(!$res['request_status']) {?>
								<a href="deletefriendreq.php?id=<?php echo $res['id']  ?>" class="btn btn-primary">    Cancel Request
            					</a>
            					<?php } 
            					else{ ?>

            						<a href="unfriend2.php?id=<?php echo $res['friend_id']  ?>" class="btn btn-primary">   Unfriend
            						</a>

            					<?php } ?>
            						<!-- <a href="#" class="btn btn-primary">     			
            					 Reject
            					</a> -->

								</div>
            					
            					<?php }
            					?>


            </div><!-- profile content -->

		</div><!-- col-md-8 -->

    </div><!-- col-md-9 -->

<div class="col-md-3">
<?php


	
							$stmt=$conn->prepare("select * from user where name NOT IN ('".$_SESSION['user_name']."')order by name desc");
							$stmt->execute();
							$allusers=$stmt->fetchAll();




				include('peopleonline.php');


?>

</div>
</div>

<?php


	include('footer.php');

	?>


</body>