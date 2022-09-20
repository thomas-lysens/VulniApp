<!DOCTYPE html>
<html>
<?php
$path = $_SERVER['REQUEST_URI'];
$user_logged_in = isset($_COOKIE["user_logged_in"]) ? $_COOKIE["user_logged_in"] : false;

switch ($path) {
    case '/':
        require_once(__DIR__ . '/pages/home.php');
        break;
    case '/about':
        require_once(__DIR__ . '/pages/about.php');
        break;
    case '/upload':
        require_once(__DIR__ . '/pages/upload.php');
        break;
    case '/pricing':
        require_once(__DIR__ . '/pages/pricing.php');
        break;
    case '/contact':
        require_once(__DIR__ . '/pages/contact.php');
        break;
    case '/login':
        require_once(__DIR__ . '/pages/login.php');
        break;
    case '/register':
        require_once(__DIR__ . '/pages/register.php');
        break;
    default:
        require_once(__DIR__ . '/pages/404.php');
}

?>
</html>
