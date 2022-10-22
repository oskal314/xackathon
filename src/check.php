<?php

$name = filter_var(
    trim($_POST['name']),
   
);


$login = filter_var(
    trim($_POST['login']),
    
);
$password = filter_var(
    trim($_POST['password']),
    
);
$role = filter_var(
    trim($_POST['role']),
 
);

$email = filter_var(
    trim($_POST['email']),
     
);

  
if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
} else if (mb_strlen($name) < 10 || mb_strlen($name) > 50) {
    echo "Недопустимая длина ФИО";
    exit();
} else if (mb_strlen($password) < 2 || mb_strlen($password) > 6) {
    echo "Недопустимая длина пароля (от 2 до 6 символов)";
    exit();
}

$password = md5($password . "fghsgfsuh4321");

$mysql = new mysqli('localhost', 'root', '', 'webpractik');

$queryRole = sprintf("SELECT id_role FROM `roles` WHERE role='%s'", $role);
$resultRole = mysqli_query($mysql, $queryRole);
$id_role = null;

while($rolerows = mysqli_fetch_row($resultRole)) {
    $id_role =  $rolerows[0];
  }

if (!$resultRole) {
    echo "роль не найдена";
    exit();
}  

// создание пользователя
$mysql->query("INSERT INTO `users`(`name`,`id_role`,`email`)
VALUES( '$name', '$id_role','$email')");

$queryUser = sprintf("SELECT id FROM `users` WHERE email='%s'", $email);
$resultUser = mysqli_query($mysql, $queryUser);
$id_user = null;

while($row = mysqli_fetch_assoc($resultUser)) {
    $id_user = $row['id'];
}


    $mysql->query("INSERT INTO `authorizate`(`login`,`password`,`id_user`)
    VALUES('$login','$password', '$id_user')");


$mysql->close();

header('Location: index.html');
