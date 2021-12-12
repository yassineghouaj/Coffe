<?php 

class Reservation {

    static public function add($data){
         
        $stmt = DB::connect()->prepare('INSERT INTO reservations (fullname,places_number,drinks,date,id_client )
			VALUES (:fullname,:places_num,:drink,:date, :id_client)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':places_num',$data['places_num']);
		$stmt->bindParam(':drink',$data['drink']);
		$stmt->bindParam(':date',$data['date']);
        $stmt->bindParam(':id_client',$data['id_client']);
		
        $stmt->execute();
        $stmt = null;
		
	}









}