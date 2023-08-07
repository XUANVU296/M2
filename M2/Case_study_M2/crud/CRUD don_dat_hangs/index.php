<?php
include_once 'db.php';
$sql = "SELECT * FROM `don_dat_hangs`";
$stmt = $conn->query($sql);
$rows = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<h2>Đơn mặt hàng</h2>
<a href="http://localhost/M2/CRUD%20don_dat_hangs/index.php">
<table style="width:100%">
  <tr>
    <th>STT</th>
    <th>Mã khách hàng</th>
    <th>Mã nhân viên</th>
    <th>Ngày đặt hàng</th>
    <th>Ngày giao hàng</th>
    <th>Ngày chuyển hàng</th>
    <th>Nơi giao hàng</th>
    <th>Hành động</th>
  </tr>
  <?php
  foreach($rows as $r) :
    ?>   
    <tr>
      <td><?php echo $r['SOHOADON'];?> </td>
      <td><?php echo $r['MAKHACHHANG'];?> </td>
      <td><?php echo $r['MANHANVIEN'];?> </td>
      <td><?php echo $r['NGAYDATHANG'];?> </td>
      <td><?php echo $r['NGAYGIAOHANG'];?> </td>
      <td><?php echo $r['NGAYCHUYENHANG'];?> </td>
      <td><?php echo $r['NOIGIAOHANG'];?> </td>
      <td>
  <a href="edit.php?id=<?php echo $r['SOHOADON'];?>">Sửa</a> |  
  <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="delete.php?id=<?php echo $r['SOHOADON'];?>">Xóa</a> 
</td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>