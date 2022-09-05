<?php
class Animal
{
  private $nickname;
  private $age;
  private $breed;
  function __construct($n,$a,$b,)
  {
$this->nickname =$n;
$this->age =$a;
$this->breed =$b;
  }
function getNickname(){
  return $this->nickname;
}
private: $nickname;