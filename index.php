<?php

require_once 'TimeTravel.php';

//Creation d'un object timeTravel en instanciant la classe TimeTravel
$timeTravel = new TimeTravel();

//on determine la date de depart $start dans l'objetc $timeTravel
$start = $timeTravel->start->setDate(1985, 12, 31);

// on crée l'object $interval en utilisant la fonction DateInterval qui prend en le temps en seconde pour le transformer en date Y/M/D
$interval = new DateInterval("PT1000000000S");

//on affiche la date d'arrivée, tranformée, de Doc, soit 1 milliard de sec avant la date de départ
//on appelle la méthode getTravelInfo() qui calcul la différence entre 2 dates
echo "Marty doit programmer la DoLorean à la date du: " .$timeTravel->findDate($interval). " Doc a réalisé un bond dans le temps, dans le passé, de : " .$timeTravel->getTravelInfo(). "<br/>";


// on regle les dates et les heures du convecteur temporel
$start = $timeTravel ->start ->setDate(1954, 4, 24);
$start = $timeTravel ->start ->setTime(06, 35, 00);
$end = $timeTravel-> end -> setDate(1985, 12, 31);
$end = $timeTravel -> end -> setTime(00, 00, 00);

// on crée l'objet $interval par l'in stanciation de la cate DateInterval pour les bonds dans le temps de 1 mois et 8 jours
$interval = new DateInterval("P1M8D");

//on crée l'objet $step par l'instanciation de la classe DatePeriod
$step = new DatePeriod($start, $interval, $end);

// on affiche le table de N object DateTime formaté au bon format
echo " Liste des bonds temporels entre 1954 et 1985 : <br/>";
echo "<pre>";
print_r($timeTravel->backToFutureStepByStep($step));
echo "<pre>";
