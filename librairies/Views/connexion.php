
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
<main id="main_connexion">

    <form action="" method="POST">
        
        <h1 class="titi">Se Connecter</h1>
        <input type="text" placeholder="login" name="login">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="connexion">connexion</button>
        <p><?=  $error; ?></p>
    </form>
</main>
<footer>
<?php
    require_once('footer.php');
    ?>
</footer>

