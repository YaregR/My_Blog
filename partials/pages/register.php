<?php

  if(!empty($_POST)) {

    if($_POST['password'] === $_POST['conf-password']) {

      //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
      if (isset($_POST['name'])) { 
        $login = $_POST['name']; 
        if ($login == '') { unset($login);} 
      } 

      //заносим введенный пользователем email в переменную $email, если он пустой, то уничтожаем переменную
      if (isset($_POST['email'])) { 
        $email = $_POST['email']; 
        if ($email == '') { unset($email);} 
      } 

      //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
      if (isset($_POST['password'])) { 
        $password = $_POST['password']; 
        if ($password == '') { unset($password);} 
      }

      //если пользователь не ввел логин, email или пароль, то выдаем ошибку и останавливаем скрипт
      if (empty($login) or empty($email) or empty($password)) {
          exit ("<div class='text-center mt-5'>You didn't enter all the information, go back and fill in all the fields!</div>");
      }

      //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
      $login = stripslashes($login);
      $login = htmlspecialchars($login);
      $email = stripslashes($email);
      $email = htmlspecialchars($email);
      $password = stripslashes($password);
      $password = htmlspecialchars($password);

      //хешируем пароль
      $password_hash = password_hash($password, PASSWORD_BCRYPT);

      // проверка на существование пользователя с таким же логином
      $sql_login = "SELECT id FROM users WHERE username = '$login'";
      $result = mysqli_query($conn, $sql_login);
      $user = $result->fetch_assoc();
      if (!empty($user['id'])) {
        exit ("<div class='text-center mt-5'>Sorry, the username you entered has already been registered. Enter another name</div>");
      }

      //вносим данные в БД
      $sql = "INSERT INTO `users` (username, email, password) VALUES ('" . $login . "', '" . $email . "', '" . $password_hash . "');";

      if(mysqli_query($conn, $sql)){
        echo "<div class='text-center mt-5'>Registration successful</div>";
        // header("Location: /");
        echo "<script>
                setTimeout(() => window.location.replace('../../index.php'), 2000);                
              </script>";
        exit();

      } else {
          echo "Error: " . mysqli_error($conn);
      }
      mysqli_close($conn);

    } else {
        echo "<div class='text-center mt-5'>Passwords don't match</div>";
    }
     
  }

?>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">

        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="#" method="POST">

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="user name" name="name">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="email" name="email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="conf-password" placeholder="confirm password" name="conf-password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-main px-5 w-100">Register</button></div>
            
          </form>
        </div>

      </div>
    </div>
  </div>
