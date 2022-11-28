
<?php
include "C:/xampp/htdocs/WEB/Controller/ordersC.php";
// include_once 'C:/xampp/htdocs/WEB/Model/orders.php';
include 'C:\xampp\htdocs\WEB\Controller\utilisateurc.php';
  
  
 // On prolonge la session
 session_start();
 // On teste si la variable de session existe et contient une valeur
 if(empty($_SESSION['e']))
 {
	 // Si inexistante ou nulle, on redirige vers le formulaire de login
	 header('Location:connexion.php');
	}
	$utilisateurC = new utilisateurC();
	$utilisateur=$utilisateurC->afficherutilisateur();

	$ordersC = new ordersC();


$ref=$_SESSION['e'];

$order_cl=$ordersC->recupererordersUser($ref);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Your order's receipt</title>

	<!-- favicon -->
	<link rel="icon" href="assets/img/favicon.png" />
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="orderdetails.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<script src="pdf.js"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
								<img src="logo_.png" alt=""  height="110" width="125">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<!--<ul class="sub-menu">-->
										<!--<li><a href="index.html"> Home</a></li>-->
										<!--<li><a href="index_2.html">Slider Home</a></li>-->
									<!--</ul>-->
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
									<!--<	<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>-->
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<!--<<li><a href="contact.html">Contact</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="shop.html">Shop</a></li>-->
									</ul>
								</li>
								<li><a href="news.html">News</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
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
						<p>An investment in knowledge pays the best dividends.</p>
						<h1>Your order's receipt</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div id="google_translate_element"></div>
	<button id="download" class="btn btn-info"> Download pdf</button> 
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
			<div class="container-fluid my-5 d-sm-flex justify-content-center">
    <div class="card px-2" id="invoice">
    <?php   
foreach ($order_cl as $or){
?>
	<div class="card-header bg-white">
			
            <div class="row justify-content-between">
				
                <div class="col">
                    <p class="text-muted"> Order ID <span class="font-weight-bold text-dark"><p><?php echo $or['ref_cmd']; ?></p></span></p>
                    <p class="text-muted"> Placed On <span class="font-weight-bold text-dark"><p><?php echo $or['Date_conf']; ?></p></span> </p>
					<p class="text-muted"> State <span class="font-weight-bold text-dark"><p><?php echo $or['etat']; ?></p></span></p>
					<p class="text-muted"> Payment method <span class="font-weight-bold text-dark"><p><?php echo $or['mode_paiement']; ?></p></span></p>
				</div>
                <img src="logo_.png" alt="" height="190" width="210">
            </div>
        </div>
        <div class="card-body">
            <div class="media flex-column flex-sm-row">
                <div class="media-body ">
                    <h5 class="bold">Look inside space book by usborne</h5>
                    <p class="text-muted"> Qt: 1 </p>
                    <h4 class="mt-3 mb-4 bold"> <span class="mt-5"></span> 19DT <span class="small text-muted">  </span></h4>
                    <!-- <p class="text-muted">Tracking Status on: <span class="Today">11:30pm, Today</span></p> <button type="button" class="btn btn-outline-primary d-flex">Reached Hub, Delhi</button> -->
                </div><img class="align-self-center img-fluid" src="assetsF/img/products/book_look_inside_space.jpg" width="180 " height="180">
            </div>
		</div>
	<?php
}
?>	
		
	</div>
        <!-- <div class="row px-3">
            <div class="col">
                <ul id="progressbar">
                    <li class="step0 active " id="step1">PLACED</li>
                    <li class="step0 active text-center" id="step2">SHIPPED</li>
                    <li class="step0 text-muted text-right" id="step3">DELIVERED</li>
                </ul>
            </div>
        </div> -->
        <!-- <div class="card-footer bg-white px-sm-3 pt-sm-4 px-0">
            <div class="row text-center ">
                <div class="col my-auto border-line ">
                    <h5>Track</h5>
                </div>
				<div class="col my-auto border-line ">
                    <h5><form method="POST" action="modifierorders.php">
					<input type="submit" name="pdf" value="Get PDF receipt ">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $order_cl['ref_cmd']; ?> name="ref_cmd"> -->
					<!-- </form></h5>
                </div>
                <div class="col my-auto border-line ">
				<a href="supprimerorders.php?ref_cmd=<?php echo $order_cl['ref_cmd']; ?>">Supprimer</a>
                </div>
               
                <div class="col my-auto mx-0 px-0 "><img class="img-fluid cursor-pointer" src="https://img.icons8.com/ios/50/000000/menu-2.png" width="30" height="30"></div>
            </div>
        </div> --> 
    </div>
</div>
				<!-- <div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									 <th class="product-remove"></th> -->
									<!-- <th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th> -->
									<!-- <th class="product-quantity">Quantity</th> -->
									<!-- <th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-body-row"> -->
									<!-- <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td> -->
									<!-- <td class="product-image"><img src="assets/img/products/book_look_inside_space.jpg" alt=""></td>
									<td class="product-name">Look inside space book by usborne</td>
									<td class="product-price">19DT</td>
									 <td class="product-quantity"><input type="number" placeholder="0"></td> 
									<td class="product-total">1</td> 
								</tr>
								<tr class="table-body-row">-->
									<!-- <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td> -->
									<!-- <td class="product-image"><img src="assets/img/products/the_cell-and-devision.jpg" alt=""></td>
									<td class="product-name">The cell and devision book by baby professor</td>
									<td class="product-price">20DT</td> -->
									<!-- <td class="product-quantity"><input type="number" placeholder="0"></td> -->
									<!-- <td class="product-total">1</td>
								</tr>
								<tr class="table-body-row"> -->
									<!-- <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td> -->
									<!-- <td class="product-image"><img src="assets/img/products/silicon_fruit_pen.jpg"></td>
									<td class="product-name">Silicone fruit pen</td>
									<td class="product-price">10DT</td> -->
									<!-- <td class="product-quantity"><input type="number" placeholder="0"></td> -->
									<!-- <td class="product-total">1</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>  -->

				<div class="col-lg-4">
					<div class="total-section">
						<!-- <table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>49DT</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>30DT</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>79DT</td>
								</tr>
							</tbody>
						</table> -->
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						
						<!-- <div class="cart-buttons">
						<a href="cart.html" class="boxed-btn">Update Cart</a>
						<a href="checkout.html" class="boxed-btn black">Check Out</a>
						</div>
					</div> -->

					<!-- <div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
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
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>