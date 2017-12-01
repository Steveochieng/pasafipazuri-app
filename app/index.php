
<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
		$(function(){
			$('#btn_login').click(function(){

				var email = $('#email').val();
				var password = $('#password').val();

				   $.post('includes/data.php',{action:"login", email:email, password:password},function(res){

                  	$('#result').html(res);
                  	$('#result').fadeOut(80000);
                  	$('#email').val('');
                  	$('#password').val('')



                  });
					
			});
		});			
	    </script>
	    
</head>
 <body style=" background-image:url(images/environ.jpg); color:#fff;" >
       
		<div class="container"  >
			<div class="row">
			<h1 style="text-align:center; ">Login here!</h1>
			<div class="col-md-2"></div>
                
			<div class="col-md-8" style="background-color:#000;  margin-top:3%; padding:10px; opacity:0.7;  padding:30px;">

               <div id="result"></div>
				<label>Email</label><br>
				<span class="email"></span><br>
				<input type="text" id="email" class="form-control" style="background-color: transparent;border-radius:0px; border:solid 1px green;"><br>


				<label>Password</label><br>
				<span class="password"></span><br>
				<input type="password" id="password" class="form-control" style="background-color: transparent;border-radius:0px; border:solid 1px green;"><br>

                
                <button id="btn_login" class="btn btn_primary" style="background-color: green;">Login</button>
                <a href="signup.php">Create an account</a>

            </div>
            <div class="col-md-2"></div>
			</div>
		</div>

            </body>
</html>