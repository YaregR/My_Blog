<?php

if(!empty($_POST)) {
    
    $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "' WHERE `users`.`id` = " . $_GET['id'] . ";";

    if(mysqli_query($conn, $sql)){
        echo "<h2>Дані оновлено. <a href='/admin/users.php'>Повернутись</a></h2>";
    } else {
        echo "Помилка: " . mysqli_error($conn);
    }
    
}

$sql = "SELECT * FROM users WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
    </div>
    <div class="card-body">

        <form action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST">

            <div class="mb-3">
                <label for="username" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="username" placeholder="Username" value="<?php echo $row['username']; ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="email" value="<?php echo $row['email']; ?>">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>

        </form>
    </div>
</div>