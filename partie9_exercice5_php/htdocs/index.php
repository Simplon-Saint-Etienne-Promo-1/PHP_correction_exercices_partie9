<?php
    // Get the current timestamp
    $currentTimestamp = time();

    // Get the timestamp for May 16, 2016
    $specificTimestamp = mktime(0, 0, 0, 5, 16, 2016);

    // Calculate the difference in seconds
    $difference = $currentTimestamp - $specificTimestamp;

    // Convert the difference to days
    $days = floor($difference / 86400);

    // Print the result
    echo "Number of days between today and May 16, 2016: " . $days;
?>