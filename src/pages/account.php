<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Панель пользователя</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/font.css">
  <link rel="stylesheet" href="../css/style.min.css">
</head>

<body>
  <section class="block-menu">
    <div class="container-sm">
      <div class="block-menu-bg">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item-user nav-item nav-link active" href="user.php">Главная</a>
                <a class="nav-item-user nav-item nav-link" href="#">Новости</a>
                <a class="nav-item-user nav-item nav-link" href="#">Расписание</a>
                <a class="nav-item-user nav-item nav-link" href="#">Связь с ректором</a>
                <a class="nav-item-user nav-item nav-link" href="account.php">Личный кабинет</a>
              </div>
            </div>

          </div>

        </nav>
      </div>
      <div class="block-menu-vuz"></div>
    </div>
  </section>

  <form class="answer-input-div" method="post" action="<?= $_SERVER['PHP_SELF'] ?>" <?php if ($_SESSION['count'] == 5) echo "style='display:none;'"; ?>>
    <input type="text" required name="answer" placeholder="Введите ответ в это поле" class="answer-input">
    <button class="answer-button" type="submit">Проверить</button>
  </form>
  <?php
  $answerinf   = false;
  $answertrue  = 33;
  $usersanswer = $_POST['answer'];
  $istinnost   = "Нет";
  $i = 0;
  if ($usersanswer == $answertrue) {
    $answerinf = true;
  } else {
    $_SESSION['count']++;
  }
  if ($answerinf == True) {
    $istinnost = "Да";
  }
  ?>
  <h2>Попыток: <?php echo "{$_SESSION['count']}" ?>/5.</h2>
  <h2>Решение: <?php echo "$istinnost" ?>.</h2>


  <script src="../js/script.js"></script>


</body>

</html>