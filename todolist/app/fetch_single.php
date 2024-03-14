<?php
// fetch_single.php

require_once '../db/config.php';

$taskId = $_GET['id'];

$query = "SELECT * FROM todo_list WHERE id = $taskId";
$result = mysqli_query($conn, $query);

$task = mysqli_fetch_assoc($result);

echo json_encode($task);
?>
