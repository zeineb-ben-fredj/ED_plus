<?php
include_once '../config.php';
include_once '../controller/servicec.php';


// $produitc=new seancec();
// $prod=$produitc->afficherseance();


// $db=config::getConnexion();
// $sql="SELECT * FROM equipement ";
// $recipesStatement = $db->prepare($sql);
// $recipesStatement->execute();
// $prod=$recipesStatement->fetchall();


$db=config::getConnexion();
$sql="SELECT * FROM categorie ";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute();
$categ=$recipesStatement->fetchall();



session_start();

?>


<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets23/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets23/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets23/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets23/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets23/css/demo.css">
</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="index.html" class="logo">
					<img src="../assets23/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets23/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<!-- <img src="../assets23/img/chadengle.jpg" alt="Img Profile"> -->
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets23/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets23/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
						
						
						</li>
						

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<!-- <img src="../assets23/img/profile.jpg" alt="..." class="avatar-img rounded-circle"> -->
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
								
									</li>
								
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<!-- <img src="../assets23/img/profile.jpg" alt="..." class="avatar-img rounded-circle"> -->
						</div>
						<div class="info">
							<!-- <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a> -->
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="./d.php" >
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<!-- <span class="caret"></span> -->
							</a>
							<!-- <div class="collapse" id="dashboard"> -->
								<!-- <ul class="nav nav-collapse">
									<li>
										<a href="../demo1/index.html">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
									<li>
										<a href="../demo2/index.html">
											<span class="sub-item">Dashboard 2</span>
										</a>
									</li>
								</ul> -->
							<!-- </div> -->
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Tables</h4>
						</li>
						<li class="nav-item">
							<a  href="./produit.php">
								<i class="fas fa-layer-group"></i>
								<p>Produits</p>
								<!-- <span class="caret"></span> -->
							</a>
                            </li>

                            <li class="nav-item">
							<a  href="./categorie.php">
								<i class="fas fa-layer-group"></i>
								<p>Categories</p>
								<!-- <span class="caret"></span> -->
							</a>
                            </li>

							
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				


      <div class="content">
        <div class="row">
          <div class="col-12">
 

                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Ajouter Produit </h3>
                                        </div>
                                        <hr>
                                      
                                        
               <form name="f1"  method="post" action="ajouter.php" enctype="multipart/form-data" onSubmit="return verif()">


        <center><legend><h2></h2></legend></center>
        <table id="example1" class="table table-striped">
        <th><input type="hidden" name="id" value=""/></th>
          <tr>
          <th >nom</th>
            <th><input type="text" name="nom" value=""/></th>
          </tr>

         <tr>
         <th >image</th>
           <th><input type="file" class="form-control-file"name="image"></th>
        </tr>
          <tr>
          <th>Prix</th>
            <th><input type="number" name="prix" value="" required /></th>
          </tr>

          <tr>
            

<select name="id_cat" >
  
  <?php
foreach($categ as $caa){
?>
<option value="<?php echo $caa['id'] ?>"><?php echo $caa['libelle'] ?></option>
<?php } ?>
</select>
</th>               
                   
</tr>

          <tr>
          <th>date</th>
          <th><input id="date" type="date" name="date"  required/></th>
        </tr>

        <tr>
          <th>reference</th>
          <th><input type="text" name="reference" value="" required/></th>
        </tr>
        <tr>
          <th>description</th>
          <th><input type="text" name="description" value="" required/></th>
</tr>
<tr>
          <th>note</th>
		  <th><input type="number" name="note" value="<?php  echo $res['note']; ?>" min="0" max="4" required placeholder="Entre 1 et 4"/></th>
</tr>
             <tr>
              
        
        </table>
        <br>
        <center>
        <td><button type="submit" name="Ajouter" value="Ajouter" class="btn btn-danger">Ajouter</button></td>
      </center>
      </form>


                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
        
                    </div>
					</div>
				</div>
			</div>

</div>

			<!-- <footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer> -->
	
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="selected changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="selected changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="selected changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets23/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets23/js/core/popper.min.js"></script>
	<script src="../assets23/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets23/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets23/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets23/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../assets23/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets23/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets23/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets23/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets23/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets23/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets23/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets23/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets23/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets23/js/setting-demo.js"></script>
	<script src="../assets23/js/demo.js"></script>
	<script>
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});
	</script>

	
</body>

<script>
	
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
	var yyyy = today.getFullYear();
	if(dd<10){
	  dd='0'+dd
	} 
	if(mm<10){
	  mm='0'+mm
	} 
	
	today = yyyy+'-'+mm+'-'+dd;
	document.getElementById("date").setAttribute("min", today);
	console.log(today);
	
	</script>
	
</html>