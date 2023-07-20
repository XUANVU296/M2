<?php
// Bước 1: Khai báo mảng số nguyên
$arr = array(3, 5, 1, 2, 4);
// Bước 2: Gán phần tử đầu tiên là giá trị nhỏ nhất
$min = $arr[0];
// Bước 3: Duyệt mảng và tìm giá trị nhỏ nhất
for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
}
// Bước 4: In giá trị nhỏ nhất
echo "Giá trị nhỏ nhất trong mảng là: " . $min;