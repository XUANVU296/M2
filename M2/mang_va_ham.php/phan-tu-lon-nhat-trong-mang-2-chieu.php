<?php
    $array = [
        [3, 5, 6],
        [11, 9, 4],
        [2, 6, 7],
    ];
    $max = $array[0][0];;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) { 
            if ( $array[$i][$j] > $max ) {
                $max = $array[$i][$j];
            }
        }
    }
    echo $max;
?>