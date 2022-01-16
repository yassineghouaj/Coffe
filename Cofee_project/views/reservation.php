<?php 
	if(isset($_POST['add'])){
		$reserv = new ReservationsController();
	    $reserv->addReservation();
        
	}
    
    ?>







 <div class="wrapper">
    
        <div class="wrapper-content" role="form">
           
            <div class="imge">
                <img src="style\img\menu-4.jpg"alt="" width="500" height="500">
            </div>
            <form  class="formes register" method="post">
                <h2>reserv now</h2>
                <?php include('./views/includes/alerts.php');?>
                <input name = 'places_num' type="number" placeholder="places num"  max =5 min =1 required>
                <input name = 'drink' type="text" placeholder="drink" required><br>
                <input name = 'date' type="date" placeholder="date" required><br>
                <input name = 'time' type="time" placeholder="time" required><br>

                <!-- <button name = 'add' class="register active" >reserv now</button> -->
                <div class="submit">
                    
                    <!-- <a href="#" name = 'submit' class="register active">register</a> -->
                    <button name = 'add' class="register active">reserv now</button>
                </div>
              
            </form>
        </div>
    </div><br><br><br><br>









