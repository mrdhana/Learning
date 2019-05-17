<?php

class Person {
  private $name;

  public function getName() {
    return $this->name;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

  public function sayHi() {
    echo "Hi";
  }
}

class Developer extends Person {

  public function work() {
    echo 'Coding!' . PHP_EOL;
  }

  public function sayHi() {
    parent::sayHi();
    echo "I'm a developer." . PHP_EOL;
  }

}

class Designer extends Person {

  public function work() {
    echo 'Designing!' . PHP_EOL;
  }

  public function sayHi() {
    parent::sayHi();
    echo "I'm a designer." . PHP_EOL;
  }

}

$programmer = new Developer();
$programmer->sayHi(); // Hi I'm a developer.
$programmer->work(); // Coding!

$designer = new Designer();
$designer->sayHi(); // Hi I'm a designer.
$designer->work(); // Designing!
