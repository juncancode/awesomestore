<?php
include 'includes/art-config.inc.php';
include 'includes/art-functions.inc.php';

$default = 406;
if (isset($_GET['id'])) {
    $default = $_GET['id']; 
}
try {
    
    $dbpaint = new PaintingDB($pdo);
    $row = $dbpaint->findById($default);
    
    $dbgenre = new GenreDB($pdo);
    $genres = $dbgenre->findForPainting($default);  
    
    $dbsubject = new SubjectDB($pdo);
    $subjects = $dbsubject->findForPainting($default);    
    
    $dbreview = new ReviewDB($pdo);
    $reviews= $dbreview->findForPainting($default);   
    $averageRating = round($dbreview->AverageForPainting($default)); 
    
    $dbglass = new GlassDB($pdo);
    $glasses = $dbglass->getAll();    
    
    $dbframe = new FrameDB($pdo);
    $frames = $dbframe->getAll();   
    
    $dbmatte = new MatteDB($pdo);
    $mattes = $dbmatte->getAll();     
    
    
}
catch (PDOException $e) {
   die( $e->getMessage() );
}
?>

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
					<!-- <img src="webdev-file/images/together.jpg" alt="nude"  class="img-fluid border"> -->
					<img src="images/art/works/medium/<?php echo  $row['ImageFileName']; ?>.jpg" alt="..." class="ui big image" id="artwork">
				</div>
				<div class="col-lg-6">
					<article class="my-3">
						<h2>
							<?php echo  utf8_encode($row['Title']); ?>
						</h2>
						<h3 class="name">
							<?php echo utf8_encode($row['FirstName'] . ' ' . $row['LastName']); ?>
						</h3>
						<p><?php echo generateRatingStars($averageRating); ?></p>		
						<p><?php echo  utf8_encode($row['Excerpt']); ?></p>			
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
											<td>
												<?php echo generateLink('single-artist.php?id=' . $row['ArtistID'], utf8_encode($row['FirstName'] . ' ' . $row['LastName'])); ?>
											</td>
										</tr>
										<tr>
											<th scope="row">Year</th>
											<td>
												<?php echo  $row['YearOfWork']; ?>
											</td>
										</tr>
										<tr>
											<th scope="row">Medium</th>
											<td>
												<?php echo  $row['Medium']; ?>
											</td>
										</tr>
										<tr>
											<th scope="row">Dimensions</th>
											<td>
												<?php echo  $row['Width']; ?>cm x <?php echo  $row['Height']; ?>cm
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="museum" role="tabpanel" aria-labelledby="museum-tab">
							<table class="table">
									<tbody>
										<tr>
											<th scope="row">Museum</th>
											<td>
												 <?php echo generateLink('single-gallery.php?id='.$row['GalleryID'], $row['GalleryName']); ?>
											</td>
										</tr>
										<tr>
											<th scope="row">Assession #</th>
											<td>         
												<?php echo  $row['AccessionNumber']; ?>
											</td>
										</tr>
										<tr>
											<th scope="row">Copyright</th>
											<td>            
												<?php echo  $row['CopyrightText']; ?>
											</td>
										</tr>
										<tr>
											<th scope="row">URL</th>
											<td>
												<a href="#">    <?php echo generateLink($row['MuseumLink'],"View painting at museum site"); ?></a>
										</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="genres" role="tabpanel" aria-labelledby="genres-tab">
								<ul class="list-group-item">
								 <?php foreach ($genres as $gen) { ?>
									<li class="list-item">
										<?php echo $gen['GenreName']; ?>
									</li>
									<?php } ?>
								</ul>
							</div>
							<div class="tab-pane fade" id="subjects" role="tabpanel" aria-labelledby="subjects-tab">
								<ul class="list-group-item">
									<?php foreach ($subjects as $sub) { ?>
										<li class="list-item ml-3">
											<?php echo $sub['SubjectName']; ?>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</article>
					<article class="border rounded p-3">
						<h2>
							<?php echo  '$' . number_format($row['MSRP'],0); ?>
						</h2>
						<form>
							<div class="form-row">
								<div class="col-md-3 mb-3">
									<label for="">Quantity</label>
									<input type="number" class="form-control">
								</div>
								<div class="col-md-3 mb-3">
									<label for="">Frame</label>
									<select id="frame" class="form-control">
									<?php foreach ($frames as $frame) { ?>
                    <option>
                      <?php echo $frame['Title']; ?> [ $<?php echo number_format($frame['Price'],0); ?> ]
                    </option>
                  <?php } ?>
									</select>
								</div>
								<div class="col-md-3 mb-3">
									<label for="">Glass</label>
									<select id="glass" class="form-control">
                  <?php foreach ($glasses as $glass) { ?>
                    <option>
                      <?php echo $glass['Title']; ?> [ $<?php echo number_format($glass['Price'],0); ?> ]
                    </option>
                  <?php } ?>
                </select>
								</div>
								<div class="col-md-3 mb-3">
									<label for="">Matt</label>
									<select id="matt" class="form-control">
                  <?php foreach ($mattes as $matt) { ?>
                    <option>
                      <?php echo $matt['Title']; ?> 
                    </option>
                  <?php } ?>
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