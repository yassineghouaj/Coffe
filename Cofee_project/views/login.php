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
</head>

<body>
<h2>login</h2>
<div class="container">
    <div class="content">
       <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
            <h1 class="form-title">login Here</h1>
            <form method="post">
              
              
            
                <input name = 'email' type="email" placeholder="EMAIL ADDRESS">
                <input name = 'pass' type="password" placeholder="password"><br>

				<div class="sho">
				Client <input type='radio' name='user_type' value='Client' checked/> 
        Administrator <input type='radio' name='user_type' value='Administrator'/>

		</div>
              
                <button name = 'submit' >Submit</button>
				<a href="register">register her!!</a>
                
            </form>
        </div>
 </div>
</body>
</html