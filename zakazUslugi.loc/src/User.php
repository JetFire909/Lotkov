<?php
namespace src;

use src\exceptions\InvalidArgumentException;
use src\Entity;

class User extends Entity {

    protected string $login;
    protected string $email;
    protected string $password;
    protected string $role; 
    protected string $name;
    protected string $rating;


    protected bool $isGuest = true;
    protected bool $isAdmin = false;

    public string $tableName = 'users';

    public function getLogin(): string {
        return $this->login ?? '';
    }

    public function getEmail(): string {
        return $this->email ?? '';
    }

    public function getName(): string {
        return $this->name ?? '';
    }

    public function isGuest(): bool {
        return $this->isGuest;
    }

    public function isAdmin(): bool {
        return $this->isAdmin;
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

        $fields = [
            'username' => $this->login,
            'email' => $this->email,
            'password' => $this->password,
            'role' => $this->role,
            'name' => $this->name
        ];

        return $this->insert($fields);
    }
}
?>
   