<?php

    namespace Models;
    
    //require_once('Model.php');
    require_once('../autoload.php');
    
    class Reservation extends Model {
       public $startTime;

        public function getDataReservation($startTime) {
            $this->startTime = $startTime; 
            $requestReservation = $this->connex->prepare("SELECT * from reservations WHERE debut = :startTime");
            $requestReservation->bindValue(":startTime", $this->startTime, \PDO::PARAM_STR);
            $requestReservation->execute();
            $reservations = $requestReservation->fetchall(\PDO::FETCH_ASSOC);
            return $reservations;           
        }
    } 
?>