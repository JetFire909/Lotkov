<?php

class User{
    private $name;
    private $animals = [];
    public function __construct($name){
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($newName){
        if($newName){
            $this->name = $newName;
            return true;
        }
        return false;
    }

public function sayHello(){
    echo "Меня зовут: $this->name <br>";
    echo "Мои животные:";
    foreach($this->animals as $animal){
        echo $animal->sayHello(),'<br>';
    }
    }

    public function addAnimal($animal){
        $this->animals[] = $animal;
    }

// public static function about($animal){
//     return $animal->type;
// }
}