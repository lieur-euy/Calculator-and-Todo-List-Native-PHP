<?php
//koneksi
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "todo_list";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// cek db
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}
$conn->close();


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SHOW TABLES LIKE 'todo_list'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {

    $create_table_sql = "CREATE TABLE todo_list (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";


    if ($conn->query($create_table_sql) === TRUE) {
        echo "Table todo_list created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error . "\n";
    }
} else {
    echo "Table todo_list already exists\n";
}


$conn->close();
?>