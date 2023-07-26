<?php
function divide($dividend, $divisor) {
    try {
        if ($divisor == 0) {
            throw new Exception("Division by zero.");
        }
        return $dividend / $divisor;
    } catch (Exception $e) {
        return "Error: " . $e->getMessage();
    }
}
echo divide(10, 0);