<?php

namespace Models;

//require_once('Model.php');
require_once('../autoload.php');

class RegisterAuth extends Model{
    public $connex;
    public $login;
    public $count;


    public function register($login, $passwordUser) {
        try {            
            $sql = "INSERT into utilisateurs (login, password) values (:login, :passwordUser)";         
            //on prepare la requete
            $requete = $this->connex->prepare($sql);
            $requete->bindValue(":login", $login, \PDO::PARAM_STR);
            $requete->bindValue(":passwordUser", $passwordUser, \PDO::PARAM_STR);
            //execute la requete
            $requete->execute();
        } catch (PDOException $e) {
            echo $requete . "<br>" . $e->getMessage();
        }
    }


    public function selectCountLogin($login) {
        $this->login = $login; 
        $sql = "SELECT login From utilisateurs WHERE login = '$this->login'";
        $result = $this->connex->query($sql);        
        $user = $result->fetchAll(\PDO::FETCH_ASSOC);
        $this->count = $result->rowCount();
        return $this->count;
    }
    

    public function selectPassHash($login) {
        $this->login = $login;
        $sql = "SELECT password FROM utilisateurs WHERE login = '$this->login'";
        $result = $this->connex->query($sql);
        $user = $result->fetchall(\PDO::FETCH_ASSOC);
        return $user;
    }
}  
?>