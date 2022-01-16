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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">


    <link rel="stylesheet" href="style/styles.css">	

<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>





</head>


<body>
    <div class="wrapper">
        <div class="wrapper-content" role="form">
            <div class="imge">
                <img src="style\img\breakfast-cup-coffee-croissants-orange-260nw-121007245.jpg"alt="" width="500" height="500">
            </div>
            <form  class="formes register" method="post">
                <h2>coffee calais</h2>
                <?php include('./views/includes/alerts.php');?>
                <input type="text" name="fullname" id="" placeholder="fullname">
                <input type="email" name="" id="email" placeholder="email">
                <input type="password" name="pass" id="" placeholder="password">
                <input type="phone" name="phone" id="" placeholder="phone">
                <div class="password">
                    <div class="forget">
                        <input type="checkbox" name="" id="">
                        <a href="">memeber me</a>

                    </div>
                    <div class="member-me">
                        <span>forget password</span>
                    </div>
                </div>
                <div class="submit">
                    <a href="login" class="login">login</a>
                    <!-- <a href="#" name = 'submit' class="register active">register</a> -->
                    <button name = 'submit' class="register active">register</button>
                </div>
                <div class="social-media">
                    <p>login with a defferent account</p>
                    <ul>
                        <li><i class="fab fa-facebook fa-3x"></i></li>
                        <li><i class="fab fa-instagram fa-3x"></i></li>
                        <li><i class="fab fa-twitter-square fa-3x"></i></li>
                        <li><i class="fab fa-youtube fa-3x"></i></li>


                    </ul>
                </div>
            </form>
        </div>
    </div>
</body>


</html>