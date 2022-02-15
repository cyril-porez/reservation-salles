<?php

    namespace Controllers;

    require_once('../autoload.php');

    class RegisterAuth {
       private $login;
       private $password;
       private $confirmPassword;
       private $error = "";

        public function hashPassword($password, $confirmPassword) {
            if ($password == $confirmPassword) {
                $this->login;
            
                $hash = password_hash($password, PASSWORD_ARGON2I);
                $insc = new \Models\RegisterAuth();
                $insc->register($this->login, $hash);
                header("Location: connexion.php");
            }
            else {
                $this->error = "* Le mot de passe et la confirmation du mot de passe ne correspondent pas !";
            }
            return $this->error;
        }


        public function verifyPassword($password, $login) {
            $this->password = $password;
            $this->login = $login;
            $recupPassworHash = new \Models\RegisterAuth();
            $passHash = $recupPassworHash->selectPassHash($this->login);

            if (password_verify($this->password, $passHash[0]["password"])) {
                $newUser = new \Models\User();
                $user = $newUser->infoUser($this->login);
                $_SESSION["user"] = $user;
                header("Location: ../../index.php");
            }
            else {
                $this->error = "* Le mot de passe ou login ne corresponde pas !";
            }
            return $this->error;
        }


        public function verifLoginRegister($login) {
            $this->login = $login;
            $this->password;
            $this->confirmPassword;
            $selectLogin = new \Models\RegisterAuth();
            $count = $selectLogin->selectCountLogin($this->login);
            
            if ($count == 0) {
                $this->hashPassword($this->password, $this->confirmPassword);
            }
            else {
                $this->error = "* Ce Login existe déjà";
            }
            return $this->error;
        }


        public function verifLoginAuthentication($login) {
            $this->login = $login;
            $selectLogin = new \Models\RegisterAuth();
            $count = $selectLogin->selectCountLogin($this->login);
            if ($count != 0) {
                $this->verifyPassword($this->password, $this->login);
            }
            else {
                $this->error = "* Aucun login correspond";
            }
            return $this->error;
        }

        
        public function createUser($login, $password, $confirmPassword) {
            $this->login = $login;
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;
            return $this->verifLoginRegister($this->login);
        } 
        
        
        public function connexionUser($login, $password) {
            $this->login = $login;
            $this->password = $password;
            return $this->verifLoginAuthentication($this->login);
        }
    }    
?>