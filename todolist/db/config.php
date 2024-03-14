<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "todo_list";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Gagal: " . $conn->connect_error);
}
?>
