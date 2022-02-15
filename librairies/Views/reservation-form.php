<?php
    session_start();
    //require_once('../Controller/User.php');

    require_once('../autoload.php');

    $currentDate = date("Y-m-d H:i");

    $currentTime = explode(" ", $currentDate);
    $time = str_replace(":", ".", $currentTime[1]);
   
    $intTime = floatval($time);
    

    if (!empty($_POST["titre"]) && !empty($_POST["description"]) && !empty($_POST["début"]) && !empty($_POST["fin"])) {
        $title = $_POST["titre"];
        $description = $_POST["description"];
        $start = $_POST["début"];
        $end = $_POST["fin"];
        $idUser = $_SESSION['user']['id'];
        
        $explodeStart = explode("T", $_POST["début"]);
        $explodeEnd = explode("T", $_POST["fin"]);

        $timestamp = strtotime($start);
        // l'option l dans la fonction date représente les jours de la semaine en textuel de Sunday à Saturday.
        $weekDay = date("l", $timestamp);

        $intStart = intval($explodeStart[1]);
        $intEnd = intval($explodeEnd[1]);

        $floatStart = floatval($explodeStart[1]);
        $floatEnd = floatval($explodeEnd[1]);
        
        $reservation = new \Models\Reservation();
        $verifReservation = $reservation->getDataReservation($start);
        
        if (count($verifReservation) == 0) {
            //condition qui permet de réserver en 8H et 18H
            if ($intStart >= 8.00 && $intStart <= 18.00 && $intEnd >= 9.00 && $intEnd <= 19.00) {
                if ($intEnd - $intStart == 1 && $explodeStart[0] == $explodeEnd[0]) {
                    if ($start >= $currentDate && $intStart > $intTime) {
                        if ($weekDay !== 'Saturday' && $weekDay !== "Sunday") {
                            $reservation = new \Controllers\User();
                            $reservation->reservation($title, $description, $start, $end, $idUser);
                        }
                        else {
                            echo "Vous ne pouvez pas réserver le Weekend";
                        }
                    }
                    else {
                        echo "Vous ne pouvez pas réserver dans le passé";
                    }
                }
                else {
                    echo "Vous devait vous assurer de reserver le même jours. Le créneau ne doit pas dépasser 1H";
                }
            }
            else {
                echo "Vous ne pouvez pas réserver avant 8h00 et après 18:00";
            }
        }
        else {
            echo "Le créneau que vous avez sélectionné est déjà réservé";
        }
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
        </form>
    </main>

