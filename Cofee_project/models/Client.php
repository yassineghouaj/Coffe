<?php 


class Client{

    static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO clients (fullname,email,password,phone )
			VALUES (:fullname,:email,:password,:phone)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':password',$data['password']);
		$stmt->bindParam(':phone',$data['phone']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		// $stmt->close();
		$stmt = null;
	}













}