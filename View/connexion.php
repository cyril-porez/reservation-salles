<?php 
session_start();
require_once('../Controller/controler.php');
//var_dump($_SESSION["user"]);

if (isset($_POST["login"]) && isset($_POST["password"])) {
    $auth = new Controler;
    $auth->connexionUser($_POST["login"], $_POST["password"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
</head>
<body>
   <header>
        <?php
            require_once('header.php');
        ?>
    
   </header>
    <main>
        <h3>Se connecter</h3>
        <form action="" method="POST">
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="Password" name="password">
            <button class="buttonco" type="submit" name="connexion">connexion</button>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>