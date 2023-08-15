<?php
class MyClass {
    public $publicVariable; // Công khai, có thể truy cập từ bất kỳ đâu
    private $privateVariable; // Riêng tư, chỉ có thể truy cập trong cùng lớp
    protected $protectedVariable; // Bảo vệ, chỉ có thể truy cập từ cùng lớp và các lớp con

    public function publicMethod() {
        // Phương thức công khai, có thể được gọi từ bất kỳ đâu
    }

    private function privateMethod() {
        // Phương thức riêng tư, chỉ có thể gọi từ trong cùng lớp
    }

    protected function protectedMethod() {
        // Phương thức bảo vệ, có thể gọi từ cùng lớp và các lớp con
    }
}