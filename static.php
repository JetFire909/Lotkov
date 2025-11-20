<?php

class User
{
    private $firstname;
    private $email;
    private $lastname;
    private $role; 

    private static $numberUsers = 0;

    public function __construct($firstname, $email, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->role = 'User'; 
        self::$numberUsers++;
    }

    public function GETNAME() { return $this->firstname; }
    public function GETLASTNAME() { return $this->lastname; }
    public function GETEMAIL() { return $this->email; }
    public function getRole() { return $this->role; }
    public function setRole($role) { $this->role = $role; }

    public function sayaboutme() {
        echo "Обновленная информация: " . $this->GETNAME() . " " . $this->GETLASTNAME()
            . ", email: " . $this->GETEMAIL() . ", роль: " . $this->role;
    }

    public function setname($newname) {
        if ($this->isNameCorrect($newname)) {
            $this->firstname = $newname;
            return true;
        }
        return false;
    }

    public function setemail($email) {
        if ($this->isEmailCorrect($email)) {
            $this->email = $email;
            return true;
        }
        return false;
    }

    public function setlastname($lastname) {
        if ($lastname) {
            $this->lastname = $lastname;
            return true;
        }
        return false;
    }

    private function isNameCorrect($name) {
        $length = mb_strlen($name);
        return $length > 0 && $length < 128;
    }

    private function isEmailCorrect($email) {
        $atPos = strpos($email, "@");
        $dotPos = strpos($email, ".");
        return ($atPos !== false && $dotPos !== false && $atPos < $dotPos);
    }

    public static function makeAdmin($user) {
        $user->setRole('Admin');
    }

    public static function createAdmin($firstname, $email, $lastname) {
        $admin = new User($firstname, $email, $lastname);
        $admin->setRole('Admin');
        return $admin;
    }

    public static function getnumberUsers() {
        return self::$numberUsers;
    }
}

class Student extends User
{
    private $course;
    private $group;

    private static $numberStudents = 0; 

    public function __construct($firstname, $email, $lastname, $course, $group)
    {
        parent::__construct($firstname, $email, $lastname);
        $this->course = $course;
        $this->group = $group;
        self::$numberStudents++;
    }

    public function __destruct() {
        self::$numberStudents--;
    }

    public function getcourse() { return $this->course; }
    public function getGroup() { return $this->group; }
    public function setCourse($course) {
        if ($course) {
            $this->course = $course;
            return true;
        }
        return false;
    }
    public function setGroup($group) {
        if ($group) {
            $this->group = $group;
            return true;
        }
        return false;
    }

    public function sayaboutme() {
        parent::sayaboutme();
        echo ", курс: " . $this->course . ", группа: " . $this->group;
    }

    public static function getnumberStudents() {
        return self::$numberStudents;
    }

    public static function printStudentInfo($student) {
        echo "Студент: " . $student->GETNAME() . " " . $student->GETLASTNAME() .
            ", email: " . $student->GETEMAIL() .
            ", курс: " . $student->getcourse() .
            ", группа: " . $student->getGroup() .
            ", роль: " . $student->getRole() . "<br>";
    }
}

$students = [];
$students[] = new Student("Марат", "marat@example.com", "Пэлэгин", 1, "ИВ1к-24");
$students[] = new Student("Алексей", "alex@example.com", "Петров", 2, "ИВ1к-24");
$students[] = new Student("Даниил", "daniil@example.com", "Осуждающий", 3, "ИВ1к-24");
$students[] = new Student("Дмитрий", "dmitry@example.com", "Кузнецов", 4, "ИВ1к-24");
$students[] = new Student("Алексей", "alexey@example.com", "Грокенжоер", 5, "ИВ1к-24");

echo "Количество студентов: " . Student::getnumberStudents() . "<br>";

unset($students[1]);
unset($students[3]);

echo "Количество студентов после отчисления: " . Student::getnumberStudents() . "<br>";

foreach ($students as $student) {
    if ($student instanceof Student) {
        Student::printStudentInfo($student);
    }
}

if (isset($students[0])) {
    User::makeAdmin($students[0]);
}

$adminUser = User::createAdmin("Admin", "admin@gmail.com", "Adminov");

if (isset($students[0])) {
    echo "<p>Роль студента 1: " . $students[0]->getRole() . "</p>";
}
echo "<p>Роль нового администратора: " . $adminUser->getRole() . "</p>";

echo "Общее количество пользователей (Student): " . User::getnumberUsers() . "<br>";
echo "Общее количество студентов (после отчисления): " . Student::getnumberStudents() . "<br>";
?>