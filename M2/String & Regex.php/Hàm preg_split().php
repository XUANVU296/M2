<?php
$string = "This is atest string";
$words = preg_split("//", $string);
print_r($words);