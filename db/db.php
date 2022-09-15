<?php
class DB {
    public function __construct() {}

    public function connect($server, $username, $password, $database, $port) {
        $conn = mysqli_connect($server, $username, $password, $database, $port);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->error);
        } else {
            return $conn;
        }
    }
}
?>