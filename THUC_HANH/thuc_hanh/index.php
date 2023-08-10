<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<?php
include_once 'db.php';
$sql = "SELECT * FROM `mat_hang`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();
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

<h1 style="text-align:center;background-color:grey;"class="blinking-text">DANH SÁCH BỆNH NHÂN</h1>
<a href="http://localhost/M2/text_vu/case_module_2/public/index.php">
<table id="storm" style="width:100%;background-color:limegreen;">
  <th>
  <a href="create.php" class="btn btn-info">Thêm</a>
  </th>
  <form action="search.php" method="POST">
  <input type="text" name="keyword">
  <button type="submit">Tìm kiếm</button>
</form>

</table>

<table style="width:100%">
  <tr>
    <th style="text-align:center;background-color:grey;color:white;">STT</th>
    <th style="text-align:center;background-color:grey;color:white;">TÊN BỆNH NHÂN</th>
    <th style="text-align:center;background-color:grey;color:white;">PHÒNG</th>
    <th style="text-align:center;background-color:grey;color:white;">NGÀY NHẬP VIỆN</th>
    <th style="text-align:center;background-color:grey;color:white;">GIỚI TÍNH</th>
    <th style="text-align:center;background-color:grey;color:white;">TÌNH TRẠNG</th>
    <th style="text-align:center;background-color:grey;color:white;">THÔNG TIN</th>
    <th style="text-align:center;background-color:grey;color:white;">HÀNH ĐỘNG</th>
  </tr>
  <?php
  foreach($rows as $r) :
    //   echo '<pre>';
    //   print_r($r);
    //   die();
  ?>   
<tr>
  <td style="text-align:center;"><?php echo $r['MA_BN'];?> </td>
  <td style="text-align:center;"><?php echo $r['TEN_BN'];?> </td>
  <td style="text-align:center;"><?php echo $r['PHONG'];?> </td>
  <td style="text-align:center;"><?php echo $r['NGAY_NHAP_VIEN'];?> </td>
  <td style="text-align:center;"><?php echo $r['GIOI_TINH'];?> </td>
  <td style="text-align:center;"><?php echo $r['TINH_TRANG'];?> </td>
  <td style="text-align:center;"><?php echo $r['THONG_TIN'];?> </td>
  <td style="text-align:center;">
      <a href="edit.php?id=<?php echo $r['MA_BN'];?>" class="btn btn-primary">Sửa</a> 
      <a onclick=" return confirm('Bạn có chắc chắn muốn xóa ?'); " href="delete.php?id=<?php echo $r['MA_BN'];?>" class="btn btn-danger">Xóa</a> 
  </td>
</tr>

<!-- Kết thúc vòng lặp -->
<?php endforeach; ?>
</table>
</body>
</html>