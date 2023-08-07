<?php
include_once 'db.php';
if ($_SERVER['REQUEST_METHOD']=="POST"){
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    $SOPHONG = $_REQUEST['SOPHONG'];
    $LOAIPHONG = $_REQUEST['LOAIPHONG'];
    $GIAPHONG = $_REQUEST['GIAPHONG'];
    $NGUOIDATPHONG = $_REQUEST['NGUOIDATPHONG'];

    $sql = "INSERT INTO `Quan_ly_khach_san` 
    ( `SOPHONG`, `LOAIPHONG`, `GIAPHONG`, `NGUOIDATPHONG`) 
    VALUES 
    ('$SOPHONG','$LOAIPHONG','$GIAPHONG', '$NGUOIDATPHONG')";
     //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Thêm phòng</h2>

<form action="" method="POST">
  <label for="fname">Số phòng</label><br>
  <input type="text" name="SOPHONG"><br><br>
  <label for="lname">Loại phòng</label><br>
  <input type="text" name="LOAIPHONG"><br><br>
  <label for="lname">Giá phòng</label><br>
  <input type="text" name="GIAPHONG"><br><br>
  <label for="lname">Người đặt phòng</label><br>
  <input type="text" name="NGUOIDATPHONG"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>