<?php
    include_once 'C:\xampp\htdocs\WEB\Controller\FilesC.php';
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


    $filesC = new filesC();
    $id=$_GET['idcourse'];
   
    if (isset($id)){
        $files = $filesC->trouverfiles($id);
       
            
        
        //echo $files['id_cc'];
         
    }
    
   
    //echo $files['uploadfichier'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lessons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/img/favicon.png" />
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
						    <span class="text">ED.Plus@email.com</span>
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
        
	    	<a class="navbar-brand" href="index_front.html"> <img src="logo_.png" width="150" height="130"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
        
        <div class="card-header">
					 <div class="d-flex align-items-center">
						<form>
					    <input type = "text" id ="search-course" placeholder="Search ..." class="form-control">
                         </form> 
					 </div>
                        <div id="result-search"></div> 
					</div>

         
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('bg_42.jpg'); " >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Lessons</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index_front.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Lessons <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
   
           
           
   
 
		<section class="ftco-section">
    	<div class="container">
    		<div class="row">
        <?php
     
				foreach( $files as $fichier){ 
           
       
      
			?>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>

                
	        			<h3 class="mb-3"><?php echo $fichier['nomfichier']; ?></h3>
	        			<!-- <p><span class="price">$24.50</span> <span class="per">/ 5mos</span></p> -->
                 <img src="<?php echo $fichier['filepic']; ?>" height="360" width="270" alt="">
                
                
	        		</div>
	        		<!-- <div class="img" style="background-image: url(images/bg_1.jpg);"></div> -->
	        		<div class="px-4">
            
                <h5><?php echo $fichier['typefichier']; ?></h5>
                <h5><?php echo $fichier['lesson_level']; ?></h5>
                
                 
                <h6><?php echo $fichier['descriptionfichier']; ?></h6>
               
        			</div>
              
        			<p class="button text-center"><a href="<?php echo $fichier['uploadfichier']; ?>" class="btn btn-tertiary px-4 py-3">Open Lesson</a></p>
        		</div>

        	</div>
          <?php
        }
        ?>
         
        	 <!-- <div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Second Grade Math</h3>
	        			<!-- <p><span class="price">$34.50</span> <span class="per">/ 5mos</span></p> 
	        		</div>
	        		 <div class="img" style="background-image: url(images/bg_2.jpg);"></div> 
        			<div class="px-4">
	        			<p>description</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">download</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light active pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Third Grade Math</h3>
	        			<!-- <p><span class="price">$54.50</span> <span class="per">/ 5mos</span></p> 
	        		</div>
	        		<!-- <div class="img" style="background-image: url(images/bg_3.jpg);"></div> 
        			<div class="px-4">
	        			<p>description</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">download</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Fourth Grade Math</h3>
	        			<!-- <p><span class="price">$89.50</span> <span class="per">/ 5mos</span></p> 
	        		</div>
	        		<!-- <div class="img" style="background-image: url(images/bg_5.jpg);"></div> 
        			<div class="px-4">
	        			<p>description</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-quarternary px-4 py-3">download</a></p>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
  <script>
  $(document).ready(function(){
    $('#search-course').keyup(function(){
      $('#result-search').html('');
 
      var cours_search = $(this).val();
 
      if(cours_search != "")
      {$.ajax(
        {
          type: 'GET',
          url: 'searchfiles_front.php',
          data: 'user=' + encodeURIComponent(cours_search),
          success: function(data)
          {
            if(data != "")
            {
              $('#result-search').append(data);
            }
            else
            {
              document.getElementById('result-search').innerHTML = "<div>No Files Available</div>"
              
              
            }
          }
        });
      }
    });
  });
</script>
    
  </body>
</html>