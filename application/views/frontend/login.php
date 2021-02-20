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
                        <form action="<?php echo SITE_URL;?>login" method="post" name="user_login" id="user_login">  
	                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
	                                <i class="material-icons mdc-text-field__icon text-muted">person</i>
	                                <input class="mdc-text-field__input" value="" required="required" name="username" id="username">
	                                <div class="mdc-notched-outline">
	                                    <div class="mdc-notched-outline__leading"></div>
	                                    <div class="mdc-notched-outline__notch">
	                                        <label class="mdc-floating-label">Username</label>
	                                    </div>
	                                    <div class="mdc-notched-outline__trailing"></div>
	                                </div>
	                            </div>  
	                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
	                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
	                                <i class="material-icons mdc-text-field__icon text-muted" tabindex="1" id="password-toggle">visibility_off</i>
	                                <input class="mdc-text-field__input" value="" required="required" type="password" name="user_pass" id="user_pass">
	                                <div class="mdc-notched-outline">
	                                    <div class="mdc-notched-outline__leading"></div>
	                                    <div class="mdc-notched-outline__notch">
	                                        <label class="mdc-floating-label">Password</label>
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
                              
                                <button type="submit" name="submit_btn" id="submit_btn" class="mdc-button mdc-button--raised bg-accent">Login</button>
                            </div>  
                            
							</form>
                            <!--<div class="row flex-nowrap between-xs middle-xs mt-3">
                                <div class="divider p-relative w-100"></div>
                                <h3 class="text-muted ws-nowrap fw-500 p-2">or Sign in with one click</h3>                       
                                <div class="divider p-relative w-100"></div>
                            </div>  
                            <div class="text-center py-3"> 
                                
								<div class="text-center py-3">
							
                                <a href="javascript:void(0);" class="w100per mdc-fab mdc-fab--mini primary facebook_bg mdc-ripple-upgraded">
                                    <span class="mdc-fab__ripple"></span>
                                    <svg class="material-icons mat-icon-md" viewBox="0 0 24 24">
                                        <path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"></path>
                                    </svg>Connect with Facebook 
                                </a>
                             

 								
                                <a href="javascript:void(0);" class="w100per mdc-fab mdc-fab--mini primary google_bg mdc-ripple-upgraded" style="--mdc-ripple-fg-size:174px; --mdc-ripple-fg-scale:1.74291; --mdc-ripple-fg-translate-start:175.4px, -57px; --mdc-ripple-fg-translate-end:58.2625px, -67px;">
                                    <span class="mdc-fab__ripple"></span>
                                    <svg class="material-icons mat-icon-md" viewBox="0 0 24 24">
                                        <path d="M21.35,11.1H12.18V13.83H18.69C18.36,17.64 15.19,19.27 12.19,19.27C8.36,19.27 5,16.25 5,12C5,7.9 8.2,4.73 12.2,4.73C15.29,4.73 17.1,6.7 17.1,6.7L19,4.72C19,4.72 16.56,2 12.1,2C6.42,2 2.03,6.8 2.03,12C2.03,17.05 6.16,22 12.25,22C17.6,22 21.5,18.33 21.5,12.91C21.5,11.76 21.35,11.1 21.35,11.1V11.1Z"></path>
                                    </svg>Connect with Google
                                </a>   
                                </div>
							 
                            </div>  -->   
                        
                        <div class="row end-xs middle-xs"> 
                           
                            <a href="<?php echo SITE_URL; ?>forgetpassword" class="mdc-button normal mar_0_a">
                                <span class="mdc-button__ripple"></span>
                                <i class="material-icons mdc-button__icon">vpn_key</i>
                                <span class="mdc-button__label">Forget Password</span> 
                            </a>  							
                        </div>
						
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