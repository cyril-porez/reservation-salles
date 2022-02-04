<?php
    require_once('Controller/controllerReservation.php');
    session_start();
    if (!isset($_SESSION['date'])) {
        $_SESSION['date'] = 0;
    }


    if (isset($_GET['previous'])) {
        $_SESSION['date'] = $_SESSION['date'] - 7;
   }
   else if (isset($_GET['next'])) {
        $_SESSION["date"] = $_SESSION['date'] + 7;
   }
?>

<html>  
<body>
    <header>
        <?php require_once('header.php'); ?>
    </header>
    <main>
        <h1>Planning</h1>
        
            <button><a href="planning.php?previous">précédent</a></button>
            <button><a href="planning.php?next">suivant</a></button>

        <table>
            <thead>
                <th></th>
                <?php for ($i = 0; $i < 7; $i++): ?>
                  <th><?= date("d-m-y", strtotime('Monday this week +'.($i + $_SESSION['date']).'days')); ?></th>
                <?php endfor ; ?>
            </thead>
            <tbody>
                <?php
                    $reservation = new controllerReservation();
                    $reservation->displayPlanning();
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        
    </footer>
</body>
</html>