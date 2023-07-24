<?php
function bubbleSort($list) {
    $n = count($list);
    for ($i = 0; $i < $n; $i++) {
      for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($list[$j] > $list[$j + 1]) {
          $temp = $list[$j];
          $list[$j] = $list[$j + 1];
          $list[$j + 1] = $temp;
        }
      }
    }
    return $list;
  }
  $input = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
  $output = bubbleSort($input);
  echo implode(',', $output);