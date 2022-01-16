<?php 
	if(isset($_POST['submit'])){
		$loginUser = new ClientsController();
		$loginUser->auth();

	
	}

?>


 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cofee</title>
     
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.scss">	

<!-- <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


</head>


<body>
    <div class="wrapper">
        <div class="wrapper-content">
            <div class="imge">
            <img src="style\img\breakfast-cup-coffee-croissants-orange-260nw-121007245.jpg"alt="" width="500" height="500">
            </div>
            <form action="" class="formes login" method ="post">
                <h2>coffee calais</h2>
                <?php include('./views/includes/alerts.php');?>
                <input type="text" name = 'email' placeholder="email">
                <input type="password" name="pass" id="" placeholder="password">
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
                    <!-- <a href="#" class="login active">login</a> -->
                    <input type = 'submit' name = 'submit' class="login active">
                    <a href="register" class="register">register</a>
                </div><br>
                
                <div>
                <label>login as client:</label><br>
  <select name="user_type" >
    
      <option value="Client">Client</option>
      <option value="Admin">Administrator</option>
     
  </select>
</div><br>
  



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



<script type="text/javascript" src="/style/js.js"></script>
</body>

</html>