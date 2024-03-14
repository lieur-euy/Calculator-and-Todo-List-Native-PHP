<?php
// update.php

require_once '../db/config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$query = "UPDATE todo_list SET name = '$name', description = '$description' WHERE id = $id";
mysqli_query($conn, $query);

echo "Task updated successfully!";
?>
