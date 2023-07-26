<?php
$string = "This is atest string";
$words = preg_split("/\s+/", $string);
print_r($words);