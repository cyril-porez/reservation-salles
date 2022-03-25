<?php 
  session_start();

  require_once('../autoload.php');
  $error = '';

  $update = new \Controllers\User();

  if (!empty($_POST["login"]) &&  empty($_POST["password"]) && empty($_POST["confirmPassword"])) {
    $error = $update->updateLogin($_POST["login"]);
  }
  else if (!empty($_POST["password"]) && !empty($_POST["confirmPassword"]) && (empty($_POST["login"]) || !empty($_POST["login"]))) {
    $error = $update->updatePassword($_POST["password"], $_POST["confirmPassword"]);
  }
  else if (isset($_POST["password"]) && isset($_POST["confirmPassword"]) && isset($_POST["login"])) {
    $error = "* les champs sont vides";
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
      <?php
        echo $error;
      ?>
    </form>
  </main>

  <footer>
  <footer>
        <?php
          require_once('footer.php');
        ?>
    </footer>
  </footer>
