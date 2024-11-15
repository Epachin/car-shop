<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>

<div class="reg-container">
  <div class="reg-form">
      <h2>Регистрация</h2>
      <form method="post" action="lib/register.php">
          <input type="text" name="username" placeholder="Имя пользователя" required>
          <input type="email" name="email" placeholder="Эл. почта" required>
          <input type="password" name="password" placeholder="Пароль" required>
          <button type="submit">Зарегистируютесь</button>
      </form>
      <a href="enter.php">Уже есть аккаунт? Войдите</a>
  </div>
</div>
</body>
</html>
