<?php
    /*
    B1: tao form:post gom 3 o input + name, va 1 nut submit
    B2: Kiem tra nguoi dung da gui du lieu len server
        - In ra du lieu nguoi dung da gui len
    B3: Gan vao cac bien: $_POST, $_REQUEST
    B4: Ap dung cong thuc
        - Ap dung cong thuc cho 1 nam
        - Tinh toan dua vao so nam
    B5: xuat du lieu ra
    */ 
    if( $_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<pre>';
        print_r ($_REQUEST);
        echo '</pre>';
        $luong_tien_dau_tu_ban_dau = $_REQUEST['luong_tien_dau_tu_ban_dau'];
        $lai_suat_nam = $_REQUEST['lai_suat_nam'];
        $so_nam_dau_tu = $_REQUEST['so_nam_dau_tu'];
        $gia_tri_tuong_lai = $luong_tien_dau_tu_ban_dau + ( $luong_tien_dau_tu_ban_dau * $lai_suat_nam);
        echo $gia_tri_tuong_lai;
    }
?>
<form action="" method="post">
    Lượng tiền đầu tư ban đầu: <input type="text" name="luong_tien_dau_tu_ban_dau" value=""><br>
    Lãi suất năm: <input type="text" name="lai_suat_nam" value=""><br>
    Số năm đầu tư: <input type="text" name="so_nam_dau_tu" value=""><br>
    <input type="submit" name="tinh" value="Tính">
</form>