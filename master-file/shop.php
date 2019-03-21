<?php

include 'includes/art-config.inc.php';

try {
    
    // connect and retrieve data for filters    
    $artistDB = new ArtistDB($pdo);
    $artists = $artistDB->getAll();   
    
    $galleryDB = new GalleryDB($pdo);
    $galleries = $galleryDB->getAll(); 
    
    $shapeDB = new ShapeDB($pdo);
    $shapes = $shapeDB->getAll();    
    
    
    // now retrieve paintings ... either all or a subset
    $paintDB = new PaintingDB($pdo);
    
    // filter by artist?
    if (isset($_GET['artist']) && ! empty($_GET['artist'])) {
        $paintings = $paintDB->findByArtist($_GET['artist']);
        
        $artist = $artistDB->findById($_GET['artist']);
        $filter = 'Artist = ' . makeArtistName($artist['FirstName'],$artist['LastName']) ;
    }
    
    // filter by museum?
    if (isset($_GET['museum']) && ! empty($_GET['museum'])) {
        $paintings = $paintDB->findByGallery($_GET['museum']);
        
        $museum = $galleryDB->findById($_GET['museum']);
        $filter = 'Museum = ' . utf8_encode($museum['GalleryName']);
    }    
    
    // filter by shape?
    if (isset($_GET['shape']) && ! empty($_GET['shape'])) {
        $paintings = $paintDB->findByShape($_GET['shape']);
        
        $shape = $shapeDB->findById($_GET['shape']);
        $filter = 'Shape = ' . $shape['ShapeName'];
    }     
                                            
    if (! isset($paintings) || $paintings->rowCount() == 0) {
        $paintings = $paintDB->getAll();
        $filter = "All Paintings [Top 20]";
    }
    
        
}
catch (PDOException $e) {
   die( $e->getMessage() );
}

function outputOptions($data, $valueField, $dataField) {
  while ($single = $data->fetch()) { 
    echo '<option value=' . $single[$valueField] . '>';
    echo utf8_encode($single[$dataField]);
    echo '</option>'; 
  }       
}

function makeArtistName($first, $last) {
    return utf8_encode($first . ' ' . $last);
}

?>

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
						<select class="ui fluid dropdown custom-select" name="artist">
              <option value='0'>Select Artist</option>  
              <?php  
                outputOptions($artists, 'ArtistID', 'LastName');
              ?>
            </select>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="XXX">By Museum</label>
						</div>
						<select class="ui fluid dropdown custom-select" name="museum">
              <option value='0'>Select Museum</option>  
              <?php  
                outputOptions($galleries, 'GalleryID', 'GalleryName');
              ?>
            </select>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="XXX">By Price</label>
						</div>
						<select class="ui fluid dropdown custom-select" name="shape">
              <option value='0'>Select Shape</option>  
              <?php  
                outputOptions($shapes, 'ShapeID', 'ShapeName');
              ?>
            </select>
					</div>
					<button type="submit" class="btn button">Filter Result</button>
				</div>

				<div class="shopContent py-3 px-4 col-lg-9">
					<h3>The Amazing Collection</h3>
					<hr/>
					<p class="lead">All of the amazing works of art by well-known artists now can also be admired online. From Van Gogh to Picasso, all of the exquisite painting collections can be found in this website. In order to preserve their natural uniqueness and quality, we tried to maintain the art pieces in a highly guarded environment.</p>
					<hr/>

					<div class="shopMain">
					<ul class="list-group items" id="paintingsList">
            
						<?php  while ($work = $paintings->fetch()) { ?>
	
						<li class="item">
							<a class="ui small image" href="detailed-painting.php?id=<?php echo $work['PaintingID']; ?>"><img src="images/art/works/square-medium/<?php echo $work['ImageFileName']; ?>.jpg"></a>
							<div class="content">
								<a class="header" href="detailed-painting.php?id=<?php echo $work['PaintingID']; ?>"><?php echo utf8_encode($work['Title']); ?></a>
								<div class="meta"><span class="cinema"><?php echo makeArtistName($work['FirstName'],$work['LastName']); ?></span></div>       
								<div class="meta">     
										<strong><?php echo '$' . number_format($work['MSRP'],0); ?></strong>        
								</div>        
								<div class="extra">
									<a class="ui icon orange button" href="cart.php?id=<?php echo $work['PaintingID']; ?>"><i class="add to cart icon"></i></a>
									<a class="ui icon button" href="favorites.php?id=<?php echo $work['PaintingID']; ?>"><i class="heart icon"></i></a>        
								</div>        
							</div>      
						</li>							
						<?php } ?>
						</ul> 
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