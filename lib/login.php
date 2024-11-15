<?php
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($username) < 2){
    echo "username error";
    exit;
}

if(strlen($password) < 2){
    echo "password error";
    exit;
}

//Password encryption
$salt = '56s89_))(*$-890sdfsdg6742(!*&#@$09AQU';
$password = md5($salt.$password);

require "db.php";

$sql = 'SELECT username FROM bots WHERE username = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$username, $password]);

if ($query->rowCount() == 0) {
    echo "Брат нет такого";
} else {
    setcookie('username', $username, time() + 3600 * 24 * 30,"/");
    header("Location: /Car%20shop/user.php");

}