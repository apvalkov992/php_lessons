<?php
require_once "database/tools.php";
var_dump($_POST);
//$fullname = $_POST['fullname'];
//var_dump(crud( "INSERT INTO test (name)VALUES('{$_POST['email']}')"));


var_dump(crud("INSERT INTO users (email, fullname, usrname, password, phone) VALUES ('{$_POST['email']}','{$_POST['fullname']}','{$_POST['usrname']}','{$_POST['password']}','{$_POST['phone']}')"));




//"INSERT INTO 'users' ('email', 'fullname', 'username', 'password', 'phone') VALUES ('{$_POST['email']}','{$_POST['fullname']}','{$_POST['username']}','{$_POST['password']}','{$_POST['phone']}')"));

   // "INSERT INTO users (email, fullname, username, password, phone) VALUES ('{$_POST['email']}','{$_POST['fullname']}','{$_POST['username']}','{$_POST['password']}','{$_POST['phone']}')"));
