<?php
    namespace models;

use core\Application;
use core\Model;

    class LoginForm extends Model {

        public string $username = '';
        public string $password = '';

        public function rules(): array {
            return [
                'username' => [self::RULE_REQUIRED],
                'password' => [self::RULE_REQUIRED]
            ];
        }

        public function login() {
            $user = User::findOne(['username' => $this->username]);
            if (!$user) {
                $this->addError('username', 'Пользователя с таким логином не существует!');
                return false;
            }

            if (!password_verify($this->password, $user->password)) {
                $this->addError('password', 'Пароль введен неверно!');
                return false;
            }

            return Application::$app->login($user);
        }

        public function labels(): array {
            return [
                'username' => 'Логин',
                'password' => 'Пароль'
            ];
        }

    }

?>