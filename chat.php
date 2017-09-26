<?php

include('bootstraplinks.php');
include('connection.php');


if(isset($_REQUEST['id']))
 $_SESSION['receiver_id']=$_REQUEST['id'];


	$stmt=$conn->prepare("select * from friends where user_id='".$_SESSION['user_id']."' and friend_id='".$_SESSION['receiver_id']."' or (friend_id='".$_SESSION['user_id']."' and user_id='".$_SESSION['receiver_id']."')");


	 $stmt->execute();

	 $match=$stmt->fetchAll();

// 	 if($match['request_status']==0)
// 	{
// 		$_SESSION['success']="You Are Not In Friend List of The Person";
// 		header('Location:http://localhost/connect2/view.php');

// } 

	 if(!count($match)){

	 	 $_SESSION['success']="You Havn't sent the person a request Yet!!";
			header('Location:http://localhost/connect2/view.php');
	 }

$flag=0;
	# code...
foreach ($match as $m) {
	# code...

	if($m['request_status'])
	{
		$flag=1;
			}


}

if($flag==0){
 $_SESSION['success']="Oops your request has not been accepted yet!";
			header('Location:http://localhost/connect2/view.php');
}







// var_dump($result);

?>
<body>

<div class="container chat">

			<div class="message-field"  id="message-field">


				
			</div>

<!-- <form method="post" action="chatprocess.php"> 
 -->
 <div class="row">
 <div class="col-md-9">
<input type="text" name="message" id="message" class="message form-control" >
</div>
<div class="col-md-3">
<button class="send btn btn-block">Send</button>
</div>
</div>
<!-- 
</form>

 -->
<script>


$(document).ready(function ()
{

		setInterval(function(){ loadmessage() }, 1000);

	
});
   






function loadmessage(){

	
 $.ajax({
 	 	url: "fetchmessage.php", 
 	 	type:"GET",
 	 	//data:{message:message},
 	 	success: function(result){

 	result = $.parseJSON(result);
      $('.message-field').text("");
      		 $.each(result,function(index,value){
      		 	if(<?php echo $_SESSION['receiver_id'] ?> ==value[3])
      		 		$('.message-field').append("<div class='messager'><p>"+value[4]+"</p></div>");
      		 	else
      		 		$('.message-field').append("<div class='messages'><p>"+value[4]+"</p></div>");


      		 		
      		 });

    }});
	


}




	$('.send').click(function(){
 	// $('.message-field').innerHTML=$('.message-field').append(document.getElementById('message').value+"<br>");
 	var message=document.getElementById('message').value;

 	 $('.message-field').animate({ scrollTop: $('.message-field').scrollHeight }, "fast");

 	 $.ajax({
 	 	url: "chatprocess.php", 
 	 	type:"GET",
 	 	data:{message:message},
 	 	success: function(result){
 	 		 $('#message').val('');
 	 			//alert(result);
 	// result = $.parseJSON(result);
  //     $('.message-field').text("");
  //     		 $.each(result,function(index,value){

  //     		 		$('.message-field').append(value[4]+"<br>");

      		// });

    }});
	

	});




</script>



</body>





