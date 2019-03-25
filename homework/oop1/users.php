<?php
class users
{
    protected $fullName;
    protected $nikName;
    protected $password;
    protected $email;
    protected $phone;
    protected $age;

    public function __construct($fullName, $nikName, $password, $email,$phone,$age)
    {
        $this->fullName=$fullName;
        $this->nikName=$nikName;
        $this->password=md5($password);
        $this->email=$email;
        $this->phone=$phone;
        $this->age=$age;
    }
    public function changePassword($newPassword)
    {
        $this->password=md5($newPassword);
    }
}

$user1 = new users("Петров П. П.", "petya", 'secret123456','petya@gmail.com',1234567, 18);
var_dump($user1);
$user1->changePassword(123);
var_dump($user1);