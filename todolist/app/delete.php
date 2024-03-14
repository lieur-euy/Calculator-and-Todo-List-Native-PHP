<?php
// delete.php

require_once '../db/config.php';

$id = $_POST['id'];

$query = "DELETE FROM todo_list WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Task deleted successfully!";
} else {
    echo "Error deleting task!";
}
?>
