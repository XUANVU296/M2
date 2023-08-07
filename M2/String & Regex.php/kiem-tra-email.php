<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $email = $_REQUEST['email'];
        if (preg_match('/^[A-Za-z0-9]+\@[a-z]{1,5}\.[a-z]{1,3}$/', $email)) {
            echo "<p style='color: blue;'>Đăng ký email thành công</p>";
        } else {
            throw new Exception("Email không hợp lệ");
    }
    } catch ( Exception $e) {
        echo "<p style='color: red;'>Lỗi: " . $e->getMessage() . "</p>";
    }
}
?>
<form action="" method="post">
    Nhập email: <input type="text" name="email" id="" style =" color:green; font-style:italic; width:20%;">
    <input type="submit" value="Đăng ký" style =" background-color:turquoise;">
</form>