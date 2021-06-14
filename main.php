<?php
require_once("Animal.php");
require_once("Cat.php");
 
$pet = new Cat();  // （1）
$pet->setName("クロ");  // （2）
print($pet->getName()."の鳴き声は".$pet->call());
