<?php

    namespace Controllers;
   
    require_once('../autoload.php');

    class User  {
        protected $login;
        protected $password;
        protected $confirmPassword;
        protected $titre;
        protected $description;
        protected $debut;
        protected $fin;
        protected $id_utilisateur;

        public function __construct() {

        }


        public function updateLogin($login) {
            $error = '';            
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
            else {
                $error = "* Ce login existe déjà !";
            }
            return $error;
        }
        

        public function updatePassword($password, $confirmPassword) {
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;
                
            if ($password == $confirmPassword) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $updatePassword = new \Models\User();
                $updatePassword->updatePassword($hash);
            }
            else {
                $error = "* Mot de passe et confirme mot de passe !";
            }
            return $error;
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