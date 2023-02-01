
<section class="page-title section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-0 text-lg">Blog</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section blog-post">
	<div class="container">
		<div class="row">

			<?php
			$sql = "SELECT * FROM posts";
			$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()):		// за домопогою while  перебираємо всі рядки з таблиці posts				
			?>

			<div class="col-lg-4 col-md-6">
				<div class="post mb-5">
					<a class="image-content" href="/?p=blog-single&id=<?php echo $row['id']; ?>">
						<img src="uploads/<?php echo $row['preview']; ?>" alt="photo" class="img-fluid">
					</a>

					<div class="post-content">
						<span class="date text-uppercase text-sm"><?php echo $row['created']; ?></span>
						<a href="/?p=blog-single&id=<?php echo $row['id']; ?>"><h4><?php echo $row['title']; ?></h4></a>
					</div>
				</div>
			</div>

			<?php
				endwhile;
			?>		


		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="pagination">
					<ul class="list-inline d-block mx-auto">
						<li class="list-inline-item">
							<a href="#">Prev</a>
						</li>
						<li class="active list-inline-item">
							<a href="#">
								<span>1</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<span>2</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<span>3</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Next</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
