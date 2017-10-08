<?php
/**
 * Created by PhpStorm.
 * User: elina
 * Date: 10/1/2017
 * Time: 11:31 AM
 */

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