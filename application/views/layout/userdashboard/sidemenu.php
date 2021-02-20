<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="index.html">
						<img src="<?php echo USERS_ASSETS_URL; ?>img/logo.png" class="header-brand-img desktop-logo" alt="logo">
						<img src="<?php echo USERS_ASSETS_URL; ?>img/logo.png" class="header-brand-img icon-logo" alt="logo">
						<img src="<?php echo USERS_ASSETS_URL; ?>img/logo.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="<?php echo USERS_ASSETS_URL; ?>img/logo.png" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<div class="sidemenu-logo">
						<a class="main-logo" href="index.html">
							<img src="<?php echo FRONTEND_URL; ?>profile_image/<?php echo $this->session->userdata('userimage');?>" class="header-brand-img desktop-logo" alt="logo">
						</a>
					</div>

					<ul class="nav">
						<li class="nav-header"><span class="nav-label">
								<?php //echo '<pre>'; print_r($this->session->userdata());
									if ($this->session->userdata('usertype') == DEALER){
										$dashboard = 'dealerdashboard';
										$addtext   = 'Add Property';
										$addlinke  = 'propertyRegistration';
										$checkarr = array('viewlist','dealerdashboard');
										 
										if (in_array($this->router->fetch_method(),$checkarr)){
											$activeclass = '';
										}else { $activeclass = '';}
									}else {
										$dashboard = 'investorDashboard';
										$addtext   = 'Add Proposal';
										$addlinke  = 'proposal';
										if ($this->router->fetch_method() == $addlinke){
											$activeclass = '';
										}else{ $activeclass = '';}
									}
								?>
						</span></li>
						<li class="nav-item <?php echo $activeclass; ?>">
							<a class="nav-link <?php echo $activeclass; ?>" href="<?php echo SITE_URL.$dashboard; ?>"><span class="shape1"></span><span class="shape2"></span>
							<i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>
						<li class="nav-item <?php echo $activeclass; ?>">
							<a class="nav-link <?php echo $activeclass; ?>" href="<?php echo SITE_URL.$addlinke; ?>"><span class="shape1"></span>
							<span class="shape2"></span><i class="mdi mdi-account sidemenu-icon"></i>
							<span class="sidemenu-label"><?php echo $addtext; ?></span> <span class="badge badge-secondary side-badge">1</span></a>
						</li>
						<li class="nav-item <?php echo $activeclass; ?>">
							<a class="nav-link <?php echo $activeclass; ?>" href="investor.html"><span class="shape1"></span><span class="shape2"></span>
							<i class="mdi mdi-account-multiple sidemenu-icon"></i><span class="sidemenu-label">Investor</span> <span class="badge badge-secondary side-badge">1</span></a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="properties.html"><span class="shape1"></span><span class="shape2"></span>
							<i class="fa fa-building sidemenu-icon" ></i><span class="sidemenu-label">All Properties</span> <span class="badge badge-secondary side-badge">1</span></a>
						</li>
						
						
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->