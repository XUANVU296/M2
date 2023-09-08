
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<form action="index.php?controllers=Customers&action=update&id=<?= $row['ID'];?>" method="post" enctype="multipart/form-data">
<h2 style= "text-align:center;color:darkturquoise;">SỬA THÔNG TIN</h2>
    <div class="mb-3">
        <label for="inputFullName" class="form-label">Tên bệnh nhân</label>
        <input type="text" class="form-control" id="inputFullName" name="TEN" value="<?= $row['TEN'];?>">
    </div>
    <div class="mb-3">
        <label for="inputEmail" class="form-label">Phòng</label>
        <input type="number" class="form-control" id="inputEmail" name="PHONG" value="<?= $row['PHONG'];?>">
    </div>
    <div class="mb-3">
        <label for="inputPhoneNumber" class="form-label">Ngày nhập viện</label>
        <input type="date" class="form-control" id="inputPhoneNumber" name="NGAY" value="<?= $row['NGAY'];?>">
    </div>
    <div class="mb-3">
    <label for="inputGender" class="form-label">Giới tính</label>
    <select class="form-control" id="inputGender" name="GIOI_TINH">
        <option value="Nam" <?php if ($row['GIOI_TINH'] == 'Nam') echo 'selected'; ?>>Nam</option>
        <option value="Nữ" <?php if ($row['GIOI_TINH'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
    </select>
    <div class="mb-3">
    <label for="inputTinhTrang" class="form-label">Tình trạng</label>
    <select class="form-control" id="inputTinhTrang" name="TINH_TRANG">
        <option value="nhẹ" <?php if ($row['TINH_TRANG'] == 'nhẹ') echo 'selected'; ?>>Nhẹ</option>
        <option value="bình thường" <?php if ($row['TINH_TRANG'] == 'bình thường') echo 'selected'; ?>>Bình thường</option>
        <option value="nguy hiểm" <?php if ($row['TINH_TRANG'] == 'nguy hiểm') echo 'selected'; ?>>Nguy hiểm</option>
    </select>
    </div>
    <div class="mb-3">
        <label for="inputDateOfBirth" class="form-label">Thông tin</label>
        <input type="text" class="form-control" id="inputDateOfBirth" name="THONG_TIN" value="<?= $row['THONG_TIN'];?>">
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>