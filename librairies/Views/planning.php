<?php
require_once('../autoload.php');

session_start();
if (!isset($_SESSION['date'])) {
    $_SESSION['date'] = 0;
}


if (isset($_GET['previous'])) {
    $_SESSION['date'] = $_SESSION['date'] - 7;
} else if (isset($_GET['next'])) {
    $_SESSION["date"] = $_SESSION['date'] + 7;
}

$days = ["Lundi ", "Mardi ", "Mercredi ", "Jeudi ", "Vendredi ", "Samedi ", "Dimanche "];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="librairies/views/css/planning.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <title>Document</title>
</head>


<body>

    <header>

        <?php require_once('header.php'); ?>
    </header>

    <h1>Planning</h1>

    <div class="btn">

        <button><a href="planning.php?previous">précédent</a></button>
        <button><a href="planning.php?next">suivant</a></button>
    </div>
    <main>

        <table class="table-style">

            <thead>

                <th></th>
                <?php for ($i = 0; $i < 7; $i++) : ?>
                    <th><?= $days[$i];
                        echo date("d-m-y", strtotime('Monday this week +' . ($i + $_SESSION['date']) . 'days')); ?></th>
                <?php endfor; ?>
            </thead>
            <tbody>

                <?php
                $reservation = new \Controllers\Reservation();
                $reservation->displayPlanning();
                ?>
            </tbody>
        </table>

    </main>
    <footer>

    <?php
    require_once('footer.php');
    ?>
    </footer>
</body>
