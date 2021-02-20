<!DOCTYPE html>
<html lang="en" dir="rtl" >
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keywords" content="">

       
		<!-- Title -->
		<title><?php echo SITE_TITLE; ?></title>

		<!-- Bootstrap css-->
		<link href="<?php echo USERS_ASSETS_URL; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<!-- Icons css-->
		<link href="<?php echo USERS_ASSETS_URL; ?>plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="<?php echo USERS_ASSETS_URL; ?>plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo USERS_ASSETS_URL; ?>plugins/web-fonts/plugin.css" rel="stylesheet"/>

		<!-- Style css-->
		<link href="<?php echo USERS_ASSETS_URL; ?>css-rtl/style/style.css" rel="stylesheet">
		<link href="<?php echo USERS_ASSETS_URL; ?>css-rtl/skins.css" rel="stylesheet">
		<link href="<?php echo USERS_ASSETS_URL; ?>css-rtl/dark-style.css" rel="stylesheet">
		<link href="<?php echo USERS_ASSETS_URL; ?>css-rtl/colors/default.css" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo USERS_ASSETS_URL; ?>css-rtl/colors/color.css">

		<!-- Select2 css -->
		<link href="<?php echo USERS_ASSETS_URL; ?>plugins/select2/css/select2.min.css" rel="stylesheet">

				<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo USERS_ASSETS_URL; ?>plugins/multipleselect/multiple-select.css">

		<!-- Sidemenu css-->
		<link href="<?php echo USERS_ASSETS_URL; ?>css-rtl/sidemenu/sidemenu.css" rel="stylesheet">

		<!-- Switcher css-->
		<link href="<?php echo USERS_ASSETS_URL; ?>switcher/css/switcher-rtl.css" rel="stylesheet">
		<link href="<?php echo USERS_ASSETS_URL; ?>switcher/demo.css" rel="stylesheet">
		
		<link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
	</head>
	<style type="text/css">
		.headertext {
			width: 100%;
			padding: 10px;
			border: 1px solid #FFF;
			text-align: center;
			background-color: #FFF;
			border-radius: 12px;
			color: #000 !important;
		}
	</style>
	<body class="main-body leftmenu">

		<!-- Loader -->
		<div id="global-loader">
			<img src="<?php echo USERS_ASSETS_URL; ?>img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page">

			<?php  $this->load->view('layout/userdashboard/sidemenu');?>
			<!-- Main Header-->
			<div class="main-header side-header sticky">
				<div class="container-fluid">
					<div class="main-header-right">
						<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="index.html"><img src="assets/img/logo.png" class="mobile-logo" alt="logo"></a>
							<a href="index.html"><img src="assets/img/logo.png" class="mobile-logo-dark" alt="logo"></a>
						</div>
						
					</div>
					<div class="main-header-right">
						
						
						
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="#">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary mr-3">View all</span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Rajkot  <strong>Properties</strong> Update</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Ahemdabad  <strong>Properties</strong> Update</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									
									
									
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Surat  <strong>Properties</strong> Update</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">View All Notifications</a>
								</div>
							</div>
						</div>
						
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<?php $userimage = $this->session->userdata('userimage');?>
								<span class="main-img-user" ><img alt="avatar" src="<?php echo FRONTEND_URL?>profile_image/<?php echo $userimage;?>"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<?php if($this->session->userdata('usertype') == DEALER){ $usertype = 'Dealer';} else {$usertype = 'Investor'; }  ?>
									<h6 class="main-notification-title"><?php echo $this->session->userdata('fname').' '.$this->session->userdata('lname'); ?> </h6>
									<p class="main-notification-text"><?php echo $usertype;?></p>
								</div>
								<a class="dropdown-item border-top" href="javascript:;">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="javascript:;">
									<i class="fe fe-edit"></i> Edit Profile
								</a>
							
								
								<a class="dropdown-item" href="<?php echo SITE_URL?>signout">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						
						<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
						</button><!-- Navresponsive closed -->
					</div>
				</div>
			</div>
			<!-- End Main Header-->		<!-- Mobile-header -->
			<div class="mobile-main-header">
				<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 mr-auto">
							
							
						
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="#">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary mr-3">View all</span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Rajkot  <strong>Properties</strong> Update</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Rajkot  <strong>Properties</strong> Update</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Rajkot  <strong>Properties</strong> Update</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">View All Notifications</a>
								</div>
							</div>
						</div>
						<?php 

						?>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<span class="main-img-user" ><img alt="avatar" src="<?php echo FRONTEND_URL; ?>profile_image/<?php echo $userdata['userimage']; ?>"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title"><?php echo $userdata['username'];?></h6>
									<p class="main-notification-text">Owner</p>
								</div>
								<a class="dropdown-item border-top" href="profile.html">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-edit"></i> Edit Profile
								</a>
								
								<a class="dropdown-item" href="signin.html">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header closed -->