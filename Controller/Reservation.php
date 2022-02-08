<?php
    namespace Controllers;

    require_once('../Model/Reservation.php');

    class Reservation {

        public function __controller() {

        }


        public function displayPlanning() {
            for ($j = 8; $j <= 18; $j++): ?>
                <tr>
                    <td><?= $j.':00'; ?></td>
                    <?php
                        for ($i = 0; $i < 7; $i++) {
                            $reservations = new \Models\Reservation();
                            $reservation = $reservations->getDataReservation( date("Y-m-d", strtotime('Monday this week +'.($i + $_SESSION['date']).'days')) .' '.$j. ':00');
                            
                            if (!empty($reservation)) {
                                echo '<td><a href="reservation.php">Réserver</a></td>';
                            }
                            
                           else if (empty($reservation)) {
                               echo '<td></td>';
                           }
                        }
                    ?>
                </tr>
            <?php endfor ; ?>
            <?php
        }
    }
?>