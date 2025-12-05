<?php
class Zoo {
    private $name;
    private $zooKeepers = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addKeeper($zooKeeper) {
        $this->zooKeepers[] = $zooKeeper;
    }

    public function printZoo() {
        echo "Зоопарк: {$this->name}<br>";
        foreach ($this->zooKeepers as $keeper) {
            $keeper->printMyAnimals();
        }
    }
}
?>