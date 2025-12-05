<?php

require_once('Animal.php');
require_once('Bird.php');
require_once('Milkeater.php');
require_once('NotFlyBird.php');
require_once('User.php');

// require_once('ZooKeeper');
// require_once('Zoo');

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



require_once ('ZooKeeper.php');
require_once ('Animal.php');
require_once ('Zoo.php');

$lion = new Animal('Лев');
$tiger = new Animal('Тигр');
$Elephant = new Animal('Слон');
$Giraffe = new Animal('Жираф');
$zebra = new Animal('Зебра');
$panda = new Animal('Панда');

$zookeeper1 = new ZooKeeper('Джек');
$zookeeper1->addAnimal($lion);
$zookeeper1->addAnimal($tiger);
echo '<br>';
$zookeeper2 = new ZooKeeper('Грю');
$zookeeper2->addAnimal($Elephant);
$zookeeper2->addAnimal($Giraffe);

$zookeeper3 = new ZooKeeper('Томпсон');
$zookeeper3->addAnimal($zebra);
$zookeeper3->addAnimal($panda);

$zoo = new Zoo('Большой зоопарк');
$zoo->addKeeper($zookeeper1);
$zoo->addKeeper($zookeeper2);
$zoo->addKeeper($zookeeper3);

$zoo->printZoo();
