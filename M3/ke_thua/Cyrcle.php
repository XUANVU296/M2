<?php
class Circle {
    private $radius;
    private $color;
    
    public function __construct($radius = 1.0, $color = "red") {
        $this->radius = $radius;
        $this->color = $color;
    }
    
    public function getRadius() {
        return $this->radius;
    }
    
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
    
    public function toString() {
        return "Circle [radius=" . $this->radius . ", color=" . $this->color . "]";
    }
}
class Cylinder extends Circle {
    private $height;
    
    public function __construct($radius = 1.0, $color = "red", $height = 1.0) {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    
    public function getHeight() {
        return $this->height;
    }
    
    public function setHeight($height) {
        $this->height = $height;
    }
    
    public function getVolume() {
        return $this->getArea() * $this->height;
    }
    
    public function toString() {
        return "Cylinder [radius=" . $this->getRadius() . ", color=" . $this->getColor() . ", height=" . $this->height . "]";
    }
}

// Kiểm thử lớp Circle
$circle = new Circle(2.5, "blue");
echo $circle->toString() . "<br>"; // Circle [radius=2.5, color=blue]
echo "Radius: " . $circle->getRadius() . "<br>"; // Radius: 2.5
echo "Color: " . $circle->getColor() . "<br>"; // Color: blue
echo "Area: " . $circle->getArea() . "<br>"; 