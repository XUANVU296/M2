<?php
include_once 'db.php';
$sql = "SELECT * FROM `mat_hangs`";

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
table, th, td {
  border:1px solid black;
}
</style>
<body>
<h2>Liệt kê mặt hàng</h2>
<a href="http://localhost/M2/CRUD/index.php">
<table style="width:100%">
  <tr>
    <th>STT</th>
    <th>Tên hàng</th>
    <th>Mã công ty</th>
    <th>Mã loại hàng</th>
    <th>Số lượng</th>
    <th>Đơn vị tính</th>
    <th>Gía hàng</th>
    <th>Hành động</th>
  </tr>
  <?php
  foreach($rows as $r) :
    //   echo '<pre>';
    //   print_r($r);
    //   die();
  ?>   
<tr>
  <td><?php echo $r['MAHANG'];?> </td>
  <td><?php echo $r['TENHANG'];?> </td>
  <td><?php echo $r['MACONGTY'];?> </td>
  <td><?php echo $r['MALOAIHANG'];?> </td>
  <td><?php echo $r['SOLUONG'];?> </td>
  <td><?php echo $r['DONVITINH'];?> </td>
  <td><?php echo $r['GIAHANG'];?> </td>
  <td>
      <a href="edit.php?id=<?php echo $r['MAHANG'];?>">Sua</a> |  
      <a onclick=" return confirm('Are you sure ?'); " href="delete.php?id=<?php echo $r['MAHANG'];?>">Xoa</a> 
  </td>
</tr>

<!-- Kết thúc vòng lặp -->
<?php endforeach; ?>
</table>
</body>
</html>
