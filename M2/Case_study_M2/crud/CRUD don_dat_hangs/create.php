<?php
include_once 'db.php';
if ($_SERVER['REQUEST_METHOD']=="POST"){
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    $MAKHACHHANG = $_REQUEST['MAKHACHHANG'];
    $MANHANVIEN = $_REQUEST['MANHANVIEN'];
    $NGAYDATHANG = $_REQUEST['NGAYDATHANG'];
    $NGAYGIAOHANG = $_REQUEST['NGAYGIAOHANG'];
    $NGAYCHUYENHANG = $_REQUEST['NGAYCHUYENHANG'];
    $NOIGIAOHANG = $_REQUEST['NOIGIAOHANG'];

    $sql = "INSERT INTO `mat_hangs` 
    ( `MAKHACHHANG`, `MANHANVIEN`, `NGAYDATHANG`, `NGAYGIAOHANG`, `NGAYCHUYENHANG`, `NOIGIAOHANG`) 
    VALUES 
    ('$MAKHACHHANG','$MANHANVIEN','$NGAYDATHANG', '$NGAYGIAOHANG', '$NGAYCHUYENHANG','$NOIGIAOHANG')";
     //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Sửa đơn hàng</h2>

<form action="" method="POST">
  <label for="fname">Mã khách hàng</label><br>
  <input type="text" name="MAKHACHHANG"><br>
  <label for="lname">Mã nhân viên </label><br>
  <input type="text" name="MANHANVIEN"><br><br>
  <label for="lname">Ngày đặt hàng</label><br>
  <input type="text" name="NGAYDATHANG"><br><br>
  <label for="lname">Ngày giao hàng</label><br>
  <input type="text" name="NGAYGIAOHANG"><br><br>
  <label for="lname">Ngày chuyển hàng</label><br>
  <input type="text" name="NGAYCHUYENHANG"><br><br>
  <label for="lname">Nơi giao hàng </label><br>
  <input type="text" name="NOIGIAOHANG"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

