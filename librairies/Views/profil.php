<?php 
  session_start();

  require_once('../autoload.php');

  if (!empty($_POST["login"])) {
    $update = new \Controllers\User();
    $update->updateLogin($_POST["login"]);
  }
  else if (isset($_POST["modifPassword"])) {
    if (!empty($_POST["password"]) && !empty($_POST["confirmPassword"])) {
      $updatePass = new \Controllers\User();
      $updatePass->updatePassword($_POST["password"], $_POST["confirmPassword"]);
    }
  }
?>
  <header>
    <?php
      require_once('header.php');
    ?>
  </header>
  <main>
    <form action= "" method= "post" class="moduleprofil"> 

    <h1>MODIFIER</h1>

        <input type="text" name='login' placeholder="Login" value="<?php echo $_SESSION["user"]["login"] ?>">
        <input type="password" name='password' placeholder="Mot de passe" value="<?php ?>">
        <input type="password" name='confirmPassword' placeholder="confirmer mot passe">
        <button name="modifPassword" type="submit">Modifier</button>      
    </form>
  </main>

