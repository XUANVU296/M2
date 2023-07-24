<?php
function selectionSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        $min_idx = $i;
        for ($j = $i+1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min_idx]) {
                $min_idx = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_idx];
        $arr[$min_idx] = $temp;
    }
    return $arr;
}
$arr = [3, 2, 5, 9, 1];
echo "Mảng trước khi sắp xếp: ";
foreach ($arr as $value) {
    echo $value . " ";
}
echo "<br>";
$arr = selectionSort($arr);
echo "Mảng sau khi sắp xếp: ";
foreach ($arr as $value) {
    echo $value . " ";
}