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
$sql = "SELECT * FROM `Quan_ly_khach_san` WHERE STT = $id";
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
    $SOPHONG = $_REQUEST['SOPHONG'];
    $LOAIPHONG = $_REQUEST['LOAIPHONG'];
    $GIAPHONG = $_REQUEST['GIAPHONG'];
    $NGUOIDATPHONG = $_REQUEST['NGUOIDATPHONG'];
    $sql = "UPDATE `Quan_ly_khach_san` SET `SOPHONG` = '$SOPHONG', `LOAIPHONG` = '$LOAIPHONG', `GIAPHONG` = '$GIAPHONG', `NGUOIDATPHONG` = '$NGUOIDATPHONG' WHERE `STT` = $id";
     //Thuc hien truy van
     $conn->exec($sql);

     // chuyen huong ve trang danh sach
     header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Sửa phòng</h2>

<form action="" method="POST" >
  <label for="fname">Số phòng</label><br>
  <input type="number"  name="SOPHONG" value="<?= $row['SOPHONG'];?>"><br><br>
  <label for="lname">Loại phòng</label><br>
  <input type="text"  name="LOAIPHONG" value="<?= $row['LOAIPHONG'];?>"><br><br>
  <label for="lname">Giá phòng</label><br>
  <input type="text"  name="GIAPHONG" value="<?= $row['GIAPHONG'];?>"><br><br>
  <label for="lname">Người đặt phòng</label><br>
  <input type="text"  name="NGUOIDATPHONG" value="<?= $row['NGUOIDATPHONG'];?>"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

