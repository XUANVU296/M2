<?php
function insertionSort($list) {
    $n = count($list);
    for ($i = 1; $i < $n; $i++) {
      $key = $list[$i];
      $j = $i - 1;
      while ($j >= 0 && $list[$j] < $key) {
        $list[$j + 1] = $list[$j];
        $j--;
      }
      $list[$j + 1] = $key;
    }
    return $list;
  }
  $input = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
  $output = insertionSort($input);
  echo implode(',', $output);