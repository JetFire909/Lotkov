<?php
echo '<h2>Приватные свойства и наследование</h2>';

// Базовый класс User
class User {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    
    public function sayAboutMe() {
        echo "Привет! Меня зовут " . $this->getName() . "<br>";
        echo "Я пользователь.<br><br>";
    }
}

// Класс Teacher для преподавателей
class Teacher extends User {
    private $subjects;

    public function __construct($name, $subjects = []) {
        parent::__construct($name);
        $this->subjects = $subjects;
    }

    public function sayAboutMe() {
        echo "Преподаватель: " . $this->getName() . "<br>";
        echo "Предметы: " . (empty($this->subjects) ? "нет" : implode(', ', $this->subjects)) . "<br>";
        echo "Я преподаватель.<br><br>";
    }
}

// Класс Manager для администрации
class Manager extends User {
    private $position;

    public function __construct($name, $position) {
        parent::__construct($name);
        $this->position = $position;
    }

    public function sayAboutMe() {
        echo "Менеджер: " . $this->getName() . "<br>";
        echo "Должность: " . $this->position . "<br>";
        echo "Я администрация.<br><br>";
    }
}

// Создаем объекты
$people = [
    new User("Иван"),
    new User("Мария"),
    new Teacher("Петр", ["Математика", "Физика"]),
    new Teacher("Анна", ["Биология"]),
    new Manager("Ольга", "Директор"),
    new Manager("Сергей", "Заедующий кафедрой"),
    new User("Роман")
];

// Вывести всех и отсортировать по имени
usort($people, function($a, $b) {
    return strcmp($a->getName(), $b->getName());
});

echo "<h3>Все после сортировки:</h3>";
foreach ($people as $person) {
    $person->sayAboutMe();
}

// Розыгрыш
$winnerIndex = rand(0, count($people)-1);
echo "<h3>Победитель розыгрыша:</h3>";
$people[$winnerIndex]->sayAboutMe();

?>