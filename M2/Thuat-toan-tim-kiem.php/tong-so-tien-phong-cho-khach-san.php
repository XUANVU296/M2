<?php
function totalCost($matrix) {
    $rows = count($matrix);
    $cols = count($matrix[0]);
    $total = 0;
    for ($i = 0; $i < $cols; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            if ($matrix[$j][$i] == 0) {
                break;
            } else {
                $total += $matrix[$j][$i];
            }
        }
    }
    return $total;
}