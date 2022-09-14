<!DOCTYPE html>
<html>
<?
$path = $_SERVER['REQUEST_URI'];

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
    case '/contact':
        require_once(__DIR__ . '/pages/contact.php');
        break;
    case '/login':
        require_once(__DIR__ . '/pages/login.php');
        break;
    default:
        echo "<h1>Something went wrong!</h1>";
}

?>
</html>