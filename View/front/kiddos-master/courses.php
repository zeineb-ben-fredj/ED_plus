<?php
	include 'C:\xampp\htdocs\WEB\Controller\coursesC.php';
  include 'C:\xampp\htdocs\WEB\Controller\utilisateurc.php';
	$coursesC=new coursesC();
	$listecourses=$coursesC->affichercourses(); 

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

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Courses</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                <span class="text"> <?php
// Il est bien connecté 

echo 'Bienvenue Utilisateur ' , $_SESSION['e'];
?></span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">ed.plus34@gmail.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 216 25 981 441</span>
					    </div>
              <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				    </div>
            <?php
                          
                          foreach($utilisateur as $utilisateur){
                      ?>

<?php
				}
			?>
            <form                  method="GET" action="modifier.php">
            <h1>
          
</h1>
            
<div>
                 
            
                
			
<h1>    </h1>
<a class="btn btn-secondary px-4 py-3" href="deconnexion.php">Sign out</a>

            </form>
                        <input class="btn btn-secondary px-4 py-3" align="gauche" type="submit" name="Modifier" value="Modify Account">
					<input class="pied-formulaire" type="hidden" value=<?PHP echo $_SESSION['e']; ?> name="Cin">
			    </div>
		    </div>
		  </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.html"> <img src="logo_.png" width="150" height="130"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
        
        
 
 
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="ProfileUser.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	        	<li class="nav-item active"><a href="courses.php" class="nav-link">Courses</a></li>
            <li class="nav-item"><a href="categorief.php" class="nav-link">Shop</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Quiz</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Voluntary Work</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Our contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('Science.webp');  height: 400px; ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Courses</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
                <?php
				foreach($listecourses as $courses){
			?>
			 <div class="col-md-6 course d-lg-flex ftco-animate">
						<!-- <div class="img" style="background-image: url(<img src=>);"></div> -->
						<img src="<?php echo $courses['pictureC']; ?>" alt="Image" class="img" height=" 340 px" width="200 px">
						<div class="text bg-light p-4">
              
							<h3><?php echo '<a href="'."Lessons.php?idcourse=". $courses['idcourse'].'">'?><td><?php echo $courses['subjects']; ?></td></a></h3> 
              
              
							<p class="subheading"><span>Available Content:</span>  Lectures / Animated Videos</p>
              <td><?php echo $courses['descriptionsC']; ?></td>
							<!-- <p>If you are interested in numbers and mathematical figures, you will enjoy the courses we have prepared for you! Join this class to start learning math in a fun and easy way.  </p> -->
						</div>
					</div>
			<?php
				}
			?>
					<!-- <div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(Math.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Math</a></h3>
							<p class="subheading"><span>Available Content:</span>  Lectures / Animated Videos</p>
							<p>If you are interested in numbers and mathematical figures, you will enjoy the courses we have prepared for you! Join this class to start learning math in a fun and easy way.  </p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(Biology.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Biology</a></h3>
							<p class="subheading"><span>Available Content:</span>Lectures / Animated Videos </p>
							<p>If you enjoy learning about nature, animals, and wild life, join this class to start the exciting journey of discovering the mysteries of biology!</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(Physics.png); "></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Physics</a></h3>
							<p class="subheading"><span>Available Content:</span> Lectures / Animated Videos </p>
							<p>If you are interested in learning about the laws and dynamics of our universe, join our physiscs class to understand the world and its mysteries in a fun and interesting way!</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(Astronomy.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Astronomy</a></h3>
							<p class="subheading"><span>Available Content:</span> Lectures / Animated Videos</p>
							<p>If you are curious about life beyond planet earth, this class is perfect for you! With our informative courses you will disciver the hidden mysteries of planets, stars, and galaxies of our universe.</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(Chemistry.jpg); height: 300px;"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">chemistry</a></h3>
							<p class="subheading"><span>Available Content:</span> Lectures / Animated Videos</p>
							<p>If you want to see the world on a smaller scale, join our chemistry class to discover the fascinating experiments and reactions of this field! </p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(Human.jpg);height: 300px;"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Human Biology</a></h3>
							<p class="subheading"><span>Available Content:</span> Lectures / Animated Videos</p>
							<p>If you are interested in learning about the human body and its inner organs and organismes, join our human biology class to discover the anatomy and functions of different parts of the human body!  </p>
						</div>
					</div> -->
				</div>
			</div>
		</section>

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">AV Hedi Nouira Ennaser 2 Ariana Tunisia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 216 25 981 441</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@EDPlus.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recently Added Courses</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(space.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Stars and planets</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov 10, 2021</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(cell.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">The cells</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov 10, 2021</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
    
  </body>
</html>