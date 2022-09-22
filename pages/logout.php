<?php
if (isset($_COOKIE['user_logged_in'])) {
	unset($_COOKIE['user_logged_in']);
	unset($_COOKIE['user']);
	setcookie('user_logged_in', '', time() - 3600);
	setcookie('user', '', time() - 3600);
	header("Location: ./");
	exit();
}
?>
