<?php
    require_once('../Model/RegisterAuth.php');
    require_once('../Model/classUser.php');

    class RegistAuth {
       public $login;
       public $password;
       public $confirmPassword;

        public function hashPassword($password, $confirmPassword) {
            if ($password == $confirmPassword) {
                $this->login;
            
                $hash = password_hash($password, PASSWORD_ARGON2I);
                $insc = new RegisterAuth();
                $insc->register($this->login, $hash);
                header("Location: connexion.php");
            }
        }


        public function verifyPassword($password, $login) {
            $this->password = $password;
            $this->login = $login;
            $recupPassworHash = new RegisterAuth();
            $passHash = $recupPassworHash->selectPassHash($this->login);

            if (password_verify($this->password, $passHash[0]["password"])) {
                $newUser = new User();
                $user = $newUser->infoUser($this->login);
                $_SESSION["user"] = $user;
                header("Location: ../index.php");
            }
        }


        public function  verifLogin($login) {
            $this->login = $login;
            $this->password;
            $this->confirmPassword;
            $selectLogin = new RegisterAuth();
            $count = $selectLogin->selectCountLogin($this->login);
            
            if ($count == 0) {
                $this->hashPassword($this->password, $this->confirmPassword);
            }
            else if ($count != 0) {
                $this->verifyPassword($this->password, $this->login);
            }
            else {
                $msgError = "* Ce Login existe déjà";
            }
        }

        
        public function createUser($login, $password, $confirmpassword) {
            if (!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["confirmPassword"])) {
              $login = $_POST["login"];
              $this->login = $login;
              $password = $_POST["password"];
              $this->password = $password;
              $confirmPassword = $_POST["confirmPassword"];
              $this->confirmPassword = $confirmPassword;
              $this->verifLogin($this->login);
            }
        } 
        
        
        public function connexionUser($login, $password) {
            if (!empty($_POST["login"]) && !empty($_POST["password"])) {
                $login = $_POST["login"];
                $password = $_POST["password"];
                $this->login = $login;
                $this->password = $password;
                $this->verifLogin($this->login);
            }
        }
    }    
?>