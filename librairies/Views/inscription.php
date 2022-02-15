<?php 
  
  //require_once('../Controller/RegisterAuth.php');
  require_once('../autoload.php');
  $message = "";
  
 
  if (!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["confirmPassword"]) ) {
    
    $register = new \Controllers\RegisterAuth();
    $register->createUser($_POST["login"], $_POST["password"], $_POST["confirmPassword"]);
  }
?>
    <header>
        <?php
          require_once('header.php');
        ?>
    </header>
  <main>
    <form action= "" method= "post" class="reservations_salles">
        
        <h1 class="titi">S'INSCRIRE</h1>       
          <input type="text" name="login" placeholder="Login">
          <input type="password" name="password" placeholder="Mot de passe">
          <input type="password" name="confirmPassword" placeholder="confirmer le mot de passe">
          <button class="" name="connection" type="submit">S'inscrire</button>
        <p>
          <?php 
            echo $message;
          ?>
        </p>

        
    </form>
  </main>

