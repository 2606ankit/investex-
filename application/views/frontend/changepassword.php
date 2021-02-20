<?php 
	$this->load->view('layout/frontend/header');
?>

 <main>  


<div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL?>assets/images/others/contact.jpg');"></div>
            <div class="mask"></div>            
        <br><br>
        </div>
   
        <div class="px-3">  
            <div class="theme-container">  
                <div class="row center-xs middle-xs my-5"> 
                    <div class="mdc-card p-3 p-relative mw-500px">
                        <div class="column center-xs middle-xs text-center">  
                            <h1 class="uppercase">Sign In</h1>

                            <a href="<?php echo SITE_URL?>join" class="mdc-button mdc-ripple-surface mdc-ripple-surface--accent accent-color normal w-100">
                                Don't have an account? Sign up now!
                            </a>

                        </div>
                        <?php if (!empty($error)){?><div style="padding:5px; font-size: 12px; background-color: #900; color:#FFF;border-radius: 4px;"><?php echo $error; ?></div><?php } ?>
                        <form action="<?php echo SITE_URL;?>changepassword" method="post" name="change_password" id="change_password">  
	                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
	                                <i class="material-icons mdc-text-field__icon text-muted">person</i>
	                                <input class="mdc-text-field__input" value="" required="required" name="userpassword" id="userpassword" type="password">
	                                <div class="mdc-notched-outline">
	                                    <div class="mdc-notched-outline__leading"></div>
	                                    <div class="mdc-notched-outline__notch">
	                                        <label class="mdc-floating-label">new Password</label>
	                                    </div>
	                                    <div class="mdc-notched-outline__trailing"></div>
	                                </div>
	                            </div>  
	                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
	                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
	                                <i class="material-icons mdc-text-field__icon text-muted" tabindex="1" id="password-toggle">visibility_off</i>
	                                <input class="mdc-text-field__input" value="" required="required" type="password" name="conuserpassword" id="conuserpassword">
	                                <div class="mdc-notched-outline">
	                                    <div class="mdc-notched-outline__leading"></div>
	                                    <div class="mdc-notched-outline__notch">
	                                        <label class="mdc-floating-label">Confirm Password</label>
	                                    </div>
	                                    <div class="mdc-notched-outline__trailing"></div>
	                                </div>
	                            </div> 
	                            <div class="mdc-form-field mt-3 w-100">
	                                <div class="mdc-checkbox">
	                                    <input type="checkbox" class="mdc-checkbox__native-control" id="keep"/>
	                                    <div class="mdc-checkbox__background">
	                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
	                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
	                                        </svg>
	                                        <div class="mdc-checkbox__mixedmark"></div>
	                                    </div>
	                                    <div class="mdc-checkbox__ripple"></div>
	                                </div>
	                                <label for="keep" class="text-muted fw-500">Keep me signed in</label>
	                            </div> 
                              <div class="text-center mt-2"> 
                              
                                <button type="submit" name="submit_btn" id="submit_btn" class="mdc-button mdc-button--raised bg-accent">Change Password</button>
                            </div>  
                            
							</form>
                           
                       
						
						 <div class="row end-xs middle-xs"> 
                           
                        </div>
                    </div>                    
                </div>  
            </div>  
        </div> 
    </main> 
<?php 
	$this->load->view('layout/frontend/footer');
?>