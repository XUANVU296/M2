<?php
class Point2D {
    public $x;
    public $y;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }
    public function setX($x) {
        $this->x = $x;
    }
    public function setY($y) {
        $this->y = $y;
    }
    public function setXY($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY() {
        echo $this->x;
        echo $this->y;
    }
    public function toString() {
        echo "x= " . $this->x . " ,y= " . $this->y;
    }
}
class Point3D extends Point2D {
    public $z;
    public function __construct($x, $y, $z) {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ() {
        return $this->z;
    }
    public function setZ($z) {
        $this->z = $z;
    }
    public function setXYZ($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ() {
        echo $this->x;
        echo $this->y;
        echo $this->z;
    }
    public function toString() {
        echo "x= " . $this->x . ",y= " . $this->y . " và z= " . $this->z;
    }
}
$point3D = new Point3D(3, 5, 7);
echo $point3D->toString();