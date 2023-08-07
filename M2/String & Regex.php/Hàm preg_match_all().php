<?php
$string = "This IS a TEST String";
preg_match_all("/\b[A-Z]+\b/", $string, $matches);
print_r($matches);