<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>

  <div class="login-container">
    <div class="login-form">        
        <h2>Вход</h2>
        <form action="lib/login.php" method="post">
            <input type="text" name="username" placeholder="Имя пользователя" required>
            <input type="password" name="password" placeholder="Пароль" required>
            <button type="submit">Войти</button>
        </form>
        
        <a href="reg.php">Нету аккаунта? Зарегистируютесь</a >
    </div>
</div>
</body>
</html>
