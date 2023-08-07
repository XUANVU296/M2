<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $ten_tai_khoan = $_POST['ten'];
        if (preg_match('/^[_a-z0-9]{6,}$/', $ten_tai_khoan)) {
            echo "<p style='color: blue;'>Đăng ký thành công</p>";
            $datajson = file_get_contents('ten.json');
            $dataarr = json_decode($datajson, true);
            $dataarr[] = array('ten' => $ten_tai_khoan);
            $newjson = json_encode($dataarr);
            file_put_contents('ten.json', $newjson);
        } else {
            throw new Exception("Tên tài khoản không hợp lệ");
        }
    }
    catch ( Exception $e) {
        echo "<p style='color: red;'>" . $e->getMessage() . "</p>";
    }
}
?>
<form action="" method="post">
    Tên tài khoản: <input type="text" name="ten" id="" placeholder="Vui lòng nhập vào đây" style="color:blue; width:20%;">
    <input type="submit" value="Đăng ký" style="background-color:yellow;">
</form>
<?php
    $datajson = file_get_contents('ten.json');
    $dataarr = json_decode($datajson,true);
?>
<table boder="1" width="50%">
    <tr>
        <th>STT</th>
        <th>Tên tài khoản</th>
    </tr>
    <?php foreach ($dataarr as $key => $value): ?>
        <tr>
            <td style ="text-align:center"><?php echo $key + 1; ?></td>
            <td style ="text-align:center"><?php echo $value['ten']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
