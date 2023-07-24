<?php
class Country {
    public $name;
    public $totalGoldMedals;
    function __construct($name, $totalGoldMedals) {
      $this->name = $name;
      $this->totalGoldMedals = $totalGoldMedals;
    }
  }
  function sortCountriesByGoldMedals($countries) {
    $n = count($countries);
    for ($i = 0; $i < $n - 1; $i++) {
      for ($j = $i + 1; $j < $n; $j++) {
        if ($countries[$j]->totalGoldMedals > $countries[$i]->totalGoldMedals) {
          $temp = $countries[$i];
          $countries[$i] = $countries[$j];
          $countries[$j] = $temp;
        }
      }
    }
    return $countries;
  }
  $countries = [
    new Country("Mỹ", 39),
    new Country("Trung Quốc", 38),
    new Country("Nga", 27),
    new Country("Anh", 22),
    new Country("NhậtBản", 20),
    new Country("Australia", 17),
    new Country("Brazil", 10),
    new Country("Đan Mạch", 9),
    new Country("Pháp", 8),
    new Country("Thụy Điển", 8)
  ];
  $countries = sortCountriesByGoldMedals($countries);
  foreach ($countries as $country) {
    echo $country->name . ": " . $country->totalGoldMedals . " Huy chương vàng" . PHP_EOL. "<br>";
  }