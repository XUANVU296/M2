<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $soA = $_POST['soA'];
    $soB = $_POST['soB'];
    $soC = $_POST['soC'];

    class QuadraticEquation {
        private $soA;
        private $soB;
        private $soC;

        public function __construct($soA, $soB, $soC) {
            $this->soA = $soA;
            $this->soB = $soB;
            $this->soC = $soC;
        }

        public function getSoA() {
            return $this->soA;
        }

        public function getSoB() {
            return $this->soB;
        }

        public function getSoC() {
            return $this->soC;
        }

        public function getDiscriminant() {
            return ($this->soB * $this->soB) - (4 * $this->soA * $this->soC);;
        }

        public function getRoot1() {
            return (-($this->soB) + sqrt($this->getDiscriminant())) / (2 * $this->soA);
        }

        public function getRoot2() {
            return (-($this->soB) - sqrt($this->getDiscriminant())) / (2 * $this->soA);
        }
        public function getRoot() {
            return (-($this->soB)) / (2 * ($this->soA));
        }
    }

    $equation = new QuadraticEquation($soA, $soB, $soC);
    $delta = $equation->getDiscriminant();

    if ($delta > 0) {
        $r1 = $equation->getRoot1();
        $r2 = $equation->getRoot2();
        echo "Root 1: $r1 <br>";
        echo "Root 2: $r2 <br>";
    } else if ($delta == 0) {
        $r = $equation->getRoot();
        echo "Root: $r <br>";
    } else {
        echo "Phương trình vô nghiệm!";
    }
}
?>

<form action="" method="post">
    <h2>Giải phương trình bậc hai<h2><br>
    Nhập số a: <input type="number" name="soA" id=""><br>
    Nhập số b: <input type="number" name="soB" id=""><br>
    Nhập số c: <input type="number" name="soC" id=""><br>
    <input type="submit" value="Tính toán">
</form>