<?php

// Récupère la date du jour
$today = new DateTime();

// Sous-trait 22 jours à la date du jour
$today->sub(new DateInterval('P22D'));

// Affiche la date résultante au format souhaité
echo $today->format('Y-m-d');

?>