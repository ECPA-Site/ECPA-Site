<?php
$name = $_POST['name'];
$pass = $_POST['password'];

$lines = file("users.txt", FILE_IGNORE_NEW_LINES);

$auth_ok = false;
$urlCode = "";

foreach ($lines as $line) {
    list($u, $p, $code) = explode(":", $line);

    if ($u === $name && $p === $pass) {
        $auth_ok = true;
        $urlCode = $code; // отправляем только код
        break;
    }
}

if ($auth_ok) {
    header("Location: second_page.html?user=" . urlencode($urlCode));
    exit;
} else {
    header("Location: index.html?status=fail");
    exit;
}
?>