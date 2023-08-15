<?php
class StopWatch {
    private $startTime;
    private $endTime;

    public function __construct() {
        $this->startTime = microtime(true);
        $this->endTime = microtime(true);
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function getElapsedTime() {
        return round(($this->endTime - $this->startTime) * 1000, 2);
    }
}

function selectionSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}

// Tạo mảng ngẫu nhiên có 100,000 số
$arr = [];
for ($i = 0; $i < 100000; $i++) {
    $arr[] = mt_rand(1, 100000);
}

// Đo thời gian thực thi của thuật toán sắp xếp chọn
$stopwatch = new StopWatch();
// $stopwatch->getStartTime();
// $arr = selectionSort($arr);
// $stopwatch->getStopTime();
// $elapsedTime = $stopwatch->getElapsedTime();

// echo "Thời gian thực thi: $elapsedTime ms";
?>
