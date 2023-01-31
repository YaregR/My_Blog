<?php

if(!empty($_POST)) {
    
    $sql = "UPDATE `posts` SET `text` = '" . $_POST['text'] . "', `title` = '" . $_POST['title'] . "', `category` = '" . $_POST['category'] . "', `preview` = '" . $_POST['preview'] . "' WHERE `posts`.`id` = " . $_GET['id'] . ";";

    if(mysqli_query($conn, $sql)){
        echo "<h2>Дані оновлено. <a href='/admin/posts.php'>Повернутись</a></h2>";
    } else {
        echo "Помилка: " . mysqli_error($conn);
    }
    
}

$sql = "SELECT * FROM posts WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Post</h6>
    </div>
    <div class="card-body">

        <form action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST">

            <div class="form-floating">
                <textarea class="form-control" name="title" placeholder="Write a title here" id="floatingTitleArea" style="height: 60px"><?php echo $row['title']; ?></textarea>
                <label for="floatingTitlAarea"></label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" name="text" placeholder="Write a text here" id="floatingTextarea2" style="height: 100px"><?php echo $row['text']; ?></textarea>
                <label for="floatingTextarea2"></label>
            </div>

            <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Category</label>
            <select class="form-select" id="inputGroupSelect01" name="category">
                <option selected>Choose...</option>
                <option value="Development">Development</option>
                <option value="Web Design">Web Design</option>
                <option value="Marketing">Marketing</option>
                <option value="Printing">Printing</option>
            </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input type="file" class="form-control" id="inputGroupFile01" name="preview">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>

        </form>
    </div>
</div>