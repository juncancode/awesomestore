<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Le Shop - Amazing Store</title>
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
			<h1 class="text-center">OUR AMAZING SHOP</h1>
		</div>
		<!-- End of Header Image -->

		<!-- Start of Content -->
		<div class="container">
			<div class="row ">
				<div class="filter py-3 px-4 col-lg-3">
					<h3>Filter</h3>
					<hr/>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="XXX">By Artist</label>
						</div>
						<select class="custom-select" id="XXX">
							<option selected>--</option>
							<option value="">A</option>
							<option value="">B</option>
							<option value="">C</option>
							<option value="">D</option>
						</select>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="XXX">By Museum</label>
						</div>
						<select class="custom-select" id="XXX">
							<option selected>--</option>
							<option value="">A</option>
							<option value="">B</option>
							<option value="">C</option>
							<option value="">D</option>
						</select>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="XXX">By Price</label>
						</div>
						<select class="custom-select" id="XXX">
							<option selected>--</option>
							<option value="">A</option>
							<option value="">B</option>
							<option value="">C</option>
							<option value="">D</option>
						</select>
					</div>
					<button type="button" class="btn btn-primary">Filter Result</button>
				</div>
				<div class="shopContent py-3 px-4 col-lg-9">
					<h3>The Amazing Collection</h3>
					<hr/>
					<p class="lead">All of the amazing works of art by well-known artists now can also be admired online. From Van Gogh to Picasso, all of the exquisite painting collections can be found in this website. In order to preserve their natural uniqueness and quality, we tried to maintain the art pieces in a highly guarded environment.</p>
					<hr/>
					<div class="shopMain">
						<!-- First Row -->
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div class="thumbDesc">
								<h5>Art 1</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div>
								<h5>Art 2</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div>
								<h5>Art 3</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<!-- End of First Row -->
						<!-- Second Row -->
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div>
								<h5>Art 4</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div>
								<h5>Art 5</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div>
								<h5>Art 6</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<!-- End of Second Row -->
						<!-- Third Row -->
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div>
								<h5>Art 7</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div>
								<h5>Art 8</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<div class="thumbImage">
							<img src="webdev-file/images/art/works/square-medium/001020.jpg" alt="Art 1" />
							<div>
								<h5>Art 9</h5>
								<p>CAD 10,000</p>
								<button class="btn btn-primary">View Art</button>
							</div>
						</div>
						<!-- End of Third Row -->
					</div>
				</div>
			</div>
		</div>
		<!-- End of Content -->

		<!-- Start of Footer -->
		<?php include('footer.php');?>
		<!-- End of Footer -->

		<script src="js/jquery.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>