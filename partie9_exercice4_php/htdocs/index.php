<?php
    // Get the current timestamp
    $currentTimestamp = time();
    echo "Current timestamp: " . $currentTimestamp . "<br>";

    // Get the timestamp for Tuesday, August 2, 2016 at 15:00:00
    $specificTimestamp = mktime(15, 0, 0, 8, 2, 2016);
    echo "Specific timestamp: " . $specificTimestamp;
?>