<?php
namespace src;

use src\exceptions\InvalidArgumentException;
use src\Entity;

class User extends Entity {
    protected string $tableName = 'user';

    public ?string $login = '';
    public ?string $email = '';
    public ?string $password = '';
    public ?string $role = ''; 
    public ?string $name = '';
    public ?string $phone = 'user';


    public bool $isGuest = true;
    public bool $isAdmin = false;

    public function getLogin(): ?string 
    {
        return $this->login ?? '';
    }

    public function getName(): ?string 
    {
        return $this->name ?? '';
    }

    public function getEmail(): ?string 
    {
        return $this->email ?? '';
    }

    public function getPhone(): ?string 
    {
        return $this->email ?? '';
    }

    public function loadFromForm(array $fields): void {
        $this->load($fields);
    }

    public function validate(): void {

        if (empty($this->login)) {
            throw new InvalidArgumentException('Не передан логин');
        }
        if (empty($this->email)) {
            throw new InvalidArgumentException('Не передан email');
        }
        if (empty($this->name)) {
            throw new InvalidArgumentException('Не передан ФИО');
        }
        if (empty($this->password)) {
            throw new InvalidArgumentException('Не передан пароль');
        }
        // if (empty($this->confirm_password)) {
        //     throw new InvalidArgumentException('Повторите пароль');
        // }

        if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $this->login)) {
            throw new InvalidArgumentException('Логин должен содержать от 3 до 20 символов латиницы или цифр');
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Неверный формат email');
        }

        if (!preg_match('/^[а-яА-Я\-]+\s[а-яА-Я\-]+(\s[а-яА-Я\-]+){0,1}$/u', $this->name)) {
            throw new InvalidArgumentException('Неверный формат ФИО (Введите Имя Фамилия Отчество)');
        }

        if (mb_strlen($this->password) < 6) {
            throw new InvalidArgumentException('Пароль должен быть не менее 6 символов');
        }
    }

    public function save(): bool {
        $name = addslashes($this->name ?? '');
        $login = addslashes($this->login ?? '');
        $email = addslashes($this->email ?? '');
        $phone = addslashes($this->phone ?? '');
        $password = addslashes($this->password ?? '');
        $role = !empty($this->role) ? addslashes($this->role) : 'user';

        $safePassword = addslashes($this->password ?? '');

        $fields = [
            'name' => $name,
            'login' => $login,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'role' => $role
        ];

        $result = $this->insert($fields);

        if ($result){
            $this->isGuest = false;
            if ($this->role === 'admin'){
                $this->isAdmin = true;
            }
        }
        return $result;
    }
}
?>
   