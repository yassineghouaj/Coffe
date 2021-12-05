<?php 

class ReservationsController{
      
    public function addReservation(){

        if(isset($_POST["add"])){
           
            $data = array(

				"fullname" => $_POST["fullname"],
				"places_num" => $_POST["places_num"],
				"drink" => $_POST["drink"],
                "date" => $_POST["date"],
                "idr" =>  $_SESSION["idc"]);
                
                $result = Reservation::add($data);

    }


    }










}