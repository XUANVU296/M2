<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
    B1: tao form:post gom 3 o input + name, va 1 nut submit
    B2: Kiem tra nguoi dung da gui du lieu len server
        - In ra du lieu nguoi dung da gui len
    B3: Gan vao cac bien: $_POST, $_REQUEST
    B4: Su dung cau truc nhieu dieu kien de xu ly
    B5: Hien thi ra ket qua
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    var_dump ($_REQUEST);
    echo '</pre>';
    $so_thu_nhat = $_REQUEST['so_thu_nhat'];
    $toan_tu = $_REQUEST['toan_tu'];
    $so_thu_hai = $_REQUEST['so_thu_hai'];
    switch ($toan_tu) {
        case 'cong':
            $ket_qua = $so_thu_nhat + $so_thu_hai;
            break;
        case 'tru':
            $ket_qua = $so_thu_nhat - $so_thu_hai;
            break;
        case 'nhan':
            $ket_qua = $so_thu_nhat * $so_thu_hai;
            break;
        default:
            $ket_qua = $so_thu_nhat / $so_thu_hai;
            break;
    }
    echo "Kết quả: ".$ket_qua;
}
?>
<form action="" method="post">
    Số thứ nhất: <input type="number" name="so_thu_nhat" value=""><br>
    Số thứ hai: <input type="number" name="so_thu_hai" value=""><br>
    <select name="toan_tu" id="">
        <option value="cong">Cộng</option>
        <option value="tru">Trừ</option>
        <option value="nhan">Nhân</option>
        <option value="chia">Chia</option>
    </select>
    <input type="submit" name="tinh" value="Tính"><br>
</form>
</body>
</html>