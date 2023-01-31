<?php


if(!empty($_POST)) {
    // echo  $_POST['text'];

    $sql = "INSERT INTO `posts` (`text`, `category`, `title`, `preview`) VALUES ('" . $_POST['text'] . "', '" . $_POST['category'] . "', '" . $_POST['title'] . "', '" . $_POST['preview'] . "');";

    if(mysqli_query($conn, $sql)){
        echo "<h2>Дані оновлено. <a href='/admin/posts.php'>Повернутись</a></h2>";
    } else {
        echo "Помилка: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    
}

?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Post</h6>
    </div>
    <div class="card-body">

        <form action="?page=add" method="POST">

            <div class="form-floating">
                <textarea class="form-control" name="title" placeholder="Write a title here" id="floatingTitleArea" style="height: 60px"></textarea>
                <label for="floatingTitlAarea"></label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" name="text" placeholder="Write a text here" id="floatingTextarea2" style="height: 100px"></textarea>
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