<?php


if(!empty($_POST)) {
    

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
	}



    $sql = "INSERT INTO `posts` (`text`, `category`, `title`, `preview`) VALUES ('" . $_POST['text'] . "', '" . $_POST['category'] . "', '" . $_POST['title'] . "', '" . $previewName . "');";

    if(mysqli_query($conn, $sql)){
        echo "<h2>Data updated. <a href='/admin/posts.php'>Back</a></h2>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    
}

?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Post</h6>
    </div>
    <div class="card-body">

        <form action="?page=add" method="POST" enctype="multipart/form-data">

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