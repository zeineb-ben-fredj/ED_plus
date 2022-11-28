
<?php

	// include_once '../Model/courses.php';
    include_once '../Controller/coursesC.php';

    $error = "";

    // create adherent
    $courses = null;
    
    // create an instance of the controller
    $coursesC = new coursesC();
    if (
       // isset($_POST["idcourse"]) &&
		isset($_POST["subjects"]) &&
        isset($_POST["numof_students"]) && 
        isset($_POST["dateof_creation"]) && 
		isset($_POST["descriptionsC"]) &&
		isset($_POST["pictureC"]) 
		


    ) {
        if (
           // !empty($_POST["idcourse"]) && 
			!empty($_POST['subjects']) &&
            !empty($_POST["numof_students"]) && 
            !empty($_POST["dateof_creation"]) &&
			!empty($_POST["descriptionsC"]) &&
			!empty($_POST["pictureC"])
			
			

        ) {
            $courses = new courses(
                //$_POST['idcourse'],
				$_POST['subjects'],
                $_POST['numof_students'],
                $_POST['dateof_creation'],
				$_POST['descriptionsC'],
				$_POST['pictureC']
				
            );
            $coursesC->ajoutercourses($courses);
            header('Location:Courses_table2.php');
        }
        else
            $error = "Missing information";
    }

	$listecourses=$coursesC->affichercourses();

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Courses Database</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
	
<script type="text/javascript" src="verifierZeineb.js"></script>
	
	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<link rel="icon" href="assets/img/favicon.png" />

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="index.html" class="logo">
				<img src="assets/img/logo_.png" alt="navbar brand" class="navbar-brand" height="65" width="65">					
					
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
				<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<!-- <li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li> -->
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
													<img src="assets/img/jm_denis.jpg" alt="Img Profile">
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
													<img src="assets/img/chadengle.jpg" alt="Img Profile">
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
													<img src="assets/img/mlane.jpg" alt="Img Profile">
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
													<img src="assets/img/talha.jpg" alt="Img Profile">
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
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="Admin.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="Admin.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Zeineb</h4>
												<p class="text-muted">ED+_Admin@gmail.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
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
							<img src="Admin.jpg"  class="avatar-img rounded-circle" >
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Zeineb
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
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
							<h4 class="text-section">Modules</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
							<i class="fas fa-layer-group"></i>
								<p>Quizes</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="components/avatars.html">
											<span class="sub-item">Quizes</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Questions</span>
										</a>
									</li>
									
									
								</ul>
							</div>
						</li>
					
						<li class="nav-item ">
							<a data-toggle="collapse" href="#tables">
							<i class="fas fa-pen-square"></i>
								<p>Products</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="produit.php">
											<span class="sub-item">Products</span>
										</a>
									</li>
									<li>
										<a href="categorie.php">
											<span class="sub-item">Categories</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#forms">
							<i class="fas fa-table"></i>
								<p>Courses</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="forms">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="Courses_table2.php">
											<span class="sub-item">Courses</span>
										</a>
									</li>
									<li>
										<a href="Files_Table.php">
											<span class="sub-item">Files</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
							<i class="fas fa-table"></i>
								<p>Orders</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="db_orders2.php">
											<span class="sub-item">Orders</span>
										</a>
									</li>
									<li>
										<a href="db_shipping.php">
											<span class="sub-item">Shipping</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
							<i class="fas fa-map-marker-alt"></i>
								<p>Voluntary work</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">Donations</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">Training</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
							<i class="far fa-chart-bar"></i>
								<p>Users</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									<li>
										<a href="datatables.php">
											<span class="sub-item">User</span>
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
						<h4 class="page-title">Courses</h4>
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
								<a href="#">Classes</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Courses</a>
							</li>
						</ul>
					</div>
					<div class="card-header">
					 <div class="d-flex align-items-center">
						<form>
					    <input type = "text" id ="search-course" placeholder="Search ..." class="form-control">
                         </form> 
					 </div>
                        <div id="result-search"></div> 
					</div>
						
						
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Course</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Course
										</button>
									</div>
								</div>

								<form action = "tri_courses.php" method = "get" >
									
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Sort Courses</h4>
									<button type="submit" name = "sort" value = "sort" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
									<i class="fa "></i>
									Sort By Subject
									</button>
									</div>
								</div>
							
						</form>
								
								
	                            
	                            

								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Course
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Add a new course using this form, make sure you fill them all</p>
													<form action=""  method="POST">
														<div class="row">
															<!-- <div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Course_ID</label>
																	<input onblur="saisirID()" id="idcourse" name="idcourse" type="number" class="form-control" placeholder="fill ID">
																	<p id="erroraddName" class="error"></p>
																</div>
															</div> -->
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																<label>Subject</label>
																	<select onchange="saisirsubject()" name="subjects" id="subjects">
                                                                    <option value="select">Select</option>
                                                                    <option value="Math">Math</option>
                                                                   <option value="Biology">Biology</option>
                                                                  <option value="Physics">Physics</option>
                                                                 <option value="Astronomy">Astronomy</option>
                                                                 <option value="Chemistry">Chemistry</option>
                                                                <option value="Human Biology">Human Biology</option>
                                                                 </select><br>
                                                                  <p id="erroraddPosition" class="error"></p>
																	
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Number of Students</label>
																	<input onchange="saisirnbstudent()" id="numof_students" name="numof_students" type="number" class="form-control" placeholder="fill number">
																	<p id="erroraddOffice" class="error"></p>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Creation Date</label>
																	<input onchange="saisirdateof_creation()" id="dateof_creation" type="date" name="dateof_creation" class="form-control" placeholder="fill date">
																	<p id="errordate" class="error"></p>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Description</label>
																	<input id="descriptionsC" name="descriptionsC" type="string" class="form-control" placeholder="fill description">
                                                               </div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Image</label>
																	<input id="pictureC" name="pictureC" type="file" class="form-control" >
                                                               </div>
															</div>
															
														</div>
														<div class="modal-footer no-bd">
															<button onclick="ajout(event)" type="submit"  id="addRowButton" class="btn btn-primary">Add</button>
															<button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
														</div>
													</form>
												</div>
												
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Course_ID</th>
													<th>Subject</th>
													<th>Number of Students</th>
													<th>Creation Date</th>
													<th>Description</th>
													<th>Image</th>
													
													
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Course_ID</th>
													<th>Subject</th>
													<th>Number of Students</th>
													<th>Creation Date</th>
													<th>Description</th>
													<th>Image</th>
													
													
													
												</tr>
											</tfoot>
											<tbody>
											<?php
				foreach($listecourses as $courses){
			?>
			<tr>
				<td><?php echo $courses['idcourse']; ?></td>
				<td><?php echo $courses['subjects']; ?></td>
				<td><?php echo $courses['numof_students']; ?></td>
				<td><?php echo $courses['dateof_creation']; ?></td>
				<td><?php echo $courses['descriptionsC']; ?></td>
				<td><?php echo $courses['pictureC']; ?></td>
				

				<td>
					<form method="POST" action="modifiercourses.php">
						<input type="submit" class="btn btn-outline-info" name="Modifier" value="Edit">
						<input type="hidden" value=<?PHP echo $courses['idcourse']; ?> name="idcourse">
					</form>
				</td>
				<td>
					<a class="btn btn-outline-secondary" href="supprimercourses.php?idcourse=<?php echo $courses['idcourse']; ?>">Delete</a>
				</td>
			</tr>
			<?php
				}
			?>
												
												
											</tbody>
										</table>
									</div>
								</div>
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
		
	
	</div>
	<!--   Core JS Files   -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo2.js"></script>
    <script>
  $(document).ready(function(){
    $('#search-course').keyup(function(){
      $('#result-search').html('');
 
      var cours_search = $(this).val();
 
      if(cours_search != "")
      {$.ajax(
        {
          type: 'GET',
          url: 'searchcourse.php',
          data: 'user=' + encodeURIComponent(cours_search),
          success: function(data)
          {
            if(data != "")
            {
              $('#result-search').append(data);
            }
            else
            {
              document.getElementById('result-search').innerHTML = "<div>No Courses Available</div>"
              
              
            }
          }
        });
      }
    });
  });
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>