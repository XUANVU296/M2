<?php
// Thông tin kết nối
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quan_ly_tai_khoan_ngan_hang";
// Tạo kết nối đến CSDL
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
    // Thiết lập chế độ lỗi và ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch(PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
$sql = "UPDATE `customers` SET `addresss`='Quảng Trị' WHERE `customers`.`customer_number`= 6";
$conn->query($sql);