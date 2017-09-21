<?php

include('bootstraplinks.php');
include('connection.php');


if(isset($_REQUEST['id']))
 $_SESSION['receiver_id']=$_REQUEST['id'];




// var_dump($result);

?>
<body>
<div class="message-field"  id="message-field">


	
</div>

<!-- <form method="post" action="chatprocess.php"> 
 -->
	Message:<input type="text" name="message" id="message" class="message">
<button class="send">Send</button>

<!-- 
</form>

 -->
<script>



$(document).window=setTimeout(loadmessage(),1000);






function loadmessage(){
 $.ajax({
 	 	url: "fetchmessage.php", 
 	 	type:"GET",
 	 	//data:{message:message},
 	 	success: function(result){

 	result = $.parseJSON(result);
      $('.message-field').text("");
      		 $.each(result,function(index,value){

      		 		$('.message-field').append(value[4]+"<br>");

      		 });

    }});
	

}





	$('.send').click(function(){
 	// $('.message-field').innerHTML=$('.message-field').append(document.getElementById('message').value+"<br>");
 	var message=document.getElementById('message').value;

 	 $.ajax({
 	 	url: "chatprocess.php", 
 	 	type:"GET",
 	 	data:{message:message},
 	 	success: function(result){

 	 			alert(result);
 	// result = $.parseJSON(result);
  //     $('.message-field').text("");
  //     		 $.each(result,function(index,value){

  //     		 		$('.message-field').append(value[4]+"<br>");

      		// });

    }});
	

	});




</script>



</body>





