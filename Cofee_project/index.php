<?php 

require_once './autoload.php';
require_once './controllers/HomeController.php';


$home = new HomeController();  

$client = ['home','reservation', 'services','logout'];
$admin = ['home','reservation', 'services','logout', 'dashboard'];


if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

	if(isset($_GET['page']) && $_SESSION['user_type'] === 'Client'){
		require_once './views/includes/clientsHeader.php';
		if(in_array($_GET['page'], $client)){
			// require_once './views/includes/clientsHeader.php';
			$page = $_GET['page'];
			$home->index($page);
			// $home->index('home');
			require_once './views/includes/footer.php';
		

		}else{
			include('views/includes/404.php');
		}
	}

   else if(isset($_GET['page']) && $_SESSION['user_type'] === 'Administrator'){
	  require_once './views/includes/adminHeader.php';
		if(in_array($_GET['page'],$admin)){
			$page = $_GET['page'];
			$home->index($page);
		}else{
			include('views/includes/404.php');
		}
	}
   
	else{
	
		 require_once './views/includes/clientsHeader.php';
		$home->index('home');
		 require_once './views/includes/footer.php';
		
	}

}

else if(isset($_GET['page']) && $_GET['page'] === 'register'){
	$home->index('register');


}else{
	$home->index('login');
}