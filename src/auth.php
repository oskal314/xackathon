<?php
$login = filter_var(
    trim($_POST['login']),
);
$password = filter_var(
    trim($_POST['password']),

);
if (mb_strlen($name)== "admin" || mb_strlen($password) =="admin"){
    header('Location: admin.php');
    exit();
}

$pass = md5($password. "fghsgfsuh4321");

$mysql = new mysqli('localhost', 'root', '', 'webpractik');

$result = $mysql->query("SELECT * FROM `authorizate` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}


setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: /');
