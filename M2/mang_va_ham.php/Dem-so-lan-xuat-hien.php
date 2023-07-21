<?php
// Bước 1: Khai báo một chuỗi và gán cho nó một giá trị
$str = "Hello World!";
// Bước 2: Khai báo một biến ký tự và gán hoặc nhập từ bàn phím một giá trị.
$char = "l";
// Bước 3: Khai báo biến count và gán giá trị 0, để lưu số ký tự đếm được trong chuỗi
$count = 0;
// Bước 4: Sử dụng vòng lặp duyệt từng ký tự trong chuỗi. Trong quá trình duyệt: so sánh nếu ký tự trong chuỗi bằng ký tự nhập vào thì tăng biến đếm lên 1
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == $char) {
        $count++;
    }
}
// Bước 5: In ra giá trị biến đếm
echo "Số lần xuất hiện của ký tự $char trong chuỗi $str là: $count";



// CÁCH 2:


// // Bước 1: Khai báo một chuỗi và gán cho nó một giá trị
// $str = "Hello World!";
// // Bước 2: Khai báo một biến ký tự và gán hoặc nhập từ bàn phím một giá trị.
// $char = "l";
// // Bước 3: Chuyển đổi chuỗi thành một mảng các ký tự
// $arr = str_split($str);
// // Bước 4: Sử dụng hàm count để đếm số lần xuất hiện của ký tự trong mảng
// $count = count(array_filter($arr, function($value) use ($char) {
//     return $value == $char;
// }));
// // Bước 5: In ra giá trị biến đếm
// echo "Số lần xuất hiện của ký tự $char trong chuỗi $str là: $count";
?>