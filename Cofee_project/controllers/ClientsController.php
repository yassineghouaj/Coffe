<?php

class ClientsController extends Validation{


	
     
   
    public function register(){


		if(isset($_POST['submit'])){


			if (empty($_POST["fullname"]) || empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["phone"])) {
				Session::set('error',' fillin all required fields!!');
				Redirect::to('register');

            
	
			}else{
                 
				if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fullname"])){
					Session::set('error','Only letters and white space allowed');
					Redirect::to('register');

				}else{

                  
                $testemail = new Validation();
                $valemail = $testemail->test_input(($_POST['email']));

				$testpass = new Validation();
				$valpass = $testpass->test_input(($_POST['pass']));
				
           
      


			   $data = array(
				'fullname' => $_POST['fullname'],
				'email' => $valemail,
				'pass' => $valpass,
				'phone' => $_POST['phone'],
				
				
			);


			$result = Client::createUser($data);
			
			if($result === 'ok'){
				Session::set('success','your acount has been created!!');
				Redirect::to('login');
			}else{
				// echo $result;
				Redirect::to('register');
				Session::set('error',' already exist!!');
			}

		}
		}


		}
	}
        

	public function auth (){
        
		
		if(isset($_POST['submit'])){

			if (empty($_POST["email"]) || empty($_POST["pass"])) {
				Session::set('error',' champ a remplire!!!');

			}else if(!empty($_POST["email"]) && !empty($_POST["pass"])) {

				$Val = new Validation();
                $data['email'] = $Val->test_input(($_POST['email']));
           
                $data ['pass']= $Val->test_input(($_POST['pass']));
         
	       
			$data['user_type'] = $_POST['user_type'];
			
			$result = Client::login($data);

			if($result->email === $_POST['email'] && $result->pass === $_POST['pass'] && $data['user_type'] === 'Client'){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['fullname'] = $result->fullname;
				$_SESSION['id'] = $result->id;
				$_SESSION['user_type'] ='Client';
			
				
				Redirect::to('home');

			}
			else if($result->email === $_POST['email'] && $result->pass === $_POST['pass'] && $data['user_type'] ==='Admin'){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['fullname'] = $result->fullname;
				$_SESSION['id'] = $result->id;
				$_SESSION['user_type'] ='Admin';
			
				
				Redirect::to('dashboard');

			}
			
		else{
				Session::set('error',' incorrect info!!');
				Redirect::to('login');
			}
		
		}
		}
	}

	static public function logout(){
		session_destroy();
	
	}


	
    
}

