<?php 
	if(isset($_POST['submit'])){
		$loginUser = new ClientsController();
		$loginUser->register();
	}
?>


register page


