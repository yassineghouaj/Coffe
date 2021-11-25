<?php 

class Reservation {

    static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO Reservation (idc,idv,numplace,dater)
			VALUES (:idc,:idv,:numplace,:dater)');
		$stmt->bindParam(':idc',$data['idc']);
		$stmt->bindParam(':idv',$data['idv']);
		$stmt->bindParam(':numplace',$data['numplace']);
		$stmt->bindParam(':dater',$data['dater']);
	
		
		$stmt->execute();
	}









}