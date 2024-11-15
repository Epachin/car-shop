<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Укажите ваш email, на который будут приходить сообщения
    $to = "konakov.19@mail.ru";
    $subject = "Новое сообщение с сайта";

    // Формируем текст письма
    $body = "Имя: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Сообщение:\n$message";

    // Заголовки для отправки письма
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Отправка письма
    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение успешно отправлено.";
    } else {
        echo "Ошибка при отправке сообщения. Проверьте настройки сервера.";
    }
} else {
    echo "Недопустимый метод запроса.";
}
?>
