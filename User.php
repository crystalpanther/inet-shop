<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 26.10.2017
 * Time: 15:13
 */
class User {
    public function signIn() {
        $link = @mysqli_connect("localhost","root","","inet-shop") or die("no connect");

        $query = "SELECT * FROM `users` WHERE login='$_POST[login]' AND `password`='$_POST[password]';";

        $result = @mysqli_query($link, $query);

        if(mysqli_num_rows($result) == 0) {
            print_r($_POST);
            echo "Неверный логин или пароль";
        }
        else {
            session_start();
            $_SESSION['user'] = true;
        }
        mysqli_close($link);
    }
    public function signOut() {
        session_start();
        unset($_SESSION['user']);
    }
    public function signUp() {
        print_r($_POST);

        $link = @mysqli_connect("localhost","root","","inet-shop") or die("no connection");
        $query = "INSERT into users (login, `password`) VALUES ('$_POST[login]', '$_POST[password]');";
        mysqli_query($link, $query);

//добавить проверки
// 1. на пустые строки,
// 2. проверка выполнился запрос или нет,
// 3. добавить в регистр html в форме проверочный пароль,
// 4. проверять, что они совпадают (+JS)

        mysqli_close($link);
    }
    public function isSignIn($login, $password) {
       if (empty($login) || empty($password)) {
           echo "Вы не ввели логин или пароль <br>";
           return 0;
       }
    }
}