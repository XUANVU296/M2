<?php
function divide($dividend, $divisor) {
    try {
        return $dividend / $divisor;
    } catch (Exception $e) {
        return "Error: " . $e->getMessage();
    }
}
echo divide(10, 0);