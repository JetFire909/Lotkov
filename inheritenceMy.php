<?php
echo '<h2>Приватные свойства</h2>';

class User{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    // public function setName($newName){
    //     $this->name = $newName;
    // }

    public function setName($newName){
        if($newName){
            $this->name = $newName;
            return true;
        }
        return false;
    }

}
$user1 = new User ('Воучик');
$res = $user1->setName ('Томас');
echo $res ? 'Имя изменено' : 'Имя не изменено';
?>
<p><?= $user1->getName() ?></p>

<?php
echo '<h2>Задание 1</h2>';

class Users {

    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function sayAboutMe() {
        echo "Имя фамилия: " . $this->firstName . " " . $this->lastName;
    }


    private function isNameCorrect($lastName) {
        return strlen($lastName) <= 128;
    }
        public function isEmailCorrect($email) {
        if (strpos($email, '@') == false || strpos($email, '.') == false) {
            return false;
        }
                $atPosition = strpos($email, '@');
        $lastDotPosition = strrpos($email, '.');

        return $lastDotPosition > $atPosition;
        }

         public function setFirstName($firstName) {
        if ($this->isNameCorrect($firstName)) {
            $this->firstName = $firstName;
            return true;
        }
        return false;
    }
    public function setLastName($lastName) {
        if ($this->isNameCorrect($lastName)) {
            $this->lastName = $lastName;
            return true;
        }
        return false;
    }

    public function setEmail($email) {
        if ($this->isEmailCorrect($email)) {
            $this->email = $email;
            return true;
        }
        return false;
    }
}

$user1 = new Users("Иван", "Петров; ", "ivan.petrov@gmail.com");
$user1->sayAboutMe(); 
echo "Email: " . $user1->getEmail();


echo '<h2>Задание 2 и 3</h2>';
echo "Проверка:"; 
echo "<br>Слишком длинного имени: " . ($user1->setFirstName(str_repeat("", 129)) ? "Нет ошибки" : "Ошибка");
echo "<br>Корректного email (без @): " . ($user1->setEmail("ivan.petrov@gmail.com") ? "Нет ошибки" : "Ошибка");
echo "<br>Корректного email (точка до @): " . ($user1->setEmail("ivanpetrov@gmail.com") ? "Нет ошибки" : "Ошибка");

echo "<h3>Пользователь 1 (корректный):</h3>";
$user1 = new Users("Павел", "Лотков, ", "pashok2008@gmail.com");
$user1->sayAboutMe();
echo "Email: " . $user1->getEmail() . "<br>";
echo "<h3>Пользователь 2 (с ошибками):</h3>";
$user2 = new Users(
    str_repeat("Арик", 1),           
    "Аристарх, ",                       
    "invalid.email@com"            
);

$user2->sayAboutMe();
echo "Email: " . $user2->getEmail() . "<br>";

?>


