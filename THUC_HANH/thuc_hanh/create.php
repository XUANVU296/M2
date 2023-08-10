<?php
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD']=="POST"){
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    // $MANHANVIEN = $_REQUEST['MANHANVIEN'];
    $TEN_BN = $_REQUEST['TEN_BN'];
    $PHONG = $_REQUEST['PHONG'];
    $NGAY_NHAP_VIEN = $_REQUEST['NGAY_NHAP_VIEN'];
    $GIOI_TINH = $_REQUEST['GIOI_TINH'];
    $TINH_TRANG = $_REQUEST['TINH_TRANG'];
    $THONG_TIN = $_REQUEST['THONG_TIN'];
    $sql = "INSERT INTO `mat_hang` 
    (`TEN_BN`, `PHONG`, `NGAY_NHAP_VIEN`, `GIOI_TINH`,`TINH_TRANG`, `THONG_TIN`) 
    VALUES 
    ('$TEN_BN','$PHONG','$NGAY_NHAP_VIEN','$GIOI_TINH','$TINH_TRANG','$THONG_TIN')";
     //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
    header("Location: index.php");

}
?>

<style>
        body {
            text-align:center;
            background-color:yellow;
        }
    </style>

<h2>THÊM THÔNG TIN BỆNH NHÂN</h2>

<form action="" method="POST">
  <label for="fname">Tên bệnh nhân</label><br>
  <input type="text" name="TEN_BN"><br><br>
  <label for="lname">Phòng</label><br>
  <input type="number" name="PHONG"><br><br>
  <label for="lname">Ngày nhập viện</label><br>
  <input type="date" name="NGAY_NHAP_VIEN"><br><br>
  <label for="lname">Giới tính</label><br>
    <select name="GIOI_TINH">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
    </select>
    <br><br>
    <label for="lname">Tình trạng</label><br>
    <select name="TINH_TRANG">
            <option value="Nhẹ">Nhẹ</option>
            <option value="Bình thường">Bình thường</option>
            <option value="Nguy hiểm">Nguy hiểm</option>
    </select>
    <br><br>
    <label for="fname">Thông tin</label><br>
  <input type="text" name="THONG_TIN"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>