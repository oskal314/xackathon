<?php 

$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$role = filter_var(trim($_POST['role']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5 || mb_strlen($login)>90) {
    echo "Недопустимая длина логина"
    exit();
} else if (mb_strlen($name)<10 || mb_strlen($name)>50) {
    echo "Недопустимая длина ФИО"
    exit();
}else if (mb_strlen($pass)<2 || mb_strlen($pass)>6) {
    echo "Недопустимая длина пароля (от 2 до 6 символов)"
    exit();
}

$pass=md5($pass."fghsgfsuh4321");

$mysql=new mysqli('localhost','root','root','webpractik');
$mysql->query("INSERT INTO 'users'('name','login','pass','role')
VALUES('$name','$login','$pass','$role')");

$mysql->close();

header('Location: /');

?>