<?php
include_once 'db.php';
if ($_SERVER['REQUEST_METHOD']=="POST"){
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    $TENHANG = $_REQUEST['TENHANG'];
    $MACONGTY = $_REQUEST['MACONGTY'];
    $MALOAIHANG = $_REQUEST['MALOAIHANG'];
    $SOLUONG = $_REQUEST['SOLUONG'];
    $DONVITINH = $_REQUEST['DONVITINH'];
    $GIAHANG = $_REQUEST['GIAHANG'];

    $sql = "INSERT INTO `mat_hangs` 
    ( `TENHANG`, `MACONGTY`, `MALOAIHANG`, `SOLUONG`, `DONVITINH`, `GIAHANG`) 
    VALUES 
    ('$TENHANG','$MACONGTY','$MALOAIHANG', '$SOLUONG', '$DONVITINH','$GIAHANG')";
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

<form action="" method="POST">
  <label for="fname">Tên hàng</label><br>
  <input type="text" name="TENHANG"><br>
  <label for="lname">Mã công ty</label><br>
  <input type="text" name="MACONGTY"><br><br>
  <label for="lname">Mã loại hàng</label><br>
  <input type="text" name="MALOAIHANG"><br><br>
  <label for="lname">Số lượng</label><br>
  <input type="text" name="SOLUONG"><br><br>
  <label for="lname">Đơn vị tính</label><br>
  <input type="text" name="DONVITINH"><br><br>
  <label for="lname">Gía hàng</label><br>
  <input type="text" name="GIAHANG"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

