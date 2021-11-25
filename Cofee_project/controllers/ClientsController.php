<?php

class ClientsController {
     
   
    public function register(){
		if(isset($_POST['submit'])){
			
		
			$data = array(
				'fullname' => $_POST['fullname'],
				'email' => $_POST['email'],
				'password' => $_POST['password'],
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
 








    
}

