<?php 

include_once '../config.php';
// include 'Controller/servicec.php';
//include'Controller/produitc.php';
  $db=config::getConnexion();
  $recipesStatement = $db->prepare('SELECT * FROM produit');
  $recipesStatement->execute();
  $prod=$recipesStatement->fetchall();


  $db=config::getConnexion();
  $recipesStatement = $db->prepare('SELECT * FROM categorie');
  $recipesStatement->execute();
  $liste=$recipesStatement->fetchall();
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>News</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assetsss/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assetsss/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assetsss/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../assetsss/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assetsss/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../assetsss/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../assetsss/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../assetsss/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assetsss/css/responsive.css">
	<link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href='http://fonts.googleapis.com/css?family=Spirax' rel='stylesheet' type='assets/css/style.css'>
      </head>

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="../assetsss/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="news.php">produit</a></li>
										<li><a href="shop.html">Shop</a></li>
									</ul>
									<li> <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</li>
								</li>
								<li><a href="news.html">News</a>
									<ul class="sub-menu">
										<li><a href="produitf.php">Produits</a></li>
										<li><a href="categorief.php">Categories</a></li>
										<!-- <li><a href="single-news.php">Single News</a></li> -->
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<!-- <li><a href="single-product.html">Single Product</a></li> -->
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>

								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
							
						</div>
						
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p></p>
						<h1>Nouveaux Produits</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">

			<?php  foreach ($prod as $res) { ?>

				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><?php echo"<img src='uploads/".$res['image']."'>" ?></a>
						<div class="news-text-box">
					
							<h3><a href=""><h4><?php echo $res['nom'] ?></h4></a></h3>
							
							<p class="blog-meta">
								<span class="author"><h6>prix:<?php echo $res['prix'] ?>dt </h6></span>
								<span class="date"><h6>date:<?php echo $res['date'] ?> </h6></span>
							</p>
							<p class="excerpt"><h6>id_categorie:<?php echo $res['id_cat'] ?> </h6></p>
							<p class="excerpt"><h6>reference:<?php echo $res['reference'] ?> </h6></p>
							<p class="excerpt"><h6>description:<?php echo $res['description'] ?> </h6></p>
							<div class="stars" style="margin-right: 78%;">
							
<?php
			$i=0;
			for($i=0;$i<$res["note"];$i++)
			{
			
					
         echo"<i style='color:red;'class='lar la-star' data-value='$i'></i>";
				
		}
		for($i=0;$i<4-$res["note"];$i++)
		{
			
			echo"<i class='lar la-star' data-value='$i'></i>";
		}
	?>
		
        </div>
							<!-- <a href="single-news.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a> -->
							
						</div>
					</div>
				</div> 
				

				<?php } ?>




















			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="../assetsss/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../assetsss/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../assetsss/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../assetsss/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../assetsss/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<input type="hidden" name="note" id="note" value="0">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="../assetsss/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../assetsss/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assetsss/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assetsss/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../assetsss/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../assetsss/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assetsss/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../assetsss/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../assetsss/js/sticker.js"></script>
	<!-- main js -->
	<script src="../assetsss/js/main.js"></script>
	<script src="scripts.js"></script>
</body>
</html>

















<?php  foreach ($liste as $re) { ?>
      
                      
	  <a href=""><h4>  <?php echo $re['nom'] ?></h4></a>
  
	
	 



<?php } ?>