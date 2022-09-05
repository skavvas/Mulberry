<?php

class Person{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->hp = 100;
    $this->mother = $mother;
    $this->father = $father;

  }
      function sayHi($name) {
        return "Hi $name, I`m ".$this -> name;         
    }
    function setHp($hp) {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp() {
        return $this->hp;
    }
    function getName() {
        return $this->name;
    }
    function getLastname() {
        return $this->lastname;
    }
    function getAge() {
        return $this->age;
    }
    function getMother() {
        return $this->mother;
    }
    function getFather() {
        return $this->father;
    }
    function getInfo() {

         return "<h3> A few words about myself and family </h3><br>"."My name is ".$this->getName().". " ."My lastname is ".$this->getLastname().". "."I am ".$this->getAge()." years old"."."."<br>".
        "My mothers name is ".$this->getMother()->getName().". "."She is ".$this->getMother()->getAge()." years old"."."."<br>".
        "Her dad. My grandfather and his name is ".$this->getMother()->getFather()->getName().", "."
        and his wife ".$this->getMother()->getMother()->getName()."."."<br>"."<br>".
        
        "My dad name is ".$this->getFather()->getName()." and his parents, grandfather ".$this->getFather()->getFather()->getName()." and grandmother ".$this->getFather()->getMother()->getName().".";
    }
}

// $medKit = 50;
$igor = new Person("Igor", "Petrov", 68);
$sveta= new Person ("Sveta", "Petrova", 65);

$kirill = new Person("Kirill", "Sergeev", 72);
$tatiana= new Person ("Tatiana", "Sergeeva", 65);

$alex = new Person("Alex", "Ivanov", 42, $tatiana, $kirill);
$olga = new Person("Olga", "Ivanova", 42, $sveta, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);


echo $valera->getInfo();