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
        // for ($i=1; $i <= 3 ; $i++) {
        //     for ($j=1; $j <=10 ; $j++) {
        //         echo "*";
        //     }
        //         echo "<br>";
        // }




        // for($i=1; $i<=7; $i++) {
        //     for($j=1; $j<$i; $j++) {
        //         echo "*";
        //     }
        //         echo "<br>";
        // }




        // for($i=7; $i>=1; $i--) {
        //     for($j=1; $j<=$i; $j++) {
        //         echo "*";
        //     }
        //         echo "<br>";
        // }




        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5 - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= 2 * $i - 1; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
   ?>
</body>
</html>