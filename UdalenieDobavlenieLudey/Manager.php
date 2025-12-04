<?php 
class Manager extends User {
    public $group;
    
    public function __construct($name, $position, $email = "") {
        parent::__construct($name, $email, "менеджер");
        $this->position = $position;
    }
    
    public function sayAboutMe() {
        echo "Студент: {$this->name}<br>";
        echo "должность: {$this->position}<br>";
        if (!empty($this->email)) {
            echo "Email: {$this->email}<br>";
        }
    }
}