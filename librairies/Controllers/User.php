<?php

    namespace Controllers;
    //require_once('../Model/RegisterAuth.php');
    //require_once('../Model/User.php');
    require_once('../autoload.php');

    class User  {
        public $login;
        public $password;
        public $confirmPassword;
        public $titre;
        public $description;
        public $debut;
        public $fin;
        public $id_utilisateur;

        public function __construct() {

        }


        public function updateLogin($login) {            
            if (!empty($_POST["login"])) {
                $login = $_POST["login"];
                $this->login = $login;
                $selectLogin = new \Models\RegisterAuth();
                $count = $selectLogin->selectCountLogin($this->login);
               
                if ($count == 0) {
                    $updateLogin = new \Models\User();
                    $updateLogin->updateLogin($this->login);
                    $infoUser = $updateLogin->infoUser($this->login);
                    $_SESSION["user"] = [
                                            'id' => $infoUser['id'], 
                                            'login' => $this->login, 
                                            'password' => $infoUser['password'],
                                        ];  
                }
            }
        }


        public function updatePassword($password, $confirmPassword) {
            if (!empty($_POST["password"]) && !empty($_POST["confirmPassword"])) {
                $password = $_POST["password"];
                $this->password = $password;
                $confirmPassword = $_POST["confirmPassword"];
                $this->confirmPassword = $confirmPassword;
                
                if ($password == $confirmPassword) {
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $updatePassword = new \Models\User();
                    $updatePassword->updatePassword($hash);
                }
            }
        }


        public function reservation($titre, $description, $debut, $fin, $idUser) {
            $this->titre = $titre;
            $this->description = $description;
            $this->debut = $debut;
            $this->fin = $fin;
            $this->idUser = $idUser;

            $reservation = new \Models\User();
            $reservation->reservation($this->titre, $this->description, $this->debut, $this->fin, $this->idUser);            
        }
    }
?>