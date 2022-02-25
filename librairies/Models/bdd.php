<?php

    namespace Models;

    require_once('../autoload.php');

    class Bdd {
        public $connex;
        
        /**
         * Retourne une connexion à la base de donnée
         * 
         * @return PDO
         */
        public function getPdo() {
            try {
                $connex = new PDO("mysql:host=localhost;dbname=reservationsalles;charset=utf8", "root", "root");
                $this->connex = $connex;
                $this->connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->connex;
            } catch (PDOException $e) {
                echo "connection failed:" . $e->getMessage();
            }
        }
    }
?>