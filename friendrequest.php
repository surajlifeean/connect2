<?php

	$stmt=$conn->prepare("select * from friends where user_id='".$_SESSION['user_id']."'");

	$stmt->execute();


	$allrequests=$stmt->fetchAll();
	


?>



