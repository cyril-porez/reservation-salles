<?php
    require_once('../autoload.php');
    session_start();
    $idUser = $_GET['evenement'];
    
    if (!empty($_SESSION["user"])) {
        $reservations = new \Controllers\Reservation();
        $reservation = $reservations->getDataReservation($idUser);    
    }
    else {
        header("Location: ../../index.php");
    }
?>


<body>
    <header>
        <?php
            require_once('header.php');
        ?>
    </header>
    <main>
        <p><?php echo $reservation[0]["login"]; ?></p>
        <p><?php echo $reservation[0]["titre"]; ?></p>
        <p><?php echo $reservation[0]["description"]; ?></p>
        <p><?php echo $reservation[0]["debut"]; ?></p>
        <p><?php echo $reservation[0]["fin"]; ?></p>


    </main>
    <footer>
    <?php
    require_once('footer.php');
    ?>
    </footer>
</body>
</html>