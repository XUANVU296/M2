<?php
class Person {
    public $name;
    private $age;
  
    public function __construct($name1, $age1) {
      $this->name = $name1;
      $this->age = $age1;
    }
    public function getName() {
      return $this->name;
    }
    public function getAge() {
      return $this->age;
    }
    public function setName($name) {
      $this->name = $name;
    }
    public function setAge($age) {
      $this->age = $age;
    }
  }
  // Sử dụng lớp Person
  $person = new Person("hoang", 11);
 $person->setAge(12); 

 echo $person->getAge(); 

// $person->setName("hung");
//  $person->getName();
//  $person->setAge(12);
//   echo $person->getAge();
//   echo $person->name;
 