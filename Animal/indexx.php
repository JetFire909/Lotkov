<?php

require_once('Animal.php');
require_once('Bird.php');
require_once('Milkeater.php');
require_once('NotFlyBird.php');
require_once('User.php');

$animals  = [];

$sparrow = new Bird(10, 100, 'Воробей', 50);
$animals [] = $sparrow;
$ant = new Animal(3,10,'Муравей');
$animals [] = $ant;
$monkey = new Milkeater(50, 40, 'Мартышка');
$animals [] = $monkey;
$penguin = new NotFlyBird(50,40, 'Пингвин', 100);
$animals [] = $penguin;

$user1 = new User('Марат');
$user1->addAnimal($sparrow);
$user1->addAnimal($monkey);
$user1->sayHello();