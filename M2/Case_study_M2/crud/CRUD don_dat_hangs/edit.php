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
$sql = "SELECT * FROM `don_dat_hangs` WHERE STT = $id";
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
    $MAKHACHHANG = $_REQUEST['MAKHACHHANG'];
    $MANHANVIEN = $_REQUEST['MANHANVIEN'];
    $NGAYDATHANG = $_REQUEST['NGAYDATHANG'];
    $NGAYGIAOHANG = $_REQUEST['NGAYGIAOHANG'];
    $NGAYCHUYENHANG = $_REQUEST['NGAYCHUYENHANG'];
    $NOIGIAOHANG = $_REQUEST['NOIGIAOHANG'];

    $sql = "UPDATE `don_dat_hangs` SET `MAKHACHHANG` = '$MAKHACHHANG', `MANHANVIEN` = '$MANHANVIEN', `MANHANVIEN` = '$MANHANVIEN', `NGAYGIAOHANG` = '$NGAYGIAOHANG', `NGAYCHUYENHANG` = '$NGAYCHUYENHANG', `NOIGIAOHANG` = '$NOIGIAOHANG' WHERE `STT` = $id";
     //Thuc hien truy van
     $conn->exec($sql);

     // chuyen huong ve trang danh sach
     header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Thêm mặt hàng</h2>

<form action="" method="POST" >
  <label for="fname">Mã khách hàng</label><br>
  <input type="text"  name="MAKHACHHANG" value="<?= $row['MAKHACHHANG'];?>"><br>
  <label for="lname">Mã nhân viên</label><br>
  <input type="number"  name="MANHANVIEN" value="<?= $row['MANHANVIEN'];?>" ><br><br>
  <label for="lname">Ngày đặt hàng</label><br>
  <input type="text"  name="NGAYDATHANG" value="<?= $row['NGAYDATHANG'];?>"><br><br>
  <label for="lname">Ngyaf giao hàng</label><br>
  <input type="number"  name="NGAYGIAOHANG" value="<?= $row['NGAYGIAOHANG'];?>"><br><br>
  <label for="lname">Ngày chuyển hàng</label><br>
  <input type="text"  name="NGAYCHUYENHANG" value="<?= $row['NGAYCHUYENHANG'];?>"><br><br>
  <label for="lname">Nơi giao hàng</label><br>
  <input type="number"  name="NOIGIAOHANG" value="<?= $row['NOIGIAOHANG'];?>"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
