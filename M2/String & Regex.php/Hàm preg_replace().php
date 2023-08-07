<?php
$string = "I have an apple, he has an apple, she has an apple, we all have apples!";
$new_string = preg_replace("/\bapple\b/", "orange", $string);
echo $new_string;
// $new_string = str_replace("apple", "iphone", $string);
// echo $new_string;