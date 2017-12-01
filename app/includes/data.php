<?php
//include connection
require("connection.php");

//include session
require("session.php");

if($_POST['action']=='insert'){

	//form data
	$id =$_SESSION['user_id'];
	$msg=mysqli_real_escape_string($connection,$_POST['new_post']);

	$query="INSERT INTO chat_tbl(user_id, chat_msg) VALUES ('{$id}','{$msg}')";

	$result=mysqli_query($connection,$query);
	if ($result) {
		echo '<div class="alert alert-info">New post posted....</div>';
	}
	else{
		echo '<div class="alert alert-danger">something went wrong....</div>';
	}
  }  

  if($_POST['action']=='signup'){
  	
  	
  	$fname=ucfirst(mysqli_real_escape_string($connection,$_POST['fname']));
  	$lname=ucfirst(mysqli_real_escape_string($connection,$_POST['lname']));
  	$email=mysqli_real_escape_string($connection,$_POST['email']);
  	$password=md5($_POST['password']);

  	//check email exists
  	$query="SELECT * FROM users_tbl WHERE email = '$email'";
  	$result=mysqli_query($connection,$query);
    $row_count=mysqli_fetch_array($result);

    if ($row_count>0) {
    	//email exists
    	echo '<div class="alert alert-danger">email already exists</div>';
    }
    else{
    	$query="INSERT INTO users_tbl(firstname,lastname,email,password) VALUES ('{$fname}','{$lname}','{$email}','{$password}')";

        $result=mysqli_query($connection,$query);
        if ($result){
    	
    	echo '<div class="alert alert-success alert-xs">sign_up successfully.please proceed to <a href="index.php">login</a></div>';
    }
     else{
		echo '<div class="alert alert-danger">something went wrong</div>';
	}

    }

  }


if($_POST['action']=='login'){
  	
  	$email=mysqli_real_escape_string($connection, $_POST['email']);
  	$password=md5($_POST['password']);

    $query="SELECT * FROM users_tbl WHERE email = '$email' AND password = '$password'";
    $result=mysqli_query($connection,$query);
    $row_count=mysqli_fetch_array($result);

    if ($row_count>0){

    $query2="SELECT * FROM users_tbl WHERE email = '$email' AND password = '$password'";
    $result2=mysqli_query($connection,$query2);

    while ($row =mysqli_fetch_array($result2)){
     $_SESSION['user_id']=$row['id'];
    }
    
    echo '<script> document.location="home.php"</script>'; 

    

    }
    else{
       echo '<div class="alert alert-danger alert-xs">Invalid Login </div>';

    }

  }
  ?>
