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
                                <img src="<?php echo FRONTEND_URL?>profile_image/<?php echo $getUserdatabyId[0]->user_image; ?>" alt="user-image" class="avatar">
                                <h2 class="text-muted fw-500 mx-3">
                                	<?php 
                                		echo $userdata['fname'].' '.$userdata['lname'];
                                	?>
                                </h2> 
                            </div>
                            <hr class="mdc-list-divider m-0">
                            <ul class="mdc-list">
								<?php 
									if ($userdata['usertype'] == DEALER){
										$dashboard = 'dealerdashborad';
									}elseif ($userdata['usertype'] == INVESTOR){
										$dashboard = 'investorDashboard';
									}
								?>
							  <li>
                                    <a href="<?php echo SITE_URL.$dashboard; ?>" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">person</span>
                                        <span class="mdc-list-item__text">Dashboard</span>
                                    </a>
                                </li>
								
								
                                <li>
                                    <a href="<?php echo SITE_URL?>userprofile" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">person</span>
                                        <span class="mdc-list-item__text">Profile</span>
                                    </a>
                                </li>
                                <?php 
                                	if ($userdata['usertype'] == DEALER){
                                ?>
                                <li>
                                    <a href="<?php echo SITE_URL; ?>propertyRegistration" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">add_circle</span>
                                        <span class="mdc-list-item__text">Submit Property</span>
                                    </a>
                                </li>
                            	<?php 
                            		}
                            	?>
                                <li>
                                    <a href="<?php echo SITE_URL?>signout" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">power_settings_new</span>
                                        <span class="mdc-list-item__text">Logout</span>
                                    </a>
                                </li>
                            </ul>  
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                    <div class="page-sidenav-content"> 
                        <div class="row mdc-card between-xs middle-xs w-100 p-2 mdc-elevation--z1 text-muted d-md-none d-lg-none d-xl-none mb-3">
                            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons">more_vert</button> 
                            <h3 class="fw-500">My Account</h3>
                        </div> 
                        <div class="mdc-card p-3 row mb-3">
                            <div class="col-xs-12 col-md-6 px-3">
                                <h2 class="text-muted text-center fw-600 mb-3">Account details</h2>
                                <form action="<?php echo SITE_URL?>userprofile" name="update_pro" id
                                	="update_pro" method="post" enctype="multipart/form-data">  
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input" name="first_name" id="first_name" value="<?php echo $getUserdatabyId[0]->first_name; ?>">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">First Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 

                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input" name="last_name" id="last_name" value="<?php echo $getUserdatabyId[0]->last_name; ?>">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Last Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 

                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input" id="useremail" name="useremail" value="<?php echo $getUserdatabyId[0]->user_email; ?>" >
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Email</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input" name="userphone" id="userphone" value="<?php echo $getUserdatabyId[0]->user_phone; ?>"> 
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Phone</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2"> 
                                        <select class="mdc-text-field__input" name="user_gender" id="user_gender">
                                            <option>- - Select Gender - -</option>
                                            <option <?php if ($getUserdatabyId[0]->gender == MALE){ echo "selected='selected'";}?> value="<?php echo MALE; ?>">Male</option>
                                            <option <?php if ($getUserdatabyId[0]->gender == FEMALE){ echo "selected='selected'";}?> value="<?php echo FEMALE; ?>"> Female</option>
                                        </select>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Gender</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                     
 									<div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                       <textarea class="mdc-text-field__input" name="userabout" id="userabout" rows="10"><?php echo $getUserdatabyId[0]->user_about; ?></textarea>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">About Me</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>  

									<div class="col-xs-12 p-2">
										 <br>
										   <a href="javascript:void(0)" onclick="$('#pro-image').click()" class="uplod_pero_img">Upload Profile Image</a>						
										      <input type="file" id="pro-image" name="uploadimage" style="display: none;" class="form-control">
										   <br><br>
                                           <img src="<?php echo FRONTEND_URL?>profile_image/<?php echo $getUserdatabyId[0]->user_image; ?>" style="padding:10px;width:50%; border:1px solid #ddd; border-radius: 4px;">
										   <div class="preview-images-zone" style="display: none !important;"></div>
					 					</div>	
                                        			
									<input type="hidden" name="old_profile_image" id="old_profile_image" value="<?php echo $getUserdatabyId[0]->user_image; ?>" >
			                             
                                   <!-- <div class="my-2 col-xs-6 p-0">  
                                        <label class="text-muted">Image</label> 
                                        <div id="user-profile-image" class="dropzone needsclick">
                                            <div class="dz-message needsclick text-muted">    
                                                Drop file here or click to upload.
                                            </div>
                                        </div> 
                                        <div id="dropzone-preview-template" class="d-none plan-image-template">
                                            <div class="dz-preview dz-file-preview">
                                                <div class="dz-image"><img src="assets/images/others/transparent-bg.png" data-dz-thumbnail="" alt="prop-image"></div>
                                                <div class="dz-details">
                                                    <div class="dz-size"><span data-dz-size=""></span></div>
                                                    <div class="dz-filename"><span data-dz-name=""></span></div>
                                                </div>
                                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                                <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                                                <div class="dz-success-mark">
                                                    <i class="material-icons mat-icon-xlg">check</i> 
                                                </div>
                                                <div class="dz-error-mark">
                                                    <i class="material-icons mat-icon-xlg">cancel</i> 
                                                </div> 
                                            </div>
                                        </div>  
                                    </div>  -->
                                    
                                  
                                    
                                   
                                   
                                    <div class="row around-xs middle-xs p-2 mb-3"> 
                                        <button class="mdc-button mdc-button--raised" type="submit">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Update profile</span> 
                                        </button> 
                                    </div> 
                                </form>  
                            </div>
                            <div class="col-xs-12 col-md-6 px-3">
                                <h2 class="text-muted text-center fw-600 mb-3">Password change</h2>
                                <form action="<?php echo SITE_URL?>changepassword" name="change_pass" id="change_pass" method="post" >  
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input" type="password" name="currentpassword" id="currentpassword">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Current Password</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input" type="password" name="newpass" id="newpass">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">New Password</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div> 
                                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                        <input class="mdc-text-field__input" type="password" name="newrepass" id="newrepass">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label class="mdc-floating-label">Confirm New Password</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>  
                                    <div class="row around-xs middle-xs p-2 mb-3"> 
                                        <button class="mdc-button mdc-button--raised" type="submit">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Change password</span> 
                                        </button> 
                                    </div> 
                                </form> 
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