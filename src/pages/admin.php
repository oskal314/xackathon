<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Панель администратора</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/font.css">
  <link rel="stylesheet" href="../css/style.min.css">
</head>

<body>
  <section class="block-menu">
    <div class="container-sm">
      <div class="block-menu-bg">
        <a href="../index.html" class="block-menu-glav">На главную</a>
        <h1 class="block-menu-h1">администратор</h1>
        <div class="block-menu-flex-fb">
          <div class="block-menu-flex-fb-width">
            <img class="block-menu-img" src="../icons/admin/Subtract.png" alt="новости">
            <a href="#" class="block-menu-flex-p">Новости</a>
          </div>
          <div class="block-menu-flex-fb-width">
            <img class="block-menu-img" src="../icons/admin/Subtrac3.png" alt="расписание">
            <a href="#" class="block-menu-flex-p">Расписание занятий</a>
          </div>
        </div>
        <div class="block-menu-flex-sb">
          <div class="block-menu-flex-sb-width">
            <img class="block-menu-img" src="../icons/admin/Subtract2.png" alt="Зарегистрированные пользователи">
            <a href="#reg" class="block-menu-flex-p">Зарегистрированные <br>
              пользователи</a>
          </div>
          <div class="block-menu-flex-sb-width">
            <img class="block-menu-img" src="../icons/admin/Subtract4.png" alt="обращение к ректору">
            <a href="#" class="block-menu-flex-p">Обращение к ректору</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="block-list">
    <div class="container-sm">
      <div class="block-menu-bg">
        <h1 class="block-list-h1">Расписание занятий</h1>
        <div class="block-list-fl">
          <div class="block-list-fio">
            <h1 class="form-control-authorization">Расписание занятий</h1>
            <form action="../index.html" method="post" enctype="multipart/form-data">
              <input type="file" name="name_file">
              <input type="submit" value="Отправить файл">
            </form>

          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="reg" class="block-registr">
    <div class="container-sm">
      <div class="block-menu-bg">
        <h1 class="block-list-h1">Список зарегистрированных пользователей</h1>
        <div class="block-list-fl">
          <div class="block-list-fio">
            <?php
            $mysql = new mysqli('localhost', 'root', '', 'webpractik');
            $result = $mysql->query("SELECT * FROM `users`");
            while ($users = mysqli_fetch_assoc($result)) {
            ?>
              <div class="block-list-fio"><?php
                                          echo $users['name'];
                                          echo "___";
                                          echo $users['id_role']; ?>
              </div>

            <?php
            }
            ?>

          </div>

        </div>
      </div>
    </div>
  </section>




  <script src="../js/script.js"></script>
</body>

</html>