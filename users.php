<?php

class User{
    private $name;
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
    }
}

class Student extends User{
    private $group;
    public function __construct($name, $group = []) {
        parent::__construct($name);
        $this->group = $group;
    }

    public function getGroup() {
        return $this->group;
    }

    public function sayAboutMe() {
        echo "<strong>Студент:</strong> " . $this->getName() . "<br>";
        echo "Группа: " . ($this->group) . "<br>";
    }
}

class Teacher extends User {
    private $subject; 

    public function __construct($name, $subject = []) {
        parent::__construct($name);
        $this->subject = $subject;
    }

    public function getSubjects() {
        return $this->subject;
    }

    public function sayAboutMe() {
        echo "<strong>Преподаватель:</strong> " . $this->getName() . "<br>";
        echo "Предметы: " . ($this->subject) . "<br>";
    }
}

class Manager extends User {
    private $position; 

    public function __construct($name, $position = []) {
        parent::__construct($name);
        $this->position = $position;
    }

    public function getPosition() {
        return $this->position;
    }
    public function sayAboutMe() {
        echo "<strong>Менеджер:</strong> " . $this->getName() . "<br>";
        echo "Должность: " . ($this->position) . "<br>";
}
}



$json = file_get_contents('users.json');
$array = json_decode($json, true);

$teachers = $array['teachers'];
$students = $array['students'];
$managers = $array['managers'];

$users = [];
foreach ($students as $student) {
    $users[] = new Student($student['Name'], $student['Group']);
}

foreach ($teachers as $teacher) {
    $users[] = new Teacher($teacher['Name'], $teacher['Subject']);
}

foreach ($managers as $manager) {
    $users[] = new Manager($manager['Name'], $manager['Position']);
}

foreach ($users as $user){
    $user->sayAboutMe();
}

?>