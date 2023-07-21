<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phones_str = $_POST['phones'];
    $phones_arr = explode(",", $phones_str);
    $viettel = array();
    $mobifone = array();
    $vinaphone = array();
    $invalid = array();
    foreach ($phones_arr as $phone) {
        if (preg_match('/^0[1-9]\d{8}$/', $phone)) {
            $prefix = substr($phone, 0, 3);
            switch ($prefix) {
                case "086":
                case "096":
                case "097":
                case "098":
                    $viettel[] = $phone;
                    break;
                case "089":
                case "090":
                case "093":
                case "070":
                case "079":
                    $mobifone[] = $phone;
                    break;
                case "088":
                case "091":
                case "094":
                case "083":
                case "084":
                    $vinaphone[] = $phone;
                    break;
                default:
                    $invalid[] = $phone;
            }
        } else {
            $invalid[] = $phone;
        }
    }
    echo "<h3>Số điện thoại Viettel:</h3>";
    echo "<ul>";
    foreach ($viettel as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";
    echo "<h3>Số điện thoại Mobifone:</h3>";
    echo "<ul>";
    foreach ($mobifone as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";
    echo "<h3>Số điện thoại Vinaphone:</h3>";
    echo "<ul>";
    foreach ($vinaphone as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";
    echo "<h3>Số điện thoại không hợp lệ:</h3>";
    echo "<ul>";
    foreach ($invalid as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";
}
?>
<form action="" method="post">
    Nhập danh sách số điện thoại (phân cách bởi dấu phẩy):
    <br>
    <textarea name="phones" rows="10" cols="50"></textarea>
    <br>
    <input type="submit" value="Phân loại">
</form>