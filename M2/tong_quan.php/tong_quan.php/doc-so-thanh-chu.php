<?php
function readNumber($num){
    $ones = array(
        0 => "zero", 1 => "one", 2 => "two", 3 => "three", 4 => "four", 5 => "five", 6 => "six", 7 => "seven", 8 => "eight", 9 => "nine",
        10 => "ten", 11 => "eleven", 12 => "twelve", 13 => "thirteen", 14 => "fourteen", 15 => "fifteen", 16 => "sixteen", 17 => "seventeen", 18 => "eighteen", 19 => "nineteen"
    );
    $tens = array(
        0 => "", 1 => "", 2 => "twenty", 3 => "thirty", 4 => "forty", 5 => "fifty", 6 => "sixty", 7 => "seventy", 8 => "eighty", 9 => "ninety"
    );
 
    if ($num < 20) {
        return $ones[$num];
    }
    elseif ($num < 100) {
        return $tens[substr($num,0,1)] . ($num % 10 != 0 ? " " : "") . $ones[substr($num,1)];
    }
    elseif ($num < 1000) {
        return $ones[substr($num,0,1)] . " hundred " . ($num % 100 != 0 ? " " : "") . readNumber(substr($num,1));
    }
}
$num = 999;
echo readNumber($num);
?>