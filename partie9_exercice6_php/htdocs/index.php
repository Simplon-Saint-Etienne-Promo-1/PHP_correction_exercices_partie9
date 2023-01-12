<?php
    // Get the number of days in February 2016
    $days = date('t', mktime(0, 0, 0, 2, 1, 2016));

    // Print the result
    echo "Number of days in February 2016: " . $days;
?>