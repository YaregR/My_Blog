<?php


  if(!empty($_POST)) {
    
    $sql = "SELECT * FROM users WHERE username = '" . $_POST['name'] . "'";

    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();

    if(mysqli_num_rows($result) !== 0) {

      if(password_verify($_POST['password'], $user['password'])) {

        echo "<div class='text-center mt-5'>Welcome, " . $user["username"
        ] .  "</div>";

        if($user) {

          if(isset($_POST['remember'])) {
            setcookie('user_id', $user['id'], time()+60*60*24*30, '/');
          } else {
            $_SESSION["user_id"] = $user['id'];
          }        
          header("refresh: 2; /");
          die();
        } else {
          $_SESSION["user_id"] = null;
          setcookie('user_id', '', 0, '/');
        }
      } else {     
        echo "<div class='text-center mt-5'>Wrong password</div>";
      }

    } else {     
      echo "<div class='text-center mt-5'>Wrong username</div>";
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
              <input type="password" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-main px-5 mb-3 w-100">Sign in</button></div>

            <div class="checkbox mb-3 text-center">
              <label>
                <input type="checkbox" name="remember" value="1"> Remember me
              </label>
            </div>

            <div id="emailHelp" class="form-text text-center text-dark">Not
              Registered? <a href="register.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
