<?php
    //require_once('../librairies/Model/User.php');
    require_once('../autoload.php');
    $disconnect = new \Models\User ();
    $disconnect->disconnect();
?>