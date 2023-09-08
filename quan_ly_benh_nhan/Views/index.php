<style>
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a {
        color: #000;
        padding: 5px 10px;
        text-decoration: none;
        border: 1px solid #ddd;
        margin: 0 5px;
    }

    .pagination a.active {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<h2 style= "text-align:center;color:darkturquoise;">THÔNG TIN BỆNH NHÂN</h2>
<a href="index.php?controllers=Customers&action=create" class="btn btn-success"> Thêm mới </a>
<form action="index.php?" method="get">
    <input type="hidden" name="controllers" value="Customers">
    <input type="hidden" name="action" value="index">
    <input type="search" name="search" id="">
    <input type="submit" value="Tìm kiếm">
</form>
<?php

// Tổng số mục
$total_items = count($rows);

// Số mục trên mỗi trang
$items_per_page = 5;

// Tính toán tổng số trang
$total_pages = ceil($total_items / $items_per_page);

// Xác định trang hiện tại
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Xác định vị trí bắt đầu và kết thúc của mục trên trang hiện tại
$start_index = ($current_page - 1) * $items_per_page;
$end_index = $start_index + $items_per_page;

// Giới hạn mảng $items để chỉ hiển thị các mục trên trang hiện tại
$items_on_current_page = array_slice($rows, $start_index, $items_per_page);

?>

<!-- Hiển thị dữ liệu và phân trang -->
<table border="2" style="text-align:center; width:100%;">
    <tr>
        <th>STT</th>
        <th>TÊN BỆNH NHÂN</th>
        <th>PHÒNG</th>
        <th>NGÀY NHẬP VIỆN</th>
        <th>GIỚI TÍNH</th>
        <th>TÌNH TRẠNG</th>
        <th>THÔNG TIN BỆNH NHÂN</th>
        <th>HÀNH ĐỘNG</th>
    </tr>

    <!-- Hiển thị dữ liệu trên trang hiện tại -->
    <?php foreach ($items_on_current_page as $index => $r) : ?>
        <tr>
            <td><?php echo $index + $start_index + 1; ?></td>
            <td><?php echo $r['TEN']; ?></td>
            <td><?php echo $r['PHONG']; ?></td>
            <td><?php echo $r['NGAY']; ?></td>
            <td><?php echo $r['GIOI_TINH']; ?></td>
            <td><?php echo $r['TINH_TRANG']; ?></td>
            <td><?php echo $r['THONG_TIN']; ?></td>
            <td>
                <a href="index.php?controllers=Customers&action=edit&id=<?php echo $r['ID']; ?>" class="btn btn-primary">Sửa</a> |
                <a href="index.php?controllers=Customers&action=show&ID=<?php echo $r['ID']; ?>" class="btn btn-info">Xem</a> |
                <a onclick="return confirm('Are you sure?');" href="index.php?controllers=Customers&action=destroy&ID=<?php echo $r['ID']; ?>" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<!-- Hiển thị các liên kết phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
        <?php if ($i == $current_page) : ?>
            <a class="active" href="index.php?controllers=Customers&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php else : ?>
            <a href="index.php?controllers=Customers&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
</div>
