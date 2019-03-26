<?php

class User
{
    public $users;

    function addUser($id, $login, $email, $password)
    {
        $this->users[$id] =
            [
            'login'=> $login,
            'email' => $email,
            'password' => hash('sha256', $password),
            ];
    }
}