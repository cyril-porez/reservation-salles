<?php

    namespace Models;
    
    require_once('../autoload.php');
    
    class Reservation extends Model {
       public $startTime;
       private $id_utilisateur;

        public function getDataReservation($startTime) {
            $this->startTime = $startTime; 
            $requestReservation = $this->connex->prepare("SELECT utilisateurs.id, titre, description, debut, fin, reservations.id, login from reservations inner join utilisateurs on id_utilisateur = utilisateurs.id WHERE debut = :start");
            $requestReservation->bindValue(":start", $this->startTime, \PDO::PARAM_STR);
            $requestReservation->execute();
            $reservations = $requestReservation->fetchall(\PDO::FETCH_ASSOC);
            return $reservations;           
        }


        public function getDataRev($id_utilisateur) {
            $this->id_utilisateur = $id_utilisateur; 
            $requestReservation = $this->connex->prepare("SELECT utilisateurs.id, titre, description, debut, fin, reservations.id, login from reservations inner join utilisateurs on id_utilisateur = utilisateurs.id WHERE reservations.id = :id_utilisateur");
            $requestReservation->bindValue(":id_utilisateur", $this->id_utilisateur, \PDO::PARAM_STR);
            $requestReservation->execute();
            $reservations = $requestReservation->fetchall(\PDO::FETCH_ASSOC);
            return $reservations;
        }
    } 
?>