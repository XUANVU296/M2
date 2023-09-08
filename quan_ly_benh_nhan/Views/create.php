<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                    <h2 style= "text-align:center;color:darkturquoise;">THÊM KHÁCH HÀNG</h2>
                        <form action="index.php?controllers=Customers&action=store" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Tên bệnh nhân</label>
                            <input type="text" class="form-control" name="TEN" required>
                            <?php if (isset($errors['TEN'])) : ?>
                                <p class="text-danger"><?php echo $errors['TEN'] ?></p>
                            <?php else: ?>
                                <p class="text-danger" style="display:none;">Vui lòng nhập tên bệnh nhân.</p>
                            <?php endif; ?>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Phòng</label>
                            <input type="text" class="form-control" name="PHONG" required>
                            <?php if (isset($errors['PHONG'])) : ?>
                                <p class="text-danger"><?php echo $errors['PHONG'] ?></p>
                            <?php else: ?>
                                <p class="text-danger" style="display:none;">Vui lòng nhập thông tin phòng.</p>
                            <?php endif; ?>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Ngày nhập viện</label>
                            <input type="date" class="form-control" name="NGAY" required>
                            <?php if (isset($errors['NGAY'])) : ?>
                                <p class="text-danger"><?php echo $errors['NGAY'] ?></p>
                            <?php else: ?>
                                <p class="text-danger" style="display:none;">Vui lòng chọn ngày nhập viện.</p>
                            <?php endif; ?>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Giới tính</label>
                            <select class="form-control" name="GIOI_TINH">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                            <?php if (isset($errors['GIOI_TINH'])) : ?>
                                <p class="text-danger"><?php echo $errors['GIOI_TINH'] ?></p>
                            <?php endif; ?>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Tình trạng</label>
                            <select class="form-control" name="TINH_TRANG" required>
                                <option value="">Chọn tình trạng</option>
                                <option value="Nhẹ">Nhẹ</option>
                                <option value="Bình thường">Bình thường</option>
                                <option value="Nguy hiểm">Nguy hiểm</option>
                            </select>
                            <?php if (isset($errors['TINH_TRANG'])) : ?>
                                <p class="text-danger"><?php echo $errors['TINH_TRANG'] ?></p>
                            <?php else: ?>
                                <p class="text-danger" style="display:none;">Vui lòng chọn tình trạng.</p>
                            <?php endif; ?>
                            </div>

                            <div class="mb-3">
                            <label class="form-label">Thông tin</label>
                            <input type="text" class="form-control" name="THONG_TIN" required>
                            <?php if (isset($errors['THONG_TIN'])) : ?>
                                <p class="text-danger"><?php echo $errors['THONG_TIN'] ?></p>
                            <?php else: ?>
                                <p class="text-danger" style="display:none;">Vui lòng nhập thông tin.</p>
                            <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary">THÊM</button>
                            <a type="button" href="index.php" class="btn btn-secondary">QUAY LẠI</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: @yield('content') -->
    </div>
</div> 
<!-- @include('includes.footer') -->