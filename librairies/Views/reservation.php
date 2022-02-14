<?php
    require_once('../autoload.php');

    $idUser = $_GET['reservation'];

    $reservations = new \Controllers\Reservation();
    $reservation = $reservations->getDataReservation($idUser);
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

    </footer>
</body>
</html>