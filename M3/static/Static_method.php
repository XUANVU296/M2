<?php
class MathUtils {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}

$result1 = MathUtils::add(3, 5);
echo "Result 1: " . $result1 . "<br>"; // In ra: Result 1: 8

$result2 = MathUtils::multiply(2, 4);
echo "Result 2: " . $result2; // In ra: Result 2: 8