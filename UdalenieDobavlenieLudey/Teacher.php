<?php 
class Teacher extends User {
    public $subjects;
    
    public function __construct($name, $subjects, $email = "") {
        parent::__construct($name, $email, "преподователь");
        $this->subjects = $subjects;
    }
    
    public function sayAboutMe() {
        echo "Преподователь: {$this->name}<br>";
        echo "Предметы: {$this->subjects}<br>";
        if (!empty($this->email)) {
            echo "Email: {$this->email}<br>";
        }
    }
}