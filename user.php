<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Кабинет пользователя</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
    <header>
        <nav>
            <a href="Index.php">Главная</a>
            <a href="products.php">Товары</a>
            <a href="contact.php">Контакты</a>
            <a href="enter.php">Войти</a>
            <a href="register.php">Регистрация</a>
    </header>
<body>

  <div class="login-container">
    <div class="login-form">        
        <h2>Кабинет пользователя</h2>
        <p>Привет: <?=$_COOKIE['username']?>.</p>
        
</body>
</html>
