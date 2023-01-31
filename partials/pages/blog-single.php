<?php
	$sql = "SELECT * FROM posts WHERE id = " . $_GET['id'];		
	$result = mysqli_query($conn, $sql);						
	$row = $result->fetch_assoc();								 
?>

<section class="page-title section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-0 text-lg">Blog Single post</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-post">
	<div class="container">
		<div class="row">

			<div class="col-lg-8">
				<article class="single-post">
					<img src="../../assets/images/blog/01.jpg" alt="" class="img-fluid">

					<div class="single-post-content mt-4">
						<div class="post-meta mb-4">
							<span class="text-black">Category:</span>
							<span><?php echo $row['category']; ?></span>

							<span class="ml-3">-</span>
							<span class="date"><?php echo $row['created']; ?></span>
						</div>
						
						<h3><?php echo $row['title']; ?></h3>

						<p><?php echo $row['text']; ?></p>

						
						<!-- <div class="share mt-4">
							<ul class="list-inline">
								<li class="mb-3">Share Now :</li>
								<li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i> Facebook</a></li>
								<li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i> Twitter</a></li>
								<li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2"></i> Linkedin</a></li>
							</ul>
						</div>	 -->
					</div>
				</article>

				<div class="comments bg-secondary p-4 mt-5">
					<h4 class="mb-4">Comments</h4>

					<div class="latest-comments">
						<ul class="list-unstyled">
							<li>

								<div class="media comments-box mb-45">
									<img src="../../assets/images/blog/author1.jpg" alt="" class="img-fluid mr-3">
									<div class="comments-text media-body">
										<h5>John Doe</h5>
										<p>Maecenas fermentum consequat mi Donec fermentum Pelle maleuada nulla amiuis sapien sem aliquet nec commodo eget consequat </p>
										<a href="#" class="text-sm text-muted">Reply</a>

										<div class="media mt-4">
											<img src="../../assets/images/blog/author2.jpg" alt="" class="img-fluid mr-3">
											<div class="media-body comments-text">
												<div class="avatar-name">
													<h5>Jennifer S. Bowen</h5>
												</div>
												<p>Maecenas fermentum consequat mi Donec fermentum Pelle maleuada nulla amiuis sapien sem aliquet nec commodo eget </p>
												<a href="#" class="text-sm text-muted">Reply</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="media">
									<img src="../../assets/images/blog/author1.jpg" alt="" class="img-fluid mr-3">
									<div class="media-body comments-text">
										<h5>Omar Elnagar</h5>
										<p>Maecenas fermentum consequat mi Donec fermentum Pelle maleuada nulla amiuis sapien sem aliquet nec commodo eget consequat </p>
										<a href="#" class="text-sm text-muted">Reply</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="comment-form bg-secondary p-4 mt-5">
					<h4 class="mb-4">Leave a comment</h4>
					<form action="#" class="comment-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<textarea name="msg" id="msg" cols="30" rows="4" class="form-control" placeholder="Your Comment"></textarea>
						</div>

						<a href="#" class="btn btn-main">Post Comment</a>
						
					</form>
				</div>
			</div>


			<div class="col-lg-4">
				<div class="sidebar-widget mt-5 mt-lg-0">
					<div class="widget mb-5 follow">
						<h4 class="mb-4 widget-title">Follow us</h4>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="https://www.facebook.com/Yard2Print" target="_blank"><i class="ti-facebook"></i></a></li>
							<li class="list-inline-item"><a href="https://github.com/YaregR" target="_blank"><i class="ti-github"></i></a></li>
							<li class="list-inline-item"><a href="https://www.linkedin.com/in/rudenko-yaroslav" target="_blank"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>

					<div class="widget mb-5">
						<h4 class="mb-4 widget-title">Popular Posts</h4>
						<ul class="list-unstyled">
							<li class="d-flex mb-4">
								<img src="../../assets/images/blog/s-1.jpg" alt="" class="img-fluid mr-3">
								<div class="post-body">
									<span class="text-capitalize">by mesut Ozil</span>
									<a href="#"><h5>Elegant Brand Identity for Artistic Glass</h5></a>
								</div>
							</li>
							<li class="d-flex mb-4">
								<img src="../../assets/images/blog/s-2.jpg" alt="" class="img-fluid mr-3">
								<div class="post-body">
									<span class="text-capitalize">by mesut Ozil</span>
									<a href="#"><h5>Elegant Brand Identity for Artistic Glass</h5></a>
								</div>
							</li>
							<li class="d-flex">
								<img src="../../assets/images/blog/s-1.jpg" alt="" class="img-fluid mr-3">
								<div class="post-body">
									<span class="text-capitalize">by mesut Ozil</span>
									<a href="#"><h5>Elegant Brand Identity for Artistic Glass</h5></a>
								</div>
							</li>
						</ul>
					</div>

					<div class="widget category mb-5">
						<h4 class="mb-4 widget-title">Categories</h4>
						<ul class="list-unstyled">
						<li class="d-flex justify-content-between align-items-center">
							<a href="#">Web Design</a>
							<span class="cat-count">14</span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<a href="#">Development</a>
							<span class="cat-count">2</span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<a href="#">Marketing</a>
							<span class="cat-count">1</span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<a href="#">Printing</a>
							<span class="cat-count">1</span>
						</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
