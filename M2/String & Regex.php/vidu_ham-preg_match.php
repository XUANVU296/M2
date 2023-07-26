<?php
$email = "example_123@gmail.com";
$pattern = "/^[a-zA-Z_0-9]+\@[a-z]{1,5}+\.[a-z]{1,3}$/";
if (preg_match($pattern, $email)) {
    echo "Địa chỉ email hợp lệ";
} else {
    echo "Địa chỉ email không hợp lệ";
}