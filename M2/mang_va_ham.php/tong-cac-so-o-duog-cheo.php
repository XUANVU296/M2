<?php
$arr = [
    [1,2,3,4,5], 
    [6,7,8,9,10],
    [11,12,13,14,15]
];
$tong_cheo_phai = 0;
$tong_cheo_trai = 0;
$sum = 0;
for ($i=0; $i < count($arr); $i++) { 
    $tong_cheo_phai += $arr[$i][$i*2];
}
echo $tong_cheo_phai;
for ($i = count($arr)-1; $i >= 0; $i--) {
    $tong_cheo_trai += $arr[2-$i][$i * 2];
}
echo $tong_cheo_trai;
//     $sum = $tong_cheo_phai + $tong_cheo_trai;
// echo "Tổng các phần tử trên đường chéo chính là: " . $sum;
?>
//04
//12
//20