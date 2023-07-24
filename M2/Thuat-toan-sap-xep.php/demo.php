<?php
function insertionSort($arr) {
    $n = count($arr);
    for($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}
$arr = [3, 2, 5, 9, 1];
echo "Mảng trước khi sắp xếp: ";
foreach ($arr as $value) {
    echo $value . " ";
}
echo "<br>";
$arr = insertionSort($arr);
echo "Mảng sau khi sắp xếp: ";
foreach ($arr as $value) {
    echo $value . " ";
}