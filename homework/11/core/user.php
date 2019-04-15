<?php


class user
{

    protected $email;

    protected $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function __destruct()
    {
        echo '<pre>';
        echo 'Здесь отрабатывает метод __destruct для класса user';
        echo '</pre>';
    }
}

$user = new user('i.slizh.garik@gmail.com', 123456789);

echo '<pre>';

print_r($user);