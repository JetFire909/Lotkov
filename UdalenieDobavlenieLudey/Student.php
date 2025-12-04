<?php 
class Student extends User {
    public $group;
    
    public function __construct($name, $group, $email = "") {
        parent::__construct($name, $email, "студент");
        $this->group = $group;
    }
    
    public function sayAboutMe() {
        echo "Студент: {$this->name}<br>";
        echo "Группа: {$this->group}<br>";
        if (!empty($this->email)) {
            echo "Email: {$this->email}<br>";
        }
    }
}