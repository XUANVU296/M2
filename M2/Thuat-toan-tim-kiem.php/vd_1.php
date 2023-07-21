<?php
function linearSearch($arr, $x) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $x){
            return $i;
        } 
    }
    return -1;
}
// Sử dụng hàm tìm kiếm tuyến tính để tìm số 10 trong mảng
$x= 2;
$result = linearSearch([2, 4, 6, 7, 8, 10, 12], $x);
// Hiển thị kết quả tìm kiếm
echo $result == -1 ? "Không tìm thấy $x trong mảng" : "$x được tìm thấy tại vị trí $result trong mảng";



// function binarySearch($arr, $x) {
//     $left = 0;
//     $right = count($arr) - 1;
//     while ($left <= $right) {
//         // tìm vị trí ở giữa
//         $mid = floor(($left + $right) / 2);
//         if ($arr[$mid] == $x) {
//             return $mid;
//         }
//         if ($arr[$mid] < $x) {
//             $left = $mid + 1;
//         } else {
//             $right = $mid - 1;
//         }
//     }
//     return -1;
// }
// // Mảng đã được sắp xếp tăng dần
// $arr = [1, 3, 5, 7, 9];
// // Tìm kiếm số 9 trong mảng bằng tìm kiếm nhị phân
// $x = 9;
// $result = binarySearch($arr, $x);
// // Hiển thị kết quả tìm kiếm
// echo $result == -1 ? "Không tìm thấy $x trong mảng" : "$x được tìm thấy tại vị trí $result trong mảng";