<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<?php
include_once 'db.php';
$sql = "SELECT * FROM `Quan_ly_khach_san`";

// Truy vấn
$stmt = $conn->query($sql);
// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 

// Trả về dữ liệu
$rows = $stmt->fetchAll(); //[]
// echo '<pre>';
// print_r($rows);
// die();
?>
<!DOCTYPE html>
<html>
<style>
  body {
    background-color:limegreen;
  }
  table {
    background-color:white;
  }
@keyframes rainbow {
  0% { color: red; }
  14% { color: orange; }
  28% { color: yellow; }
  42% { color: green; }
  57% { color: blue; }
  71% { color: indigo; }
  85% { color: violet; }
  100% { color: red; }
}

.blinking-text {
  animation: rainbow 4s infinite;
}
table, th, td {
  border:1px solid black;
}
#storm {
  border:0px;
}
</style>
<body>

<h1 style="text-align:center;background-color:grey;"class="blinking-text">QUẢN LÝ KHÁCH SẠN</h1>
<a href="http://localhost/M2/Case_study_M2/index.php">
<table id="storm" style="width:100%;background-color:limegreen;">
  <th>
  <a href="create.php" class="btn btn-info">Thêm</a>
  </th>
  <th style="text-align:right;">
    <form action="" method="post">
      <input type="text" name="" placeholder="Nhập từ cần tìm"> 
      <input type="submit" value="Tìm kiếm">
    </form>
  </th>
</table>

<table style="width:100%">
  <tr>
    <th style="text-align:center;background-color:grey;color:white;">STT</th>
    <th style="text-align:center;background-color:grey;color:white;">SỐ PHÒNG</th>
    <th style="text-align:center;background-color:grey;color:white;">LOẠI PHÒNG</th>
    <th style="text-align:center;background-color:grey;color:white;">GIÁ PHÒNG</th>
    <th style="text-align:center;background-color:grey;color:white;">NGƯỜI ĐẶT PHÒNG</th>
    <th style="text-align:center;background-color:grey;color:white;">HÀNH ĐỘNG</th>
  </tr>
  <?php
  foreach($rows as $r) :
    //   echo '<pre>';
    //   print_r($r);
    //   die();
  ?>   
<tr>
  <td style="text-align:center;"><?php echo $r['STT'];?> </td>
  <td style="text-align:center;"><?php echo $r['SOPHONG'];?> </td>
  <td style="text-align:center;"><?php echo $r['LOAIPHONG'];?> </td>
  <td style="text-align:center;"><?php echo $r['GIAPHONG'];?> </td>
  <td style="text-align:center;"><?php echo $r['NGUOIDATPHONG'];?> </td>
  <td style="text-align:center;">
      <a href="edit.php?id=<?php echo $r['STT'];?>" class="btn btn-primary">Sửa</a> 
      <a onclick=" return confirm('Bạn có chắc chắn muốn xóa ?'); " href="delete.php?id=<?php echo $r['STT'];?>" class="btn btn-danger">Xóa</a> 
  </td>
</tr>

<!-- Kết thúc vòng lặp -->
<?php endforeach; ?>
</table>
</body>
</html>
