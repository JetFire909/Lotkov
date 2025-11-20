<?php
echo '<h2>Полиморфиз</h2>';

class User {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($newName) {
        if ($newName) {
            $this->name = $newName;
            return true;
        }
        return false;
    }
}

class Teacher extends User {
    private $subjects; 

    public function __construct($name, $subjects = []) {
        parent::__construct($name);
        $this->subjects = $subjects;
    }

    public function getSubjects() {
        return $this->subjects;
    }

    public function sayAboutMe() {
        echo "<strong>Преподаватель:</strong> " . $this->getName() . "<br>";
        echo "Предметы: " . (empty($this->subjects) ? "Нет предметов" : implode(', ', $this->subjects)) . "<br>";
        echo "Кем он является: преподаватель<br><br>";
    }
}

class Manager extends User {
    private $position; 
    private $jobDuties; 

    public function __construct($name, $position, $jobDuties = []) {
        parent::__construct($name);
        $this->position = $position;
        $this->jobDuties = $jobDuties;
    }

    public function getPosition() {
        return $this->position;
    }
    public function getJobDuties() {
        return $this->jobDuties;
    }

    public function sayAboutMe() {
        echo "<strong>Менеджер:</strong> " . $this->getName() . "<br>";
        echo "Должность: " . $this->position . "<br>";
        echo "Обязанности: " . (empty($this->jobDuties) ? "Нет обязанностей" : implode(', ', $this->jobDuties)) . "<br>";
        echo "Кем он является: <br><br>";
    }
}

$persons = [
    new User("Александр"),
    new Teacher("Профессор Семенов", ["Математика", "Физика"]),
    new Teacher("Доктор Иванова", ["История", "Обществознание"]),
    new Manager("Ольга", "Заведующая кафедрой", ["организация работы кафедры", "контроль за учащимися"]),
    new User("Михаил")
];

function userSayAboutMe($user) {
    echo "<strong>Пользователь:</strong> " . $user->getName() . "<br>";
}


foreach ($persons as &$p) {
    if ($p instanceof Teacher || $p instanceof Manager) {
        $p->sayAboutMe();
    } else {
        userSayAboutMe($p);
        echo "Кем он является: пользователь<br><br>";
    }
}

usort($persons, function($a, $b) {
    return strcmp($a->getName(), $b->getName());
});

echo "<h3>Отсортированный список по имени:</h3>";
foreach ($persons as $person) {
    if ($person instanceof Teacher || $person instanceof Manager) {
        $person->sayAboutMe();
    } else {
        userSayAboutMe($person);
        echo "Кем он является: пользователь<br><br>";
    }
}

$winnerIndex = rand(0, count($persons) -1);
$winner = $persons[$winnerIndex];

echo "<h3>Победитель розыгрыша:</h3>";
if ($winner instanceof Teacher || $winner instanceof Manager) {
    $winner->sayAboutMe();
} else {
    userSayAboutMe($winner);
}
?>