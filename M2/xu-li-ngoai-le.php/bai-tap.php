<?php
// tính tổng của hai số nguyên và xử lý ngoại lệ nếu đầu vào không phải là số.
// function sum ($a, $b) {
//     if ( !is_numeric($a) || !is_numeric($b)) {
//         throw new Exception("Đầu vào không hợp lệ");
//     }
//         echo "Kết quả là: " . $a + $b;
//     }
//     try {
//         sum (7, "abc");
//     } catch ( Exception $e) {
//         echo "Lỗi: " . $e -> getMessage();
//     }


// tính tổng các số nguyên dương trong mảng
function sum($arr) {
    $sum = 0;
    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr[$i]); $j++) { 
            if ( !is_numeric($arr[$i][$j]) ) {
                throw new Exception("Giá trị trong mảng phải là số");
            } else if ( $arr[$i][$j] <= 0 ) {
                throw new Exception("Số phải bé hơn 1");
            } else {
                $sum += $arr[$i][$j];
            }
        }
    }
    return $sum;
}
$arr = [
    [9, 3, -1, 7],
    [9, "Vũ", 3, 1],
    [2, 8, 0, 9]
];
try {
    $tong = sum($arr);
    echo "Kết quả là: " . $tong;
} catch (Exception $e) {
    echo "Lỗi: " . $e -> getMessage();
}