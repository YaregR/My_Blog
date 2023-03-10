<?php

if(!empty($_POST)) {

    // якщо файл не pзамінюємо, то робимо такий update
    if($_FILES['preview']['name'] == "") {
        $sql = "UPDATE `posts` SET `text` = '" . $_POST['text'] . "', `title` = '" . $_POST['title'] . "', `category` = '" . $_POST['category'] .  "' WHERE `posts`.`id` = " . $_GET['id'] . ";";
    } else {
    // якщо файл треба замінити 
        if(!empty($_FILES)) {		
            
            $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';	// директорія, де зберігаємо завантажені файли

            /* змінній $path за допомогою функції pathinfo передаємо інформацію про шлях до файлу,
            де $_FILES['prevew']['name'] - оригінальне ім'я файлу на комп'ютері */
            $path = pathinfo($_FILES['preview']['name']); 
            
            
            /* змінній $previewName присвоюємо нове ім'я для файлу, який загружаємо, де generateRandomString(10) - рядок з 32 рандомних символів,	time() - час загрузки і $ext['extension'] - розширення/тип файлу, що загружаємо */
            $previewName = generateRandomString(10) . time() . "." . $path['extension'];	

            // змінній $uploadfile передаємо шлях для загрузки файлу на сервері
            $uploadFile = $uploadDir . $previewName; 
            
            if (!move_uploaded_file($_FILES['preview']['tmp_name'], $uploadFile)) { 	// якщо файл не загрузився
                echo "Error, file didn't load!\n";					
                die();																
            }

            $sql = "UPDATE `posts` SET `text` = '" . $_POST['text'] . "', `title` = '" . $_POST['title'] . "', `category` = '" . $_POST['category'] . "', `preview` = '" . $previewName . "' WHERE `posts`.`id` = " . $_GET['id'] . ";";

        }
    }

    if(mysqli_query($conn, $sql)){
        echo "<h2>Data updated. <a href='/admin/posts.php'>Back</a></h2>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
}

// вибираємо пост, який треба редагувати по його id
$sql = "SELECT * FROM posts WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Post</h6>
    </div>
    <div class="card-body">

        <form action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">

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
                <option value="Design">Design</option>
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