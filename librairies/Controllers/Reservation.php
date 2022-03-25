<?php
    namespace Controllers;

    require_once('../autoload.php');

    class Reservation {
        
        private $id_utilisateur;

        public function __constuct() {

        }


        public function displayPlanning() {
            for ($j = 8; $j <= 18; $j++): ?>
                <tr>
                    <td ><?= $j.':00'; ?></td>
                    <?php
                        for ($i = 0; $i < 7; $i++) {
                            $reservations = new \Models\Reservation();
                            $reservation = $reservations->getDataReservation(date("Y-m-d", strtotime('Monday this week +'.($i + $_SESSION['date']).'days')) .' '.$j. ':00');
                            if (!empty($reservation)) { 
                                $id_reservation = $reservation[0]["id"];

                                echo "<td>
                                        <a href=reservation.php?evenement=". $id_reservation .">";                                        
                                            echo $reservation[0]['login'] . '<br>';
                                            echo $reservation[0]['titre'];
                                        echo "
                                        </a>
                                    </td>";
                            }                            
                            else if (empty($reservation)) {?>
                                <td>
                                        <a href="reservation-form.php"></a>
                                    </td>
                                <?php
                            }
                        }
                    ?>
                </tr>
            <?php endfor ; ?>
            <?php
        }

       public function verifSlot($title, $description, $start, $end, $idUser) {
            $error ='';
            $currentDate = date("Y-m-d H:i");
            $currentTime = explode(" ", $currentDate);
            $time = str_replace(":", ".", $currentTime[1]);
            $intTime = floatval($time);

            $explodeStart = explode("T", $_POST["début"]);
            $strStart = $explodeStart[1];
            
            $explodeEnd = explode("T", $_POST["fin"]);
            $strEnd = $explodeEnd[1];
    
            $timestamp = strtotime($start);
    
            // l'option l dans la fonction date représente les jours de la semaine en textuel de Sunday à Saturday.
            $weekDay = date("l", $timestamp);
    
            $intStart = intval($explodeStart[1]);
            $intEnd = intval($explodeEnd[1]);
    
            $floatStart = floatval($explodeStart[1]);
            $floatEnd = floatval($explodeEnd[1]);
            
            $reservation = new \Models\Reservation();
            $verifReservation = $reservation->getDataReservation($start);
            
            $i = 0;
    
            if ($strStart[$i - 1] == '0' && $strStart[$i - 2] == '0' && $strEnd[$i - 1] == '0' && $strEnd[$i - 2] == '0') {
                if (count($verifReservation) == 0) {
                    //condition qui permet de réserver entre 8H et 18H
                    if ($intStart >= 8.00 && $intStart <= 18.00 && $intEnd >= 9.00 && $intEnd <= 19.00) {
                        if ($intEnd - $intStart == 1 && $explodeStart[0] == $explodeEnd[0]) {
                            if ($start > $currentDate) {
                                if ($weekDay !== 'Saturday' && $weekDay !== "Sunday") {
                                    $reservation = new \Controllers\User();
                                    $reservation->reservation($title, $description, $start, $end, $idUser);
                                    header("Location: planning.php");
                                }
                                else {
                                    $error = "* Vous ne pouvez pas réserver le Weekend";
                                }
                            }
                            else {
                                $error = "* Vous ne pouvez pas réserver dans le passé";
                            }
                        }
                        else {
                            $error = "* Vous devait vous assurer de reserver le même jours. Le créneau ne doit pas dépasser 1H";
                        }
                    }
                    else {
                        $error = "* Vous ne pouvez pas réserver avant 8h00 et après 18:00";
                    }
                }
                else {
                    $error = "* Le créneau que vous avez sélectionné est déjà réservé";
                }
            }
            else {
                $error = "* Vous devez réserver à heure fixe ! Exemple 9:00";
            }
            return $error;
        }
        

        public function getDataReservation($id_utilisateur) {
            $this->id_utilisateur = $id_utilisateur;
            $informations = new \Models\Reservation();
            $reservations = $informations->getDataRev($this->id_utilisateur);
            return $reservations;            
        }
    }
?>