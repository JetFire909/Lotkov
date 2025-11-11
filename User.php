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
$res = $user1->setName ('Паровозик Томас');
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
}

$user1 = new Users("Иван", "Петров; ", "ivan.petrov@gmail.com");
$user1->sayAboutMe(); 
echo "Email: " . $user1->getEmail();
?>


