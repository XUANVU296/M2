<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $name_error = empty($name) ? "Tên không được để trống" : "";
    $email_error = empty($email) ? "Email không được để trống" : "";
    $email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email_valid && !empty($email)) {
        $email_error = "Email không hợp lệ";
    }
    function saveDataJSON($filename, $name, $email, $phone) {
        try {
            $json_data = file_get_contents($filename);
            $contact_list = json_decode($json_data, true);
            $contact = array("name" => $name, "email" => $email, "phone" => $phone);
            array_push($contact_list, $contact);
            $json_data = json_encode($contact_list);
            file_put_contents($filename, $json_data);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    if (empty($name_error) && empty($email_error)) {
        if (saveDataJSON("users.json", $name, $email, $phone)) {
            echo "Đăng ký thành công!";
        } else {
            echo "Đăng ký không thành công!";
        }
    }
}
?>
<form method="post" action="">
    <label for="name">Tên người dùng:</label><br>
    <input type="text" id="name" name="name"><br>
    <span style="color: red;"><?php echo $name_error; ?></span><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <span style="color: red;"><?php echo $email_error; ?></span><br>
    <label for="phone">Điện thoại:</label><br>
    <input type="text" id="phone" name="phone"><br>
    <input type="submit" value="Đăng ký">
</form>