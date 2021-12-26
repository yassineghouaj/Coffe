<?php 
	if(isset($_POST['add'])){
		$reserv = new ReservationsController();
	    $reserv->addReservation();
        
	}
    
    ?>

<body>
<h2>reservation</h2><br>

<?php  echo $_SESSION['fullname'];?>


<div class="container">
    <div class="content">
       <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
            <h1 class="form-title">Register Here</h1>
            <?php include('./views/includes/alerts.php');?>
            <form method="post">
               
              
            
                <input name = 'places_num' type="number" placeholder="places num"  max =5 min =1 required>
                <input name = 'drink' type="text" placeholder="drink" required><br>
                <input name = 'date' type="date" placeholder="date" required><br>
                <input name = 'time' type="time" placeholder="time" required><br>

                <button name = 'add' >reserv</button>
                
            </form>
        </div>
 </div>
</body>








