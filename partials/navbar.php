<!-- Navigation Start -->
<!-- Header Start --> 

<nav class="navbar navbar-expand-lg  main-nav " id="navbar">
	<div class="container">
	  <a class="navbar-brand" href="../../index.php">
	  	<img src="../../assets/images/yard2.png" alt="logo" class="img-fluid">
	  </a>

	  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-align-justify"></span>
	  </button>
  
		  <div class="collapse navbar-collapse" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item  active"><a class="nav-link" href="/?p=home">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="/?p=about">About Me</a></li>
				<li class="nav-item"><a class="nav-link" href="/?p=portfolio">Portfolio</a></li>
			   	<li class="nav-item"><a class="nav-link" href="?p=blog-grid">Blog</a></li>
			   	<li class="nav-item"><a class="nav-link" href="/?p=contact">Contact</a></li>
			   	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">

						<?php 
							if(isLogin()) {
								$user = getCurrentUser();													
								echo '<li class="pt-2"><span class="text-white px-3">' . $user["username"] . '</span></li>';
								if ($user['role'] == "admin") {
								?>
								<li><a class="dropdown-item" href="/admin">Admin Page</a></li>
								<?php
								}
								echo '<li><a class="dropdown-item" href="/?p=logout">Logout</a></li>';
							} else {
						?>
								<li><a class="dropdown-item" href="/?p=login">Sign in</a></li>
								<li><a class="dropdown-item" href="/?p=register">Register</a></li>
						<?php
							}	
						?>
					</ul>
			  	</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Header Close --> 


<!-- Navigation ENd -->

