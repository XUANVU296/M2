<?php
if(isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
    $sql = "SELECT * FROM mat_hang WHERE TEN_BN LIKE '%$keyword%'";
  } else {
    $sql = "SELECT * FROM mat_hang"; 
  }
  ?>
<!-- Đoạn mã HTML cho kết quả tìm kiếm -->
<?php foreach($rows as $row): ?>
  <tr>
    <td><?php echo $row['TEN_BN'] ?></td>
    <!-- ... -->
  </tr>
<?php endforeach; ?>