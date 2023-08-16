<?php
class Point {
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
class MoveablePoint extends Point {
    public $xSpeed;
    public $ySpeed;
    public function __construct($x, $y, $xSpeed, $ySpeed) {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed() {
        return $this->xSpeed;
    }
    public function setxSpeed($xSpeed) {
        $this->xSpeed = $xSpeed;
    }
    public function setYSpeed($ySpeed) {
        $this->ySpeed = $ySpeed;
    }
    public function getYSpeed() {
        echo $this->ySpeed;
    }
    public function getSpeed() {
        return [$this->xSpeed, $this->ySpeed];
    }
    public function move() {
        echo $this->x += $this->xSpeed;
        echo  "<br>";
        echo $this->y += $this->ySpeed;
    }
    public function toString() {
        echo "x= " . $this->x . ",y= " . $this->y . " , xSpeed= " . $this->xSpeed . " và ySpeed= " . $this->ySpeed;
    }
}
$moveablePoint = new MoveablePoint(3, 4, 7, 9);
$moveablePoint->move();