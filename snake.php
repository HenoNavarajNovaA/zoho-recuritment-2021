<?php

/*
/**
 * Input from user
*/
$input = 4;
/**
 * Assigning for loop exection 
*/
$n = $input;
/**
 * Calculating n space for making matrix
*/
$spaces = $input * 2;
$count = 0;
$val = 1;
/**
 * Initial value for starting snake (head)
*/
$range = 1;
/**
 * Loop exection until for input number
*/
while ($n > 0) {
    for($i = 0; $i < $spaces; $i++) {
        echo ' ';
    }
    // minus for next level
    $spaces = $spaces - 2;
    if($count === 0) {
        /**
         * Left to right
        */
        for($i = $range; $i < ($input + $range); $i++) {
            echo $i;
            $val += 1;
        }
        $count = 1;
        $range = $val - 1;
    } else {
        /**
         * Right to left
        */
        for($i = ($val + $input); $i > ($range); $i--) {
            echo $i;
        }
        $count = 0;
        $val = $val + $input;
        $range = $val;
    }
    echo "\n";
    // decrementing for continuing loop
    $n--;
}

?>
