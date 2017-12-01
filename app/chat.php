<?php 
//include connection
require("includes/connection.php");

//include session
require("includes/session.php"); 

confirm_logged_in();

    $session_id =$_SESSION['user_id'];

//fetch
   $query ="SELECT * FROM users_tbl WHERE id='$session_id'";
    $result = mysqli_query ($connection, $query) or die(mysqli_error($connection));

     while ($row = mysqli_fetch_array($result)){     
      $session_firstname = $row['firstname'];
      $session_lastname = $row['lastname'];

     }

echo '<center>'.'<h3>'.'Welcome'.' '.$session_firstname.' '.$session_lastname.
'</h3>'.'</center>';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script>
    $(function(){
      $('#btn_post').click(function(){

          var error_status=0;

        var new_post = $('#new_post').val();
        if (new_post==""){
        $('span.new_post').html('check your text and type again');
        $('#new_post').addClass('error-input');
        error_status=1;

        }

        if(error_status==0){
          //alert('no error');

                  $.post('includes/data.php',{action:"insert", new_post:new_post},function(res){

                    $('#result').html(res);
                    $('#result').fadeOut(10000);
                    $('#new_post').val('');
                   



                  });

        }
      });
    });     
      </script>


      <style>


.navbar {
  overflow: hidden;
  background-color: green;
  position: scroll;
  top: 0;
  width: 100%;
  padding-right: 0px;
  padding-left: 0px;
  border-radius: 0px;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}
.navbar a:hover{
    background-color: black;
}

.main {
  padding: 16px;
  padding-right: 0px;
  padding-left: 0px;
  
}
</style>
	    
</head>
 <body style=" background-image:url(images/environ.jpg); color:#fff;background-attachment: scroll;background-size: cover;">
       
		<div class="container" style="width:800px;
  background-color:black;
  padding:0px; "  >

  <div class="navbar">
  <a href="home.php">Home</a>
  <a href="chat.php">Chat</a>
  <a href="profile.php">Profile</a>
  <a href="gallery.php">Gallery</a>
  <a href="calendar.php">Calender</a>
  <a href="tribute.php">Tribute</a>
  <a href="setting.php">Settings</a>
  <a href="index.php" style="float: right;">logout</a>

</div>

<div class="main">
			<div class="row">
			<h1 style="text-align:center; ">What is on your mind?</h1>
			<div class="col-md-2"></div>
     
			<div class="col-md-8" style="background-color:#000;  margin-top:3%; padding:10px; opacity:0.7;">

               <div id="result"></div>
               <span class="new_post"></span><br>
				        <textarea type="text" id="new_post" class="form-control"></textarea><br>
                <button id="btn_post" class="btn btn_primary">POST</button>

                <div class="post-list"></div>
                
            </div>
        <div class="col-md-3"><b class="users-active">Online(0)</b>
      <div class="online-box">
        <ul class="users-online"></ul> 
      </div>
     </div>
			</div>

		</div>


<script type="text/javascript">

//call function
$(document).ready( function() {
 display_chat_msg(); 
});

   function display_chat_msg() {
    setTimeout( function() { 
    chat_msges();
    display_chat_msg();
    }, 2000);
   }
   
   function chat_msges(){
       $.getJSON("includes/json_display_chat.php", function(data) {
       $("div.post-list").empty();
     $.each(data.result, function(){
     $("div.post-list").append("<li>"+this['chat_msg']+"</li>");
     });
 });
   }
       function chat_msges_count(){
       $.getJSON("includes/json_display_chats_count.php", function(data) {
       $("title.count").empty();
     $.each(data.result, function(){
     $("title.count").append("Json ("+this['count_chats']+")");
     });
 });
   }

    function users_active_count(){
       $.getJSON("includes/json-display-users-active-count.php", function(data) {
       $("b.users-active").empty();
     $.each(data.result, function(){
     $("b.users-active").append("Online("+this['count_active']+")");
     });
 });
   }

   function users_active(){
       $.getJSON("includes/json-display-users-active.php", function(data) {
       $("ul.users-online").empty();
     $.each(data.result, function(){
     $("ul.users-online").append("<li><a href=\"\"><i class=\"fa fa-circle "+this['active']+"\"></i> "+this['firstname']+" "+this['lastname']+"");
     });
 });
   }








</script>


            </body>
</html>