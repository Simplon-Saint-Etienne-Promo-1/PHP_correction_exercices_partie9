<?php
    // On défini les jours de la semaines et les mois
    $weekdays = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
    $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');

    // On récupère la date actuelle
    $weekday = $weekdays[date('w')];
    $day = date('j');
    $month = $months[date('n') - 1];
    $year = date('Y');

    // Print the current date
    echo "Date actuelle: $weekday $day $month $year";
?>