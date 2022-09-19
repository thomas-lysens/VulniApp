<?php
class DB {
    public function __construct() {}

    public function connect($server, $username, $password, $database, $port) {
        $conn = new PDO("mysql:host=" . $server . ";port=" . $port . ";dbname=" . $database . ";", $username, $password);
	return $conn;
    }
}
?>
