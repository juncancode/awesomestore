<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Le Blog - Amazing Store</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Font Import CSS -->
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<!-- Main CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<!-- Start of Nav -->
		<?php include('header.php');?>
		<!-- End of Nav -->

		<!-- Start of Header Image -->
		<div class="headerImage d-flex align-items-center justify-content-center">
			<h1 class="text-center">OUR AMAZING BLOG</h1>
		</div>
		<!-- End of Header Image -->

		<!-- Start of Content -->
		<div class="container">
			<div class="blogContent py-3 px-4 col-lg-12">
				<h3>The Amazing Blog</h3>
				<hr/>
				<p class="lead">Allow us to delight you with the newest blog post about our antiques. All the story are not true and the purpose is actually to fill in spaces in this world wide web. Subscribe to our newsletter even though you will never receive anything from us. It's just for data farming you know.</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Subscribe now!
				</button>
				<hr/>
				<div class="blogMain">
					<!-- First Row -->
					<div class="thumbImage">
						<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
						<div class="thumbDesc">
							<h5>News 1</h5>
							<p>Description</p>
							<button class="btn btn-primary">View Art</button>
						</div>
					</div>
					<div class="thumbImage">
						<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
						<div>
							<h5>News 2</h5>
							<p>Description</p>
							<button class="btn btn-primary">View Art</button>
						</div>
					</div>
					<div class="thumbImage">
						<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
						<div>
							<h5>News 3</h5>
							<p>Description</p>
							<button class="btn btn-primary">View Art</button>
						</div>
					</div>
					<!-- End of First Row -->
					<!-- Second Row -->
					<div class="thumbImage">
						<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
						<div>
							<h5>News 4</h5>
							<p>Description</p>
							<button class="btn btn-primary">View Art</button>
						</div>
					</div>
					<div class="thumbImage">
						<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
						<div>
							<h5>News 5</h5>
							<p>Description</p>
							<button class="btn btn-primary">View Art</button>
						</div>
					</div>
					<div class="thumbImage">
						<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
						<div>
							<h5>News 6</h5>
							<p>Description</p>
							<button class="btn btn-primary">View Art</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Content -->

			<!-- Start of Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:var(--main-color);">
							<img src="images/logo_1.svg" alt="Amazing Store" />
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" style="color:var(--white-color);">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h4 class="modal-title" id="exampleModalLabel">Subscribe to our newsletter!</h4>
							<hr/>
							<form>
								<div class="form-group">
									<label>First Name:</label>
									<input type="text" class="form-control" placeholder="First Name" />
								</div>
								<div class="form-group">
									<label>Email Address:</label>
									<input type="email" class="form-control" placeholder="Email Address" />
								</div>
								<br/>
								<button type="submit" class="btn btn-primary">Subscribe!</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Modal -->

			<!-- Start of Footer -->
			<?php include('footer.php');?>
			<!-- End of Footer -->
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>