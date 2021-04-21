<?php

namespace models;
use core\UserModel;

class User extends UserModel {

    public const IS_ADMIN = 1;
    public const IS_NOT_ADMIN = 0;

    public string $username        = '';
    public string $firstname       = '';
    public string $lastname        = '';
    public string $email           = '';
    public string $password        = '';
    public string $confirmPassword = '';
    public int $admin             = self::IS_NOT_ADMIN;

    public function save() {
        $this->admin = self::IS_NOT_ADMIN;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    } 

    public function rules(): array{
        return [
            'username'        => [self::RULE_REQUIRED, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'firstname'       => [self::RULE_REQUIRED],
            'lastname'        => [self::RULE_REQUIRED],
            'email'           => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'password'        => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }

    public static function tableName(): string {
        return 'users';
    }

    public function attributes(): array {
        return ['username', 'firstname', 'lastname', 'email', 'password', 'admin'];
    }

    public function labels() :array {
        return [
            'username'        => 'Username',
            'firstname'       => 'First name',
            'lastname'        => 'Last name',
            'email'           => 'Email ',
            'password'        => 'Password',
            'confirmPassword' => 'Confirm password',
        ];
    }

    public static function findOne($where) {
        $tableName = self::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND ", array_map(fn($attr) => "$attr =  :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");

        foreach($where as $key => $value) {
            $statement->bindValue(":$key", $value);
        }

        $statement->execute();
        return $statement->fetchObject(static::class);
    }

    public static function primaryKey(): string {
        return 'user_id';
    }

    public function getDisplayName(): string {
        return $this->username;
    }
}


?>