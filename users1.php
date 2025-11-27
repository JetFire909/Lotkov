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
    private $subjects; 

    public function __construct($name, $subjects = [], ) {
        parent::__construct($name);
        $this->subjects = $subjects;
    }

    public function getSubjects() {
        return $this->subjects;
    }

    public function sayAboutMe() {
        echo "<strong>Преподаватель:</strong> " . $this->getName() . "<br>";
        echo "Предметы: " . ($this->subjects) . "<br>";
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
    $users[] = new Teacher($teacher['Name'], $teacher['Subjects']);
}

foreach ($managers as $manager) {
    $users[] = new Manager($manager['Name'], $manager['Position']);
}

array_map(function($user) {
    $user->sayAboutMe();
}, $users);


$json1 = file_get_contents('users1.json');
$array1 = json_decode($json1, true);
$user1 = $array1['users'];
$objUser = [];
foreach($user1 as $user2){
    if($user2['type'] == 'Student'){
        $objUser[] = new Student($user2['name'], $user2['group'] );
    }
    elseif($user2['type'] == 'Teacher'){
        $objUser[] = new Teacher($user2['name'], $user2['subjects']);
    }
    elseif($user2['type'] == 'Manager'){
        $objUser[] = new Manager($user2['name'], $user2['position']);
    }
}
foreach($objUser as $user){
    echo $user->sayAboutMe();
}
?>

