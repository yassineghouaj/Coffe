<?php 

class Reservation {

    static public function add($data){
         
        $stmt = DB::connect()->prepare('INSERT INTO reservations (fullname,places_number,drinks,date,idr )
			VALUES (:fullname,:places_num,:drink,:date, :idr)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':places_num',$data['places_num']);
		$stmt->bindParam(':drink',$data['drink']);
		$stmt->bindParam(':date',$data['date']);
        $stmt->bindParam(':idr',$data['idr']);
		
        $stmt->execute();
        $stmt = null;
		
	}









}