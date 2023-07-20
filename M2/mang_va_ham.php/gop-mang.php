<?php
// Step 1: Tạo 2 mảng số nguyên cho trước
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
// Step 2: Tạo mảng thứ 3 rỗng
$array3 = array();
// Step 3: Gộp mảng
for ($i = 0; $i < count($array1); $i++) {
    $array3[] = $array1[$i];
}
for ($j = 0; $j < count($array2); $j++) {
    $array3[] = $array2[$j];
}
// Step 4: In ra kết quả
echo "Mảng sau khi gộp: <br>";
foreach ($array3 as $element => $value) {
    echo $element . "=>" .  $value . "<br>";
}
?>