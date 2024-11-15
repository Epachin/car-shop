<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Контакты</title>
</head>
<body>
    <header>
        <h1>Контактная информация</h1>
        <nav>
            <a href="Index.php">Главная</a>
            <a href="products.php">Товары</a>
            <a href="contact.php">Контакты</a>
        </nav>
    </header>

    <main>
        <section class="contact-info">
            <h2>Свяжитесь с нами</h2>
            <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
            <p><strong>Адрес:</strong> г. Москва, ул. Классная, д. 1</p>
            <p><strong>Электронная почта:</strong> info@carигн.ru</p>
            <p><strong>Слоган:</strong> "Ваш надежный партнер в выборе автомобиля"</p>
        </section>

        <div id="map" style="width: 500px;height:350px;"></div>

        <section class="contact-form">
            <h2>Оставьте сообщение</h2>
            <form action="message.php" method="post">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Отправить</button>
            </form>
        </section>
    </main>
    
    <footer>
        <p>© 2024 Автосалон. Все права защищены.</p>
    </footer>

    <script src="amp.js"></script>
</body>
</html>
