<?php
// Interface Resizeable
interface Resizeable {
    public function resize($percent);
}

// Lớp Circle triển khai interface Resizeable
class Circle implements Resizeable {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function resize($percent) {
        $this->radius += $this->radius * ($percent / 100);
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Lớp Rectangle triển khai interface Resizeable
class Rectangle implements Resizeable {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percent) {
        $this->width += $this->width * ($percent / 100);
        $this->height += $this->height * ($percent / 100);
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

// Lớp Square triển khai interface Resizeable
class Square implements Resizeable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function resize($percent) {
        $this->side += $this->side * ($percent / 100);
    }

    public function getArea() {
        return $this->side * $this->side;
    }
}

// Một mảng các hình
$shapes = [
    new Circle(5),
    new Rectangle(4, 6),
    new Square(3)
];

// Tăng kích thước các hình ngẫu nhiên và hiển thị diện tích trước và sau khi tăng kích thước
foreach ($shapes as $shape) {
    echo "Diện tích ban đầu: " . $shape->getArea() . "<br>";

    $percent = rand(1, 100);
    $shape->resize($percent);

    echo "Diện tích sau khi tăng kích thước $percent%: " . $shape->getArea() . "<br>";
    echo "<br>";
}