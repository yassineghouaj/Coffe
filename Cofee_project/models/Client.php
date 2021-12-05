<?php 


class Client{

    static public function createUser($data){
		
		$sql = "SELECT count(email) FROM vols2012 WHERE email='$email'" ;

		$result = mysql_result(mysql_query($sql),0) ;
	 
		if( $result > 0 ){
		 die( "There is already a user with that email!" ) ;
		}//end if
	 




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