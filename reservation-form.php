<?php
    session_start();
    require_once('Controller/ControllerUser.php');
    $user = $_SESSION["user"]['login'];
    echo $user;

    if (!empty($_POST["titre"]) && !empty($_POST["description"]) && !empty($_POST["début"]) && !empty($_POST["fin"])) {
        $title = $_POST["titre"];
        $description = $_POST["description"];
        $start = $_POST["début"];
        $end = $_POST["fin"];
        $idUser = $_SESSION['user']['id'];

        $reservation = new ControllerUser();
        $reservation->reservation($title, $description, $start, $end, $idUser);
    }
?>

<html>
<body>
    <header>
        <?php    
            require_once('header.php');
        ?>
    </header>
    <main>
        <form action="" method="post">
            <input type="text" name="titre" placeholder="titre">
            <input type="text" name="description" placeholder="description">      
            <input type="datetime-local" name="début"  min="8:00" max="19:00" required placeholder="heure de début">
            <input type="datetime-local" name="fin" min="8:00" max="19:00" required placeholder="heure de fin">
            <input type="submit" name="bouton" value="réservez"> 
        </form>
    </main>
    <footer>

    </footer>    
</body>
</html>