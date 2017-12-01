<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
		$(function(){
			$('#btn_register').click(function(){

			    var error_status=0;

				var fname = $('#fname').val();
				if (fname==""){
				$('span.fname').html('please enter firstname');
				$('#fname').addClass('error-input');
				error_status=1;

				}

				var email = $('#email').val();
				if (email==""){
				$('span.email').html('please enter email');
				$('#email').addClass('error-input');
				error_status=1;

				}

				var lname = $('#lname').val();
				if (lname==""){
				$('span.lname').html('please enter lastname');
				$('#lname').addClass('error-input');
				error_status=1;

				}

				var password = $('#password').val();
				if (password==""){
				$('span.password').html('please enter password');
				$('#password').addClass('error-input');
				error_status=1;


				}
				var cpassword = $('#cpassword').val();
				if (cpassword==""){
				$('span.cpassword').html('please enter confirm your password');
				$('#cpassword').addClass('error-input');
				error_status=1;

				}

				

				if(error_status==0){
					//alert('no error');

                  $.post('includes/data.php',{action:"signup", email:email,
                  	fname:fname, lname:lname, password:password},function(res){

                  	$('#result').html(res);
                  	$('#result').fadeOut(10000);
                  	$('#fname').val('');
                  	$('#email').val('');
                  	$('#lname').val('');
                  	$('#password').val('');
                  	$('#cpassword').val('');



                  });

				}
			});
		});			
	    </script>
</head>
 <body style=" background-image:url(images/environ.jpg); color:#fff;background-attachment: scroll;background-size: cover;">
       
		<div class="container">
			<div class="row">
			<h1 style="text-align:center; ">REGISTRATION FORM</h1>
			<div class="col-md-2"></div>
                
			<div class="col-md-8" style="background-color:#000;  margin-top:3%; padding:10px; opacity:0.7;  padding:30px;">

               <div id="result"></div>
				<label>Email</label><br>
				<span class="email"></span><br>
				<input type="text" id="email" class="form-control" style="background-color: transparent;border-radius:0px; border:solid 1px green;"><br>

				<label>First name</label><br>
				<span class="fname"></span><br>
				<input type="text" id="fname" class="form-control" style="background-color: transparent;border-radius: 0px;border:solid 1px green;"><br>

				<label>Last name</label><br>
				<span class="lname"></span><br>
				<input type="text" id="lname" class="form-control" style="background-color: transparent;border-radius: 0px;border:solid 1px green;"><br>

				<label>Password</label><br>
				<span class="password"></span><br>
				<input type="password" id="password" class="form-control" style="background-color: transparent;border-radius: 0px;border:solid 1px green;"><br>

				<label>Confirm password</label><br>
				<span class="cpassword"></span><br>
				<input type="password" id="cpassword" class="form-control" style="background-color: transparent;border-radius: 0px;border:solid 1px green;"><br>
                
                <button id="btn_register" class="btn btn_primary" style="background-color: green;">Register</button>

            </div>
            <div class="col-md-2"></div>
			</div>
		</div>

            </body>
</html>
