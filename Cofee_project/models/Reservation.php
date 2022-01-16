<?php 


class Reservation {


	static public function getAll()
	{

		$stmt = DB::connect()->prepare('SELECT * FROM reservations ');
		$stmt->execute();
		return $stmt->fetchAll();
		
		$stmt = null;
	}



	
    static public function add($data){

         
        $stmt = DB::connect()->prepare('INSERT INTO reservations (fullname,places_number,drinks,date,time,id_client )
			VALUES (:fullname,:places_num,:drink,:date,:time,:id_client)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':places_num',$data['places_num']);
		$stmt->bindParam(':drink',$data['drink']);
		$stmt->bindParam(':date',$data['date']);
		$stmt->bindParam(':time',$data['time']);
        $stmt->bindParam(':id_client',$data['id_client']);
		
        if ($stmt->execute()) {
			return 'ok';
		} else {
			return 'error';
		}
		
		$stmt = null;
		
	}


   
	static public function getReservation($data)
	{
		$id = $data['id'];
		try {
			$query = 'SELECT * FROM reservations WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$reservations = $stmt->fetchAll();
			return $reservations;
		} catch (PDOException $ex) {
			echo 'erreur' . $ex->getMessage();
		}
	}


    static public function update($data)
	{
		
		$stmt = DB::connect()->prepare('UPDATE reservations SET places_number=:places_number, drinks=:drinks, date=:date, time=:time WHERE id=:id');
		$stmt->bindParam(':id', $data['id']);
		$stmt->bindParam(':places_number', $data['places_number']);
		$stmt->bindParam(':drinks', $data['drinks']);
		$stmt->bindParam(':date', $data['date']);
		$stmt->bindParam(':time', $data['time']);

		if ($stmt->execute()) {
			return 'ok';
		} else {
			return 'error';
		}
		
		$stmt = null;
	}


	static public function delete($data)
	{
		$id = $data['id'];
		try {
			$query = 'DELETE FROM reservations WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if ($stmt->execute()) {
				return 'ok';
			}
		} catch (PDOException $ex) {
			echo 'erreur' . $ex->getMessage();
		}
	}

}