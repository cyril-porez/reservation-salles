<?php
    require_once('bdd.php');

    abstract class Model {

        public function __construct() { 
            // $this->pdo = new Bdd2();
            // $this->pdo->getPdo();
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