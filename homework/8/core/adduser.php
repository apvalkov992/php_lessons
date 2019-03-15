<?php
//require_once ("cookie.php");
//require_once ("session.php");

$users = [];
$users['nickName'] = $_POST['nickName'];
$users['email'] = $_POST['email'];
$users['password'] = $_POST['password'];
;
session_start();
//var_dump($_SESSION);

if ($_POST["sessionOrCookie"] == "session") {
    $_SESSION['key users'] = $users;
    echo '<pre>';
    print_r($_SESSION['key users'] );
    echo '</pre>';
}
else{

    setcookie('users', json_encode($users), time()+60);
    print_r( json_decode(cookieGet('users')));

}

function cookieGet(string $key)
{
    if (isset($_COOKIE[$key])) {
        return $_COOKIE[$key];
    }

    return null;
}

?>