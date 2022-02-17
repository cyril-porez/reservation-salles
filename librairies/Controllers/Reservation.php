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
        

        public function getDataReservation($id_utilisateur) {
            $this->id_utilisateur = $id_utilisateur;
            $informations = new \Models\Reservation();
            $reservations = $informations->getDataRev($this->id_utilisateur);
            return $reservations;            
        }
    }
?>