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
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<pre>';
        var_dump ($_REQUEST);
        echo '</pre>';
        $chieu_dai = $_REQUEST['chieu_dai'];
        $chieu_rong = $_REQUEST['chieu_rong'];
        $chu_vi = ($chieu_dai + $chieu_rong) * 2;
        echo "Chu vi là: " . $chu_vi;
        echo "<br>";
        $dien_tich = $chieu_dai * $chieu_rong;
        echo "Diện tích là: " . $dien_tich;
    }
    ?>
<form action="" method="post">
    Chiều dài: <input type="text" name="chieu_dai" id=""><br>
    Chiều rộng <input type="text" name="chieu_rong" id=""><br>
    <input type="submit" value="Tính">
</form>
</body>
</html>