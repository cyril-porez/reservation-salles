<?php
    
    namespace Models;

    require_once('Model.php');
    
    class User extends Model {

        private $password;
        private $confirmPassword;
        public $connex;
        public $login;
        public $title;
        public $description;
        public $start;
        public $end;


        public function infoUser($login) {
            $this->login = $login;
            $sql = "SELECT * from utilisateurs where login = :login";
            $requete = $this->connex->prepare($sql);
            $requete->bindValue(':login', $this->login, \PDO::PARAM_STR);
            $requete->execute();
            $user = $requete->fetch(\PDO::FETCH_ASSOC);
            return $user;
        }


        public function updateLogin($login) {
            $user = $_SESSION["user"]["login"];
            $this->login = $login;
            $sql = "UPDATE utilisateurs SET login = :login where login = :user"; 
            $requete = $this->connex->prepare($sql);
            $requete->bindValue(':login', $this->login, \PDO::PARAM_STR);
            $requete->bindValue(':user', $user, \PDO::PARAM_STR);
            $requete->execute(); 
        }


        public function updatePassword($password) {
            $user = $_SESSION["user"]["login"];
            $this->password = $password;
            $sql = "UPDATE utilisateurs SET password = :password where login = :user";
            $requete = $this->connex->prepare($sql);
            $requete->bindValue(':password', $this->password, \PDO::PARAM_STR);
            $requete->bindValue(':user', $user, \PDO::PARAM_STR);
            $requete->execute(); 
        }


        public function reservation($title, $description, $start, $end, $idUser) {
            $this->title = $title;
            $this->description = $description;
            $this->start = $start;
            $this->end = $end;
            $this->idUser = $idUser;

            $sql = "INSERT into reservations (titre, description, debut, fin, id_utilisateur) VALUES (:title, :description, :start, :end, :idUser)";
            $requete = $this->connex->prepare($sql);
            $requete->bindValue(':title', $this->title, \PDO::PARAM_STR);
            $requete->bindValue(':description', $this->description, \PDO::PARAM_STR);
            $requete->bindValue(':start', $this->start, \PDO::PARAM_STR);
            $requete->bindValue(':end', $this->end, \PDO::PARAM_STR);
            $requete->bindValue(':idUser', $idUser, \PDO::PARAM_STR);
            $requete->execute();
        }


        public function disconnect() {
            session_start();
            session_destroy();
            header("Location: connexion.php");
        }
    }
?>