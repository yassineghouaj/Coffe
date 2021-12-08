<?php 


class Client{

    static public function createUser($data){
		
		 
		$conn = new PDO("mysql:host=localhost;dbname=coffe", "root","");

		
		if(!empty($_POST['email']) ){

			$email = $_POST['email'];

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error = "Invalid email";
			}

			$records = $conn->prepare('SELECT * FROM clients WHERE email = ?');
			$records->execute([$email]);
			$results = $records->rowCount();
            

			// $message = '';

            if( $results > 0 ){
			  
				$error='invalid email';
				Session::set('error',' already exist!!');

		     }
		 

      if(empty($error)){

		$stmt = DB::connect()->prepare('INSERT INTO clients (fullname,email,pass,phone )
			VALUES (:fullname,:email,:pass,:phone)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':pass',$data['pass']);
		$stmt->bindParam(':phone',$data['phone']);
       if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt = null;
	}
		}
	}






	static public function login($data){
		$email = $data['email'];
		$user_type=$data['user_type'];
		
		if($user_type=='Client')
					{
		
		try{
			$query = 'SELECT * FROM clients WHERE email=:email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email
		
		));
			
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
	
	
	else if($user_type=='Administrator')
					{
		
		try{
			$query = 'SELECT * FROM admins WHERE email=:email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email,
		
		));
			
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}







	}











}