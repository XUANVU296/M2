<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $so_can_tim = $_REQUEST['tim'];
    $number = [1,4,5,4,6,7];
    $dem = 0;
    for ($i = 0; $i < count($number); $i++) {
        if ($number[$i] == $so_can_tim) {
            $dem++;
        }
    }
    echo "Số lần xuất hiện của số $so_can_tim trong mảng là $dem lần";
}
?>
<form action="" method="post">
    Nhập số cần tìm: <input type="number" name="tim" id="">
    <input type="submit" value="Tìm">
</form>