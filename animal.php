<?php

class Animal
{

    // public $height;
    // public $weight, $type;

    public function __construct(public $height = 80 ,public $weight = 50,public $type = 'Тигр'){
        $this->height = $height;
        $this->weight = $weight;
        $this->type = $type;
    }
    // public function __destruct()
    // {
    //     echo  "";
    // }
    public function say(){
        return "rrrrrrrrrrrrr";
    }
    public function sayHello(){
        echo "Склонитесь перед царем зверей!";
    }
} 

$animal = new Animal(50, 80, 'Лев');
// $animal->type = 'Лев';
// $animal->height = 60;
// $animal->weight = 80;
var_dump ($animal);
?>

<p>Рост: <?= $animal->height ?></p>
<p>Вес: <?= $animal->weight ?></p>
<p>Тип: <?= $animal->type ?></p>
<p>Царь зверей говорит: <?= $animal->say() ?></p>
<p>Царь зверей говорит: <?php $animal->sayHello(); ?></p>

<?php
echo '<h2>Задание 1</h2>';
class User{
    public $firstName;   
    public $lastName;   
    public $email;   
    public function  sayAboutMe(){
        echo "Имя и фамилия: " . $this->firstName . $this->lastName;
}
}
$newUser = new User();
$newUser->firstName = "Александр Македонский и ";
$newUser->lastName = "Даниил Гусаров";
?>
<p><?=$newUser -> sayAboutMe() ?></p>

<?php
echo '<h2>Задание 2</h2>';
class Car{
    public $brand;
    public $model;
    public $type;
    public $color;
    public $weight;
    public function getWeight(){
        return "Вес автомобиля: " . $this->weight;
}
    public function getInfo(){    
        return "Информаци о модели: ". $this->brand ."". $this->model ;
    }
}
$newcar = new Car();
$newcar->brand = "Porsche ";
$newcar->model = "911 GT3 RS ";
$newcar->type = "Купе ";
$newcar->color = "black ";
$newcar->weight = "1450 кг ";
?>
<p><?=$newcar -> getInfo() ?></p>
<p><?=$newcar -> getWeight() ?></p>

<?php
echo '<h2>Задание 3</h2>';
class Cars{
    public $model;
    public $price;
    public function getPrice(){
        return $this->price ;
    }
    public function getModel(){
        return $this->model ;
}
}

$newcar1 = new Cars();
$newcar1->model  = "Taycan ";
$newcar1->price = "78900";

$newcar2 = new Cars();
$newcar2->model = "Cayenne ";
$newcar2->price = "86000";

$newcar3 = new Cars();
$newcar3->model = "Cayman ";
$newcar3->price = "63840";

$newcar4 = new Cars();
$newcar4->model = "Panamera ";
$newcar4->price = "102300";

$newcar5 = new Cars();
$newcar5->model = "Macan ";
$newcar5->price = "78160";

$totalPrice=$newcar1->getPrice()+$newcar2->getPrice()+$newcar3->getPrice()+$newcar4->getPrice()+$newcar5->getPrice();
?>

<p><?=$newcar1->getModel() ?> <?=$newcar1->getPrice() ?></p>
<p><?=$newcar2->getModel() ?> <?=$newcar2->getPrice() ?></p>
<p><?=$newcar1->getModel() ?> <?=$newcar3->getPrice() ?></p>
<p><?=$newcar1->getModel() ?> <?=$newcar4->getPrice() ?></p>
<p><?=$newcar1->getModel() ?> <?=$newcar5->getPrice() ?></p>
<p Общая стоимоть коллекции: ><?= $totalPrice ?>$</p>

<!-- <?php
// $a = 5;
// $b = 5;
// $a = 7;
// $b = 10;
// $animal = 5; ?>
// <p>Конец</p> -->

<?php
echo '<h2>Задание конструктор</h2>';
class Usser {
    public function __construct(public $firstName, public $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        echo "Имя и фамилия: " . $this->firstName . $this->lastName;
    }
}
$ussser = new Usser ('Александр Македонский и ' , 'Даниил Гусаров ');
?>

<?php
echo '<h2>Задание конструктор 2</h2>';
class CarxX {

}



