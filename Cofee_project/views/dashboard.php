<?php 

		$data = new ReservationsController();
		$reservations = $data->getAllReservation();
  	
?>


<?php include('./views/includes/alerts.php');?>



<div class="wrapper">
    
	<div class="wrapper-content" role="table">
<table  class="container" id = 'dashboard'>
					  <thead>
					    <tr>
					     
						<?php include('./views/includes/alerts.php');?>			     
                <th scope="col">fullname</th>
					      <th scope="col">places number</th>
					      <th scope="col">drink</th>
					      <th scope="col">date</th>
					      <th scope="col">time</th>
					     
                <th scope="col"></th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($reservations as $reservation):?>
					    	<tr>
						     
						      
						     
						      <th scope="row"><?php echo $reservation['fullname'];?></th>
						      <td><?php echo $reservation['places_number'];?></td>
						      <td><?php echo $reservation['drinks'];?></td>
                              <td><?php echo $reservation['date'];?></td>
                              <td><?php echo $reservation['time'];?></td>
                             
						 


						      <td class="d-flex flex-row">
                    <form method="post" class="" action="updateReservation" style = 'background-color: #444;'>
						      		<input type="hidden" name="id" value="<?php echo $reservation['id'];?>">
						      		<button class="btn btn-sm btn-warning" style= 'width: 100px;'>update</button>
						      	</form>
						      
						      	<form method="post" class="" action="deleteReservation" style = 'background-color: #444;'>
						      		<input type="hidden" name="id" value="<?php echo $reservation['id'];?>">
						      		<button class="btn btn-sm btn-danger" style= 'width: 100px;'>delete</button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>

	</div>
						</div><br><br><br><br><br>



















