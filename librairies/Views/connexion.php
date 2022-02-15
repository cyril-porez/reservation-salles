<?php 
    session_start();

    require_once('../autoload.php');

    $error = "";

    if (!empty($_POST["login"]) && !empty($_POST["password"])) {
        $auth = new \Controllers\RegisterAuth; 
        $error = $auth->connexionUser($_POST["login"], $_POST["password"]);
    }
?>
   <header>
        <?php
            require_once('header.php');
        ?>    
   </header>
<<<<<<< HEAD
    <main id="main_connexion">     
        <form action="" method="POST">
            <h3>Se connecter</h3>
=======
    <main> 
    
        <form action="" method="POST">

            <h1>Se connecter</h1>
>>>>>>> 426d429fea7e8fff16ed6c4ad063e206f770f821
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="connexion">connexion</button>
        </form>
        <?php
            echo $error;
        ?>
    </main>


