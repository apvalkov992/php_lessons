<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Starter Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <?php
            $users = [
                [
                    'login' => 'Admin',
                    'password' => 'adminPassword1234'
                ],
                [
                    'login' => 'User',
                    'password' => 'userpassword'
                ]
            ];
        ?>
        <?php
            $userLogin = htmlspecialchars( $_POST['userLogin'] );
            $userPassword = htmlspecialchars( $_POST['userPassword'] );
/*            echo $userLogin . ' ' . $userPassword;*/
            if ($userLogin && $userPassword) {
                foreach ($users as $key => $value) {
                    foreach ($value as $k => $v) { 
                        if ($value['login'] == $userLogin) {
                            if ($value['password'] == $userPassword) {
                                echo 'Добро пожаловать ' . $userLogin;
                                break;
                            }
                        }
                    }
                }
            }
        ?>
        <div class="container">
            <form action="6.php" method="post">
                Логин: <input type="text" name="userLogin">
                Пароль: <input type="password" name="userPassword">
                <input type="submit">
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>