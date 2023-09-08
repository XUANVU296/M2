<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<table class="product-details">
    <tr>
    <h2 style= "text-align:center;color:darkturquoise;">XEM CHI TIẾT</h2>
    </tr>
    <tr>
        <td>Tên bệnh nhân:</td>
        <td><?= $row['TEN'];?></td>
    </tr>
    <tr>
        <td>Phòng:</td>
        <td><?= $row['PHONG'];?></td>
    </tr>
    <tr>
        <td>Ngày nhập viện:</td>
        <td><?= $row['NGAY'];?></td>
    </tr>
    <tr>
        <td>Giới tính:</td>
        <td><?= $row['GIOI_TINH'];?></td>
    </tr>
    <tr>
        <td>Tình trạng:</td>
        <td><?= $row['TINH_TRANG'];?></td>
    </tr>
    <tr>
        <td>Thông tin:</td>
        <td><?= $row['THONG_TIN'];?></td>
    </tr>
</table>
<style>
  
    .product-details {
    width: 50%;
    border-collapse: collapse;
}

.product-details h3 {
    text-align: center;
    margin-bottom: 0px;
}

.product-details tr:nth-child(even) {
    background-color: #f2f2f2;
}

.product-details td {
    padding: 10px;
    border: 1px solid #ccc;
}

.product-details td:first-child {
    font-weight: bold;
}
</style>