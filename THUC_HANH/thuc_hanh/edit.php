<?php
include_once 'db.php';
if( isset( $_GET['id'] ) ){
    $id = $_GET['id'];
}else{
    $id = 0;
}

$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;

if( !$id ){
    header("Location: index.php");
}
$sql = "SELECT * FROM `mat_hang` WHERE `MA_BN` = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
// Lay ve du lieu duy nhat
$row = $stmt->fetch();
// echo '<pre>';
// print_r($row);
// die();


if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();
    // 
    $TEN_BN = $_REQUEST['TEN_BN'];
    $PHONG = $_REQUEST['PHONG'];
    $NGAY_NHAP_VIEN = $_REQUEST['NGAY_NHAP_VIEN'];
    $GIOI_TINH = $_REQUEST['GIOI_TINH'];
    $TINH_TRANG = $_REQUEST['TINH_TRANG'];
    $THONG_TIN = $_REQUEST['THONG_TIN'];
    $sql = "UPDATE `mat_hang` SET `TEN_BN` = '$TEN_BN', `PHONG` = '$PHONG',`NGAY_NHAP_VIEN` = '$NGAY_NHAP_VIEN', `GIOI_TINH` = '$GIOI_TINH',`TINH_TRANG` = '$TINH_TRANG', `THONG_TIN` = '$THONG_TIN' WHERE `MA_BN` = $id";
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

<h2>SỬA THÔNG TIN BỆNH NHÂN</h2>

<form action="" method="POST" >
  <label for="fname">Tên bệnh nhân</label><br>
  <input type="text"  name="TEN_BN" value="<?= $row['TEN_BN'];?>"><br><br>
  <label for="lname">Phòng</label><br>
  <input type="number"  name="PHONG" value="<?= $row['PHONG'];?>"><br><br>
  <label for="fname">Ngày nhập viện</label><br>
  <input type="date"  name="NGAY_NHAP_VIEN" value="<?= $row['NGAY_NHAP_VIEN'];?>"><br><br>
  <label for="lname">Giới tính</label><br>
    <select name="GIOI_TINH">
            <option value="<?= $row['GIOI_TINH'];?>">Nam</option>
            <option value="<?= $row['GIOI_TINH'];?>">Nữ</option>
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
  <input type="text"  name="THONG_TIN" value="<?= $row['THONG_TIN'];?>"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>