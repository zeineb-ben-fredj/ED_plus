<?php
    include_once '../../Model/donnateur.php';
    include_once '../../Controller/donnateurC.php';
    //include_once '../xampp/htdocs/projetwebb/donation et forms meriglin/demo2/tables.html';
	$id=$_GET['iddonnateur'];
	$sql="SELECT * FROM `donnateur` WHERE `iddonnateur` = '$id'";
	$db = config::getConnexion();
	try{
		$query = $db->prepare($sql);
		$query->execute();
		$donnateur=$query->fetch();			
	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}			
    $error = "";
	
    // create an instance of the controller
    $donnateurC = new donnateurC();
    if (
        isset($_POST["iddonnateur"]) &&
		isset($_POST["nom"]) &&		
		isset($_POST["adresse"]) && 
        isset($_POST["phone"])&&
        isset($_POST["email"])&&
        isset($_POST["montant"])
    ) {
        if (
            !empty($_POST["iddonnateur"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["adresse"]) && 
            !empty($_POST["phone"])&&
            !empty($_POST["email"])&&
            !empty($_POST["montant"])
        ) {
            $donnateur = new donnateur(
                $_POST['iddonnateur'],
				$_POST['nom'],
                $_POST['adresse'],
                $_POST['phone'],
                $_POST['email'],
                $_POST['montant']
            );
            $donnateurC->modifierdonnateur($donnateur,$_POST["iddonnateur"]);
            header('Location:../tables/datatables.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ED PLUS</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body data-background-color="dark">
	<div class="wrapper sidebar_minimize">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="../index.html" class="logo">
					<img src="../../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
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
							<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						
						
						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Formulaire</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="forms">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="..ajouterdonateur.html">
											<span class="sub-item">donateur</span>
										</a>
									</li>
								</ul>
							</div>

							<div class="collapse show" id="forms">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="..ajouterformation.php">
											<span class="sub-item">formation</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Tables</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="../tables/tables.html">
											<span class="sub-item">Basic Table</span>
										</a>
									</li>
									<li>
										<a href="../tables/datatables.html">
											<span class="sub-item">Datatables</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">donnateur</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">donnateur</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">ajouter donnateur</a>
							</li>
						</ul>
					</div>
                    <?php 
                     if(isset($_POST['iddonnateur'])){
                         $donnateur = $donnateurC->recupererdonnateur($_POST['iddonnateur'])
                    ?>
					<form action="" method="POST">
					 <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">ajouter donnateur</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-8 col-lg-5">

											<div class="form-group">
												<label for="name">id donnateur</label>
												<input type="number" class="form-control" name="iddonnateur" id="iddonnateur" value="<?php echo $donnateur ['iddonnateur']?>" placeholder="Enter id formation">
											</div>

											<div class="form-group">
												<label for="nom">nom</label>
												<input type="text" class="form-control" name="nom" id="nom" value="<?php echo $donnateur ['nom']?>" placeholder="Enter nom">
											</div>
											<div class="form-group">
												<label for="adresse">adresse</label>
												<input type="text" class="form-control" name="adresse" id="adresse" value="<?php echo $donnateur ['adresse']?>" placeholder="adresse">
											</div>
											<div class="form-group">
												<label for="email">email</label>
												<input type="email" class="form-control" name="email" id="email" value="<?php echo $donnateur ['email']?>" placeholder="email">
											</div>
                                            <div class="form-group">
												<label for="phone">phone</label>
												<input type="number" class="form-control" name="phone" id="phone" value="<?php echo $donnateur ['phone']?>" placeholder="phone">
											</div>
                                            <div class="form-group">
												<label for="montant">montant</label>
												<input type="number" class="form-control" name="montant" id="montant" value="<?php echo $donnateur ['montant']?>" placeholder="montant">
											</div>
																																				
											
										</div>
										<!-- <div class="col-md-10 col-lg-15">

											<div class="form-group">
												<label for="name">Description</label>
												<input type="Description" class="form-control" id="Description" placeholder="Enter Description">
											</div>

											
																																				
											
										</div> -->
										
										
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success" href="../tables/tables.php">Submit</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
								</form> 
                                <?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
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
			</footer>
		</div>
		
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
							<button type="button" class="selected changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
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
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
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
							<button type="button" class="selected changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
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
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo2.js"></script>
</body>
</html>