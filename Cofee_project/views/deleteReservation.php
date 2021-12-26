<?php 
	

if(isset($_POST['id'])){
		$exitreserv = new ReservationsController();
		$exitreserv->deleteReservation();
	}


?>