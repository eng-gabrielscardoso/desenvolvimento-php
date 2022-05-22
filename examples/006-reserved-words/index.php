<?php

# This lines use some reserved words to describe errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

# This reserverd words is used to make a class
class Person {
  private string $name;
  private int $age;
  private string $email;

  public function __construct(
    string $name,
    int $age,
    string $email
  ) {
    $this->setName($name);
    $this->setAge($age);
    $this->setEmail($email);
  }

  public function getName() {
    return $this->name; 
  }

  public function getAge() {
    return $this->age;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setAge($age) {
    $this->age = $age;
  }

  public function setEmail($email) {
    $this->email = $email;
  }
}

# The following lines are used to instantiate a new instance of class Person
$Gabriel = new Person(
  "Gabriel Santos Cardoso",
  20,
  "eng.gabrielscardoso@gmail.com"
);

# The following lines are used to use methods and attributes of a new instance of class Person
echo $Gabriel->getName();
echo "<br />";
echo $Gabriel->getAge();
echo "<br />";
echo $Gabriel->getEmail();

?>