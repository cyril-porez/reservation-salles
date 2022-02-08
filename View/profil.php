<?php 
  session_start();
  //require_once('bdd.php');
  require_once('../Model/User.php');
  require_once('../Controller/User.php');
  

  if (!empty($_POST["login"])) {
    $login = $_POST["login"];
    $update = new \Controllers\User();
    $update->updateLogin($login);
  }
  else if (isset($_POST["modifPassword"])) {
    if (!empty($_POST["password"]) && !empty($_POST["confirmPassword"])) {
      $password = $_POST["password"];
      $confirmPassword = $_POST["confirmPassword"];
      $updatePass = new \Controllers\User();
      $updatePass->updatePassword($password, $confirmPassword);
    }
  }
?>


<html>
<body class="body_profil">
  <header>
    <?php
      require_once('header.php');
    ?>
  </header>
  <main>
  <h1 class="modifier">MODIFIER</h1>
    <form action="" method="post">
      <input type="text" name='login' placeholder="Login" value="<?php echo $_SESSION["user"]["login"] ?>">
      <button type="submit" name="modifLogin">Modifier</button>
    </form>
    <form action= "" method= "post" class="moduleprofil">     
        <input type="password" name='password' placeholder="Mot de passe" value="<?php ?>">
        <input type="password" name='confirmPassword' placeholder="confirmer mot passe">
        <button class="" name="modifPassword" type="submit">Modifier</button>      
    </form>
  </main>
</body>
</html>