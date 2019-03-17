<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Detailed Painting - Amazing Store</title>
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
			<h1 class="text-center">OUR AMAZING DETAILS</h1>
		</div>
		<!-- End of Header Image -->

		<section class="container">
			<div class="row">
				<div class="col-lg-6 p-5 align-self-top">
					<img src="webdev-file/images/together.jpg" alt="nude"  class="img-fluid border">
				</div>
				<div class="col-lg-6">
					<article class="my-3">
						<h2>The Anatomy Lessn of Dr.Nicolaes Tulp</h2>
						<h3 class="name">Rembrandt</h3>
						<p>The Anatomy Lesson of Dr. Nicolaes Tulp is a 1632 oil painting by Rembrandt housed in the Mauritshuis museum in The Hague, the Netherlands.</p>					
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true"><i class="far fa-image fa-lg"></i> Details</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="museum-tab" data-toggle="tab" href="#museum" role="tab" aria-controls="museum" aria-selected="true"><i class="fas fa-landmark fa-lg"></i> Museum</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#genres" role="tab" aria-controls="genres" aria-selected="true"><i class="fas fa-tint fa-lg"></i> Genres</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#subjects" role="tab" aria-controls="subjects" aria-selected="true"><i class="fas fa-cube"></i> Subjects</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
							<table class="table">
									<tbody>
										<tr>
											<th scope="row">Artist</th>
											<td>Rembrandt</td>
										</tr>
										<tr>
											<th scope="row">Year</th>
											<td>1622</td>
										</tr>
										<tr>
											<th scope="row">Medium</th>
											<td>Oil on canvas</td>
										</tr>
										<tr>
											<th scope="row">Dimensions</th>
											<td>216cm x 170cm</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="museum" role="tabpanel" aria-labelledby="museum-tab">
							<table class="table">
									<tbody>
										<tr>
											<th scope="row">Museum</th>
											<td>Royal Picture gallery Mauritshuis</td>
										</tr>
										<tr>
											<th scope="row">Assession #</th>
											<td>146</td>
										</tr>
										<tr>
											<th scope="row">Copyright</th>
											<td>Private Use Only</td>
										</tr>
										<tr>
											<th scope="row">URL</th>
											<td><a href="#">View painting at museum site</a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="genres" role="tabpanel" aria-labelledby="genres-tab">
								<ul class="list-group">
									<li class="list-group-item">Baroque</li>
									<li class="list-group-item">Dutch Golden Age</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="subjects" role="tabpanel" aria-labelledby="subjects-tab">
								<ul class="list-group">
									<li class="list-group-item">People</li>
									<li class="list-group-item">Science</li>
								</ul>
							</div>
						</div>
					</article>
					<article class="border rounded p-3">
						<h2>$ 1,200</h2>
						<form>
							<div class="form-row">
								<div class="col-md-3 mb-3">
									<label for="">Quantity</label>
									<input type="number" class="form-control">
								</div>
								<div class="col-md-3 mb-3">
									<label for="">Frame</label>
									<select class="form-control">
										<option value="">Ansley</option>
										<option value="">Canyon</option>
									</select>
								</div>
								<div class="col-md-3 mb-3">
									<label for="">Glass</label>
									<select class="form-control">
										<option value="">Clear</option>
										<option value="">Museum</option>
									</select>
								</div>
								<div class="col-md-3 mb-3">
									<label for="">Matt</label>
									<select class="form-control">
										<option value="">Dawn Grey</option>
										<option value="">Gold</option>
										<option value="">Silver</option>
									</select>
								</div>
							</div>
						</form>
						<div class="dropdown-divider"></div>
						<button type="button" class="btn btn-labeled my-3">
							<span class="btn-label">
								<i class="fas fa-shopping-cart"></i>
							</span> Add to Cart
						</button>
					</article>
				</div>
			</div>
	</section>
		
		<!-- Start of Footer -->
		<?php include('footer.php');?>
		<!-- End of Footer -->
		<script>

		</script>
		<script src="js/jquery.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>