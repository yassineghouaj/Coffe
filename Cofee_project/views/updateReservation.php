
<?php   

$data = new ReservationsController();
$reservations = $data->getOneReservation();

// echo $reservations;


if(isset($_POST['update'])){

$update = new ReservationsController();
$update->updateReservation();
}


?>




<div class="container" >
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<h4 class="card-header" id ='update'>update Reservation</h4>
				
				<div class="card-body bg-gray">

				

					<?php foreach($reservations as $reservation):?>

					<form  method="post" id='updateform'>


						<div class="form-group">
							<label for="id">id*</label>
							<input type="text" name="id" class="form-control" placeholder="reservtion_id"
							value="<?php echo $reservation['id'];?>"
							>
						</div>
						<div class="form-group">
							<label for="fullname">fullname*</label>
							<input type="text" name="fullname" class="form-control" placeholder="fullname"
							value="<?php echo $reservation['fullname'];?>"
							>
						</div>

						<div class="form-group">
							<label for="places_number">places number*</label>
							<input type="text" name="places_number" class="form-control" placeholder="places"
							value="<?php echo $reservation['places_number'];?>"
							>
						</div>

						<div class="form-group">
							<label for="drink">drink*</label>
							<input type="text" name="drinks" class="form-control" placeholder="drink"
							value="<?php echo $reservation['drinks'];?>"
							>
						</div>

						<div class="form-group">
							<label for="date">date*</label>
							<input type="text" name="date" class="form-control" placeholder="date"
							value="<?php echo $reservation['date'];?>"
							>
						</div>

						<div class="form-group">
							<label for="time">time*</label>
							<input type="text" name="time" class="form-control" placeholder="time"
							value="<?php echo $reservation['time'];?>"
							>
						</div>
					
                      
					
					
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="update">update</button>
						</div>

					</form>
						<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>