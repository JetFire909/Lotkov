<?php
class ZooKeeper {
    private $name;
    private $animals = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addAnimal($animal) {
        $this->animals[] = $animal;
    }

    public function printMyAnimals() {
        echo "Смотритель: {$this->name}<br>";
        if (empty($this->animals)) {
            echo "Нет животных.<br>";
        } else {
            echo "Мои животные:<br>";
            foreach ($this->animals as $animal) {
                $animal->printInfo();
            }
        }
    }
}
?>