<?php 
	$this->load->view('layout/frontend/header');
?>
   	<main>   
	
	<div class="header-image-wrapper">
            <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <br> <br>
        </div> 
		
		
        <div class="px-3">  
            <div class="beatle-container row between-xs middle-xs h-100">   
                <div class="page-drawer-container mt-3">
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card"> 
                            <div class="row start-xs middle-xs p-3">
                                <img src="<?php echo ASSETS_URL;?>assets/images/others/user.jpg" alt="user-image" class="avatar">
                                <h2 class="text-muted fw-500 mx-3"><?php echo $this->session->userdata('fname').' '.$this->session->userdata('lname');?></h2> 
                            </div>
                            <hr class="mdc-list-divider m-0">
                            <ul class="mdc-list">
							
							 	<li>
                                    <a href="dealer-dashboard.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">person</span>
                                        <span class="mdc-list-item__text">Dashboard</span>
                                    </a>
                                </li>
								
								
                                <li>
                                    <a href="dealer-profile.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">person</span>
                                        <span class="mdc-list-item__text">Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dealer-properties-list.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">view_list</span>
                                        <span class="mdc-list-item__text">My Properties</span>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="dealer-registration.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">add_circle</span>
                                        <span class="mdc-list-item__text">Submit Property</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">power_settings_new</span>
                                        <span class="mdc-list-item__text">Logout</span>
                                    </a>
                                </li>
                            </ul>  
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  

                    <div class="pad_15">
						
                        <div class="mdc-card p-3">
						 
                            <div class="mdc-text-field mdc-text-field--outlined custom-field w-100">
                                <input class="mdc-text-field__input" placeholder="Type for filter properties">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Filter properties</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  
                            <div class="mdc-data-table border-0 w-100 mt-3">
                             <?php 
			                    	if (!empty($allproperty)){
			                    		foreach (json_decode($allproperty) as $key=>$val)
			                    		{
			                  ?>
								<div class="row item col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
	                                <div class="mdc-card property-item list-item column-1">
	                                    <div class="thumbnail-section">
	                                        <div class="row property-status">
	                                            <span class="green">Active</span> 
	                                        </div> 
	                                        <div class="property-image"> 
	                                            <img src="assets/images/props/flat-1/1.jpg" alt="slide image"> 
	                                        </div> 
	                                        
	                                    </div>
	                                    <div class="w60per "> 
											<a class="mach_pro property-status" href="dealer-match-proposal.html" target="_blank">Match Proposal 
											<span class="green">5</span></a>
	                                   
									   
	                                        <div class="property-content">
	                                            <div class="content">
	                                                <h1 class="title"><a href="#"><?php echo $val->property_name;?></a></h1>
													 <p class="row address flex-nowrap">
													 	<?php 
													 		echo $val->property_text;
													 	?>
	                                                </p>
	                                                <p class="row address flex-nowrap">
	                                                    <i class="material-icons text-muted">location_on</i>
	                                                    <span><?php echo $val->property_city.','.$val->property_street; ?> , ישראל</span>
	                                                </p>
	                                               
	                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
	                                                    <div class="description mt-3"> 
	                                                        <p><?php echo $val->property_details ?></p>
	                                                    </div>
	                                                </div>
	                                                   
	                                            </div> 
	                                           
	                                            <div class="actions row  middle-xs jus_end">
	                                                <p class="row date mb-0">
	                                                    <i class="material-icons text-muted">date_range</i>
	                                                    <span class="mx-2"><?php echo date('d, m Y',strtotime($val->created_date)); ?></span>
	                                                </p>
													
													<a href="chat.html" target="_blank" class="massage">
	                                         
	                                                    <span class=""> <i class="material-icons primary-color">email</i><span class="number_of_msg"> 2</span></span> 
	                                                </a>
													
													
	                                                <a href="dealer-properties-view.html" class="mdc-button mdc-button--outlined">
	                                                    <span class="mdc-button__ripple"></span>
	                                                    <span class="mdc-button__label">View</span> 
	                                                </a> 
												<a href="#" target="_blank" class="delete_btn">
	                                        		   <i class="fa fa-trash" aria-hidden="true"></i>
	                                             </a>

												<a href="dealer-registration.html" target="_blank" class="delete_btn">
	                                          <i class="fa fa-pencil-square" aria-hidden="true"></i>
	                                                </a>
	                                            </div>
	                                        </div>  
										 </div> 
	                                </div>  
                            	</div>
                            	<?php 
										}
			                    	}
                            	?>
                          </div> 
						 </div> 
                    </div> 
                </div>  
            </div>  
        </div> 
    </main> 
<?php 
	$this->load->view('layout/frontend/footer');
?>
   