<?php
/**
 * Created by PhpStorm.
 * User: elina
 * Date: 10/1/2017
 * Time: 11:09 AM
 */
print_r($_POST);

$link = mysqli_connect("localhost","root","","inet-shop") or die("no connection");
$query = "INSERT into users (login, `password`) VALUES ('$_POST[login]', '$_POST[password]');";
mysqli_query($link, $query);
//добавить проверки 1. на пустые строки, 2. проверка выполнился запрос или нет, 3. добавить в регистр html в форме проверочный пароль, 4. проверять, что они совпадают (+JS)

mysqli_close($link);