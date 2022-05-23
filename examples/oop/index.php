<?php

class Car {
  private $name;
  private $model;
  private $country;

  public const WHELLS = 4;

  public function __construct (string $name, string $model, string $country) {
    $this->setName($name);
    $this->model = $model;
    $this->country = $country;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getModel() {
    return $this->model;
  }

  public function setModel($model) {
    return $this->model = $model;
  }

  public function getCountry() {
    return $this->country;
  }

  public function setCountry($country) {
    $this->country = $country;
  }

  public function ignition() {
    print "Motor running\n";
  }
}

$Ferrari = new Car("Ferrari", "2030 7x", "Germany");
$Ferrari->getName();

class Celta extends Car {}

$Celta = new Celta("Celta", "2022", "Brazilllllll");
$Celta->getName();

interface Bala {
  public function raxaDeSom();
}

class Fusca extends Car implements Bala {
  public function raxaDeSom() {
    return print("Ele tá de abelhão!\n");
  }
}

$Fusca = new Fusca("Fusca", "2000", "Brazilllllll");
$Fusca->raxaDeSom();

trait Humano {
  public function getSpecie() {
    return print("Homo sapiens sapiens\n");
  }
}

class Gabriel {
  use Humano;
}

$Gabriel = new Gabriel();
$Gabriel->getSpecie();

abstract class Test {
  public static function testing() {
    return print("Testing a abstract class\n");
  }

  public abstract function testingAbstractFunction();
}

Test::testing();

class Nova extends Test {
  public function testingAbstractFunction() {
    return print("Now I could use testingAbstractFunction\n");
  }
}

$Nova = new Nova();
$Nova->testingAbstractFunction();

$anonymous = new class(){
  public function blah() {
    return print("Bla blah blah\n");
  }
};

$anonymous->blah();

?>
