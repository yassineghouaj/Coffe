<?php 
	if(isset($_POST['submit'])){
		$loginUser = new ClientsController();
		$loginUser->auth();

	
	}

?>




 <!DOCTYPE html>
<html>
<head>
	<title>Cofee</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">


<link rel="stylesheet" href="style/style.css">	

<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>





</head>

<body>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <?php include('./views/includes/alerts.php');?>
  <div class="login-form">
  <form method = 'post'>
    <h3>Email:</h3>
    
    <input type="text" name = 'email' placeholder="email" /><br>
    <h3>Password:</h3>
    <input type="password" name = 'pass' placeholder="Password" />
    <br>
 

	<button name = 'submit' class="login-button">Submit</button>
	<div class="sho">
				Client <input type='radio' name='user_type' value='Client' checked/> 
        Administrator <input type='radio' name='user_type' value='Admin'/>

		</div>
    <br>
    <a class="sign-up">Sign Up!</a>
    <br>
    <h6 class="no-access">Can't access your account?</h6>
    <a href="register">register her!!</a>
  </div>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>

</form>


<script type="text/javascript" src="/style/js.js"></script>
</body>

</html>