<?php

    $servername = "localhost";
    $database = "my_blog";
    $username = "root";
    $password = "";

    // Створюємо з'єднання
    $conn = mysqli_connect($servername, $username, $password, $database);
    $conn->set_charset("utf8");
    
    // Перевіряємо з'єднання
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";

?>