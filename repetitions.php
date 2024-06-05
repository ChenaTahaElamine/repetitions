<?php

function repetitions($characterString) {
    // Step 1: Separate the string into individual characters
    $characters = str_split($characterString);
    // Step 2: Eliminate Repetitions
    $uniqueCharacters = array_unique($characters);
    // Step 3: Rep Counter
    $repetitionCounter = 0;

    foreach ($uniqueCharacters as $uniqueChar) {
        $timerCounter = 0;
        foreach ($characters as $char) {
            if ($uniqueChar == $char) {
                $timerCounter++;
            }
        }
        if ($timerCounter > $repetitionCounter) {
            $repetitionCounter = $timerCounter;
        }
    }

    return $repetitionCounter;
}

?>