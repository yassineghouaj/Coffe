<?php 
	if(isset($_POST['submit'])){
		$loginUser = new ClientsController();
		$loginUser->register();
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
    <h1>register</h1>
  </div>
  
  <div class="login-form">
  <?php include('./views/includes/alerts.php');?>
  <form method = 'post'>
    <h3>Fullname:</h3>
    
    <input type="text" name = 'fullname' placeholder="fullname"  required><br>
    <h3>email:</h3>
    <input type="text" name = 'email' placeholder="email"  required/><br>
    <h3>Password:</h3>
    <input type="password" name = 'pass' placeholder="Password"  required/>
    <h3>Phone:</h3>
    <input type="phone" name = 'phone' placeholder="Phone"  required/>
    <br>
 
    <button name = 'submit' class="login-button">Submit</button>
	<div class="sho">


		</div>
    <br>
    <a class="sign-up">Sign Up!</a>
    <br>
    <h6 class="no-access">Can't access your account?</h6>
    <a href="login">already have acount login her!!</a>
  </div>
</div>


</form>


<script type="text/javascript" src="/style/js.js"></script>
</body>

</html>