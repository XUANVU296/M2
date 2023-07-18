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
        $so_tien = $_REQUEST['so_tien'];
        $vnd = $so_tien / 23000;
        echo "VND: " . $vnd;
    }
    ?>
    <form action="" method="post">
        USD: <input type="number" name="so_tien" id=""><br>
        <input type="submit" value="Chuyển đổi">
    </form>
</body>
</html>