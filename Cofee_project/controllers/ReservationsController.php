<?php 

class ReservationsController{


    public function getAllReservation(){
		$reservations = Reservation::getAll();
		return $reservations;
	}


      
    public function addReservation(){

        if(isset($_POST["add"])){
           
            $data = array(

				"fullname" => $_SESSION["fullname"],
				"places_num" => $_POST["places_num"],
				"drink" => $_POST["drink"],
                "date" => $_POST["date"],
                "time" => $_POST["time"],
                "id_client" =>  $_SESSION["id"]);
                
                
                $result = Reservation::add($data);
                if($result === 'ok'){
                    Session::set('success','reservation submitted!!');
                    Redirect::to('reservation');
                }else{
                    Session::set('error',' incorrect or empty!!');
                }
           

    }


    }


     
    public function getOneReservation(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$reservations = Reservation::getReservation($data);
			return $reservations;
            
		}
	}


    
public function updateReservation(){
    if(isset($_POST['update'])){
        $data = array(
            'id' => $_POST['id'],
           

            'places_number' => $_POST['places_number'],
            'drinks' => $_POST['drinks'],
            'date' => $_POST['date'],
            'time' => $_POST['time'],
            
        
            
        );
        $result = Reservation::update($data);
        if($result === 'ok'){
            Session::set('success', 'Bmi modified !!');
            Redirect::to('dashboard');
        }else{
            echo $result;
        }
    }
}


      public function deleteReservation(){
        if(isset($_POST['id'])){

            $data['id'] = $_POST['id'];
			$result = Reservation::delete($data);
			if($result === 'ok'){
				Session::set('success','reservation deleted !!');
				Redirect::to('dashboard');
			}else{
				echo $result;
			}
		}


        }


      }





