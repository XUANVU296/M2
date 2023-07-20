<?php
// Bước 1: Khai báo và khởi tạo mảng số nguyên gồm N phần tử cho trước
$arr = array(1, 2, 3, 4, 5);
// Bước 2: Nhập X là phần tử cần xoá
$X = 4;
// Bước 3: Tìm X xem có xuất hiện trong mảng không. Nếu xuất hiện chỉ ra vị trí của X
$index_del = -1;
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $X) {
        $index_del = $i;
        break;
    }
}
// Nếu không tìm thấy X trong mảng, thông báo lỗi
if ($index_del == -1) {
    echo "Không tìm thấy phần tử cần xoá trong mảng";
} else {
    // Bước 4: Thực hiện xoá phần tử X khỏi mảng
    for ($j = $index_del; $j < count($arr) - 1; $j++) {
        $arr[$j] = $arr[$j + 1];
    }
    array_pop($arr); // Xoá phần tử cuối cùng của mảng
    // Bước 5: In ra mảng sau khi xoá
    echo "Mảng sau khi xoá phần tử " . $X . " là: " . "<br>";
    foreach ($arr as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
}