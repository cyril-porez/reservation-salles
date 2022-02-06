<?php 
  
  require_once('../Controller/controler.php');
  
  $message = "";
  
 
  if (isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"]) ) {
    
    $register = new Controler();
    $register->createUser($_POST["login"], $_POST["password"], $_POST["confirmPassword"]);
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

<body class="body_inscription">
    <header>
        <nav>
            <a href="index.php">Accueil</a>
                <?php 
                   
            ?>
               
            
            <div class="animation start-home"></div>

        </nav>
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
</body>
</html>