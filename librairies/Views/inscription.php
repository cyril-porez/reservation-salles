<?php 
  
  require_once('../autoload.php');
  
  $error = "";

  if (!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["confirmPassword"]) ) {  
    $register = new \Controllers\RegisterAuth();  
    $error = $register->createUser($_POST["login"], $_POST["password"], $_POST["confirmPassword"]);
  }
?>



<body class="body_inscription">
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
            echo $error;
        ?>
      </p>       
    </form>
  </main>
</body>
</html>