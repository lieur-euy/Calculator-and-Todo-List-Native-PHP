<?php
// fetch.php

require_once '../db/config.php';

$query = "SELECT id, name, description FROM todo_list ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

$output = '<table class="table table-striped">
                <thead>
                    <tr>
                        <th>Task Name</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    $output .= '
    <tr>
    <td>' . $row['name'] . '</td>
    <td>' . $row['description'] . '</td>
    <td>
         <a href="update.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>
        <button class="delete btn btn-danger" data-id="' . $row['id'] . '">Delete</button>
    </td>
</tr>';
}


echo $output;
?>
