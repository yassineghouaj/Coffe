<?php

class ClientsController {
     
   
    public function register(){
		if(isset($_POST['submit'])){
			
		
			$data = array(
				'fullname' => $_POST['fullname'],
				'email' => $_POST['email'],
				'pass' => $_POST['pass'],
				'phone' => $_POST['phone'],
			);
			$result = Client::createUser($data);
			if($result === 'ok'){
				Session::set('success','your acount has been created!!');
				Redirect::to('login');
			}else{
				echo $result;
			}
		}
	}
 


	public function auth(){
		if(isset($_POST['submit'])){
			$data['email'] = $_POST['email'];
			$data['pass'] = $_POST['pass'];
			$data['user_type']=$_POST['user_type'];
			$result = Client::login($data);
			if($result->email === $_POST['email'] && $result->pass === $_POST['pass'] && $_POST['user_type']=='Client'){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['fullname'] = $result->fullname;
				$_SESSION['idc'] = $result->idc;
				$_SESSION['user_type'] ='Client';
			
				
				Redirect::to('home');

			}
			else if($result->email === $_POST['email'] && $result->psd === $_POST['psd'] && $_POST['user_type']=='Administrator'){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['fullname'] = $result->fullname;
				$_SESSION['id'] = $result->id;
				$_SESSION['user_type'] ='Administrator';
			
				
				Redirect::to('dashbord');

			}
			
			else{
				Session::set('error',' incorrect info!!');
				Redirect::to('login');
			}
		}
	}





    
}

