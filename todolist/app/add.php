<?php
// add.php

require_once '../db/config.php';

$name = $_POST['name'];
$description = $_POST['description'];

$query = "INSERT INTO todo_list (name, description) VALUES ('$name', '$description')";
mysqli_query($conn, $query);

echo "Task added successfully!";
?>
