<?php
    session_start();

    require_once('../autoload.php');

    $error ="";

    

    if (!empty($_POST["titre"]) && !empty($_POST["description"]) && !empty($_POST["début"]) && !empty($_POST["fin"])) {
        $title = $_POST["titre"];
        $description = $_POST["description"];
        $start = $_POST["début"];
        $end = $_POST["fin"];
        $idUser = $_SESSION['user']['id'];
        
        $planning = new \Controllers\Reservation();
        $error = $planning->verifSlot($title, $description, $start, $end, $idUser);
    }
?>

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
        <button type="submit" name="reserver">reserver</button>

        <?= $error; ?>
    </form>
</main>
<footer>
    <?php
        require_once('footer.php');
    ?>
</footer>