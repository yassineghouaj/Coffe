<?php 

require_once './autoload.php';
require_once './controllers/HomeController.php';


$home = new HomeController();  

$client = ['register', 'login'];


if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

	if(isset($_GET['page']) && $_SESSION['user_type'] === 'Client'){
		require_once './views/includes/clientsHeader.php';
		if(in_array($_GET['page'],$client)){
			$page = $_GET['page'];
			$home->index($page);
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
		$home->index('home');
	}

}

else if(isset($_GET['page']) && $_GET['page'] === 'register'){
	$home->index('register');
}else{
	$home->index('login');
}