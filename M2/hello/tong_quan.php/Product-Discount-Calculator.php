<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /*
    B1: tao form:post gom 3 o input + name, va 1 nut submit
    B2: Kiem tra nguoi dung da gui du lieu len server
        - In ra du lieu nguoi dung da gui len
    B3: Gan vao cac bien: $_POST, $_REQUEST
    B4: Ap dung cong thuc
    B5: xuat du lieu ra
    */ 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<pre>';
        print_r ($_REQUEST);
        echo '</pre>';
        $mo_ta_san_pham = $_REQUEST['mo_ta_san_pham'];
        $gia_niem_yet = $_REQUEST['gia_niem_yet'];
        $ti_le_chiet_khau = $_REQUEST['ti_le_chiet_khau'];
        $chiet_khau = $gia_niem_yet * $ti_le_chiet_khau * 0.1;
        print "Chiết khẩu là: " . $chiet_khau;
    }
?>
<form action="" method="post">
Mô tả của sản phẩm: <input type="text" name="mo_ta_san_pham" value=""><br>
Giá niêm yết sản phẩm: <input type="text" name="gia_niem_yet" value=""><br>
Tỷ lệ chiết khấu: <input type="text" name="ti_le_chiet_khau" value=""><br>
<input type="submit" name="tinh" value="Tính chiết khấu">
</form>
</body>
</html>