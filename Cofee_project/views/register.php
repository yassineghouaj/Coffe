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
</head>

<body>
<h2>Inscription</h2>
<div class="container">
    <div class="content">
       <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
            <h1 class="form-title">Register Here</h1>
            <!-- <?php include('./views/includes/alerts.php');?> -->
            <form method="post">
               <input name = 'fullname' type="text" placeholder="fullname" required>
              
            
                <input name = 'email' type="email" placeholder="EMAIL ADDRESS" required>
                <input name = 'pass' type="password" placeholder="password" required><br>
                <input name = 'phone' type="number" placeholder="PHONE NUMBER" required><br>
                <button name = 'submit' >Submit</button>
                
            </form>
        </div>
 </div>
</body>
</html>

