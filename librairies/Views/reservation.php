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
        <div class="evenement">
            <h2>Nom</h2>
            <p><?= $reservation[0]["login"]; ?></p>
            <h2>Titre</h2>
            <p><?= $reservation[0]["titre"]; ?></p>
            <h2>Description</h2>
            <p><?= $reservation[0]["description"]; ?></p>
            <h2>Début</h2>
            <p><?= $reservation[0]["debut"]; ?></p>
            <h2>Fin</h2>
            <p><?= $reservation[0]["fin"]; ?></p>
        </div>
    </main>
    <footer>
        <?php
            require_once('footer.php');
        ?>
    </footer>
</body>
