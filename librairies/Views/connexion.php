<?php 
session_start();
//require_once('../Controller/RegisterAuth.php');
//var_dump($_SESSION["user"]);
require_once('../autoload.php');

if (!empty($_POST["login"]) && !empty($_POST["password"])) {
    $auth = new \Controllers\RegisterAuth;
    $auth->connexionUser($_POST["login"], $_POST["password"]);
}

?>


   <header>

        <?php

            require_once('header.php');
        ?>
    
   </header>
    <main> 
    
        <form action="" method="POST">

            <h1>Se connecter</h1>
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="connexion">connexion</button>
        </form>

    </main>


