<?php
$string = "This IS a Test String";
preg_match_all("/[A-Z]+/", $string, $matches);
print_r($matches);