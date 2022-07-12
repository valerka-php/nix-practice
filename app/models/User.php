<?php

namespace App\models;

use Framework\core\BaseModel;
use Framework\helpers\Session;

class User extends BaseModel
{
    public function insertUserIntoTable(array $data): bool
    {
        $array = $this->prepareValues($data);
        $title = $array['title'];
        $value = $array['values'];
        $request = "INSERT INTO users ($title) VALUES ($value)";
        $this->pdo->query($request);

        return true;
    }

    public function checkUser(array $userData): bool|string
    {
        $login = $userData['login'];
        $email = $userData['email'];
        $request = "SELECT * FROM {$this->table} WHERE login='$login' OR email='$email'";
        $response = $this->pdo->query($request);
        if (!empty($response)) {
            $result = $response[0];
            if ($login === $result['login']) {
               return Session::setSession('message','This login already exist');
            } elseif ($email === $result['email']) {
               return Session::setSession('message','This email already exist');
            }
        }
        return true;
    }
}