<?php

include "C:/xampp/htdocs/WEB/Controller/ordersC.php";
include_once 'C:/xampp/htdocs/WEB/Model/orders.php';

$orders = null;

// create an instance of the controller
$ordersC = new ordersC();
if (
	// isset($_POST["ref_cmd"]) &&
	// isset($_POST["Date_conf"]) &&
	isset($_POST["montant_cmd"]) && 
	isset($_POST["mode_paiement"]) && 
	isset($_POST["etat"]) 
) {
	if (
		// !empty($_POST["ref_cmd"]) && 
		// !empty($_POST["Date_conf"]) &&
		!empty($_POST["montant_cmd"]) && 
		!empty($_POST["mode_paiement"]) && 
		!empty($_POST["etat"]) 
	) {
		$orders = new orders(
		$_POST['ref_cmd'],
			 $_POST['Date_conf'],
			$_POST['montant_cmd'],
			$_POST['mode_paiement'],
			$_POST['etat']
		);
		$ordersC->ajouterorders($orders);
		//header('Location:afficherordres.php');
	}
	else
		$error = "Missing information";
}
if (isset($_POST['adr_mail']))
{
	$destinataire=$_POST['adr_mail'];
	$sujet="Order Confirmation";
	$message="Congrats your order has been validated";
	$headers= "From: ED+ Website <ed.plus34@gmail.com>";
	mail($destinataire,$sujet,$message,$headers);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Place Order Form</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
	<script type="text/javascript" src="verifierof.js"></script>
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
								<li class="current-list-item"><a href="index.html">Home</a>
									<!--<ul class="sub-menu">-->
										<!--<li><a href="index.html">Home</a></li>-->
										<!--<li><a href="index_2.html">Slider Home</a></li>-->
									<!--</ul>-->
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="shop.html">Shop</a></li>
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
						<p>Education is soul crafting</p>
						<h1>Place Order Form</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	<!-- <a href="checkout.html" class="boxed-btn black">Card Payment</a>
	<a href="checkout.html" class="boxed-btn black">Shipping Payment</a> -->
	<!-- check out section -->
	<br><br><br><br><br><br>
	<!-- <h4> <font size="+6"> Order Form </font></h4> -->
	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light" id="pdf">
					
						  <form action="" method="POST">
						  <input  name="ref_cmd" id="ref_cmd" type="hidden" class="form-control" placeholder="fill with today's date" value="0">
						  <input  name="Date_conf" id="Date_conf" type="hidden" class="form-control" placeholder="fill with today's date" value="0">		
						<div class="form-group">
						  <label> Adresse mail</label>
						  <input type="email" onblur="saisirE()" name="adr_mail" id="adr_mail" class="form-control" placeholder="fill with email adress">	
						  <p id="errorE" class="error"></p>
</div>
						  <div class="form-group">
						  <label>Price</label>
						        		<p><input  onblur="saisirmnt()" name="montant_cmd" id="montant_cmd" type="number" class="form-control" placeholder="fill with the global price of the order"></p>
						        		<p id="errorMC" class="error"></p>
</div><div class="form-group">
										<label>Payment method</label>
										
																	<select onblur="saisirpay()" name="mode_paiement" id="mode_paiement"  class="form-control" p >
             														   <option value="select">Select</option>
               															 <option value="Online">Online</option>
               															 <option value="Shipping">Shipping</option>
                															
            																		</select><br>

																					<p id="errorPM" class="error"></p>
																				</div>
																				<div class="form-group">
																					<label>State</label>
																	<select  name="etat" id="etat"  class="form-control" p >
               															 <option value="Non Effectue">Non Effectue</option>
            															</select>
</div><br>
																		
																		<label>Product</label>
																	<select  onblur="saisirProduct()" name="product" id="product"  class="form-control" p >
             														   <option value="select">Select</option>
               															 <option value="Effectue">Livre</option>
               															 <option value="Non Effectue">Stylo</option>
            															</select><br>
																		<p id="errorPr" class="error"></p>
																		<label>Quantity</label>
																			<input onblur="saisirqtt()" type="number" name="quantity" id="quantity"><br>			
																			<p id="errorQt" class="error"></p>
																		<button type="submit"  class="btn btn-success" name="Save" onclick="ajout(event)" >Place Order</button>
																				</form>
																				</div>
																				<div class="col-md-6 d-flex align-items-stretch">
																				<img src="logo_.png" alt="" height="510" width="530">			</div>
																				</div>
		</section>
						    <!-- <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						         <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div> -->

						    <!-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="index.html">
						        		<p><input type="text" placeholder="Name"></p><br>
						        		<p><input type="email" placeholder="Email"></p><br>
						        		<p><input type="text" placeholder="Address"></p><br>
						        		<p><input type="tel" placeholder="Phone"></p>
						        		<p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div> -->
						  <!-- <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Shipping Address
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
									<form action="" method="POST">
						        		
						        		<p><input type="date" name="Date_conf" id="Date_conf" ></p>
						        		<p><input  name="montant_cmd" id="montant_cmd" type="number"></p>
						        		<label>Payment method</label>
																	
																	<select  name="mode_paiement" id="mode_paiement"  class="form-control" p >
             														   <option value="select">Select</option>
               															 <option value="Online">Online</option>
               															 <option value="Shipping">Shipping</option>
                															
            																		</select><br>
																					
																					<label>State</label>
																	<select name="etat" id="etat"  class="form-control" p >
             														   <option value="select">Select</option>
               															 <option value="Effectue">Effectue</option>
               															 <option value="Non Effectue">Non Effectue</option>
                															
            															</select><br>
																		<button type="submit"  class="boxed-btn" name="Save" >Add</button>
																				</form>
						        	
									<br>
									
						        </div>
						      </div>
						    </div>
						  </div><br> -->
						  <!-- <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Card Details
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
									<form action="index.html">
						        		<p>Your card details goes here.</p><br>
										<p><input type="text" placeholder="Name on card"></p><br>
						        		<p><input type="text" placeholder="credit card number"></p><br>
						        		<p><input type="text" placeholder="Exp month"></p><br>
						        		<p><input type="text" placeholder="Exp year"></p><br>
						        		<p><input type="text" placeholder="CVV"></p>
						        	</form>
						        	
									
						        </div>-->
						      </div>
						    </div> 
						  </div>
						</div>

					</div>
				</div> 

				<!-- <div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
								<tr>
									<td>Look inside space book by usborne</td>
									<td>19DT</td>
								</tr>
								<tr>
									<td>The cell and devision book by baby professor</td>
									<td>20DT</td>
								</tr>
								<tr>
									<td>Silicone fruit pen</td>
									<td>10DT</td>
								</tr>
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td>49DT</td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td>30DT</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>79DT</td>
								</tr>
							</tbody>
						</table>
						<a href="#" class="boxed-btn">Place Order</a>
					</div> -->
				<!-- </div>
			</div>
		</div>
	</div>  -->
	<!-- end check out section -->

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