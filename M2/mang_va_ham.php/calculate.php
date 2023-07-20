<?php
function calculate ($x, $y) {
    if ( $y == 0 || ( $x==0 && $y == 0)) {
        echo "Lỗi ngoại lệ";
    } else {
        $tong = $x + $y;
        $hieu = $x - $y;
        $tich = $x * $y;
        $thuong = $x / $y;
        echo "Tổng là: " . $tong . "<br>";
        echo "Hiệu là: " . $hieu . "<br>";
        echo "Tích là: " . $tich . "<br>";
        echo "Thương là: " . $thuong . "<br>";
    }
}
$x = 5;
$y = 6;
calculate ( $x, $y);