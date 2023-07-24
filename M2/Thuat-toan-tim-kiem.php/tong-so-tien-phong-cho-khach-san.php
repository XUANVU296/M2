<?php
// $matrix = [
//     [0, 1, 1, 2],
//     [1, 5, 0, 0],
//     [2, 0, 3, 3]
// ];
// $ma_am = [];
// for ($i = 0; $i < count($matrix); $i++) {
//     for ($j = 0; $j < count($matrix[$i]); $j++) {
//         if($matrix[$i][$j] == 0){
//             if( isset($matrix[$i + 1]) ){
//                 $ma_am[$i + 1][$j] = $matrix[$i + 1][$j];
//             }
//         }
//     }
// }
// // echo "<pre>";
// // print_r ($ma_am);
// // echo "</pre>";
// // die();

// foreach ($ma_am as $h => $values) {
//     foreach ($values as $c => $value) {
//         unset($matrix[$h][$c]);
//     }
// }
// $total = 0;
// foreach ($matrix as $h => $values) {
//     foreach ($values as $c => $value) {
//         $total += $matrix[$h][$c];
//     }
// }
// echo $total;






<?php
$matrix = [
    [0, 1, 1, 2],
    [2, 5, 0, 0],
    [2, 0, 3, 3]
];
$sum = 0;
for ($i = 0; $i < count($matrix[0]); $i++) {
    for ($j = 0; $j < count($matrix); $j++) {
        if ($matrix[$j][$i] !== 0) {
            $sum += $matrix[$j][$i];
        } else {
            break;
        }
    }
}
echo $sum;