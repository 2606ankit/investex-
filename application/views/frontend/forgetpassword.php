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
                    <div class="mdc-card p-3 p-relative mw-500px" style="width: 50%;">
                        <div class="column center-xs middle-xs text-center">  
                            <h1 class="uppercase">Forget Password</h1>

                            <a href="<?php echo SITE_URL?>join" class="mdc-button mdc-ripple-surface mdc-ripple-surface--accent accent-color normal w-100">
                                Don't have an account? Sign up now!
                            </a>

                        </div>
                        <?php if (!empty($error)){?><div style="padding:5px; font-size: 12px; background-color: #900; color:#FFF;border-radius: 4px;"><?php echo $error; ?></div><?php } ?>
                        <form action="<?php echo SITE_URL;?>forgetpassword" method="post" name="user_login" id="user_login">  
	                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
	                                <i class="material-icons mdc-text-field__icon text-muted">person</i>
	                                <input class="mdc-text-field__input" value="" required="required" name="foregetemail" id="foregetemail" type="email">
	                                <div class="mdc-notched-outline">
	                                    <div class="mdc-notched-outline__leading"></div>
	                                    <div class="mdc-notched-outline__notch">
	                                        <label class="mdc-floating-label">Email-Id</label>
	                                    </div>
	                                    <div class="mdc-notched-outline__trailing"></div>
	                                </div>
	                            </div>  
	                           
                              <div class="text-center mt-2"> 
                              
                                <button type="submit" name="submit_btn" id="submit_btn" class="mdc-button mdc-button--raised bg-accent">Submit</button>
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