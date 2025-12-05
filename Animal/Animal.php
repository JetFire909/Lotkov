<?php
class Animal {
    // private $name;
    // private $specias; 

    public function __construct(public $name = '', public $species = '') {
        $this->name = $name;
        $this->species = $species;
    }

    // public function __construct(public $height = 80 ,public $weight = 50,public $type = 'Тигр'){
    //     $this->height = $height;
    //     $this->weight = $weight;
    //     $this->type = $type;

    // }

    public function sayHello(){
        echo "<br>Привет! Я $this->type ";
    }

    public function printInfo() {
        echo "$this->species . $this->name <br>";
    }
}
     
