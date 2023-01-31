<?php

require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

if(!empty($_GET)) {
    echo  $_GET['user_id'];

    $sql = "DELETE FROM posts WHERE id = " . $_GET['id'];

    if(mysqli_query($conn, $sql)){
        header("Location: /admin/posts.php");
    } else {
        echo "Помилка: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    
}

?>