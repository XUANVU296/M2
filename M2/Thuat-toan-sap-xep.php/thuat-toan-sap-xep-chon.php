<?php
function selectionSort($list) {
    $n = count($list);
    for ($i = 0; $i < $n - 1; $i++) {
      $max_idx = $i;
      for ($j = $i + 1; $j < $n; $j++) {
        if ($list[$j] > $list[$max_idx]) {
          $max_idx = $j;
        }
      }
      $temp = $list[$i];
      $list[$i] = $list[$max_idx];
      $list[$max_idx] = $temp;
    }
    return $list;
  }
  $input = [1, 9, 4.5, 6.6, 5.7, -4.5];
  $output = selectionSort($input);
  echo implode(',',$output);