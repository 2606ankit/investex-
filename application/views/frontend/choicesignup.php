<?php 
	$this->load->view('layout/frontend/header');
?>
 <main>  

	<div class="header-image-wrapper">
	    <div class="bg" style="background-image: url('<?php echo ASSETS_URL; ?>assets/images/others/contact.jpg');"></div>
	    <div class="mask"></div>            
	    <div class="header-image-content">
	        <h1 class="title" style=" text-align: center;">הצטרפות ל - INVESTEX</h1>
	        <p class="desc">זירת היזמים ומשקיעי הנדל"ן הגדולה בישראל</p> 
	    </div>
	</div>

		
        <div class="px-3">  
            <div class="beatle-container">  
                <div class="row center-xs middle-xs my-5"> 
                    <div class="join mdc-card p-3 p-relative mw-600px col-md-7">
                        <div class="column center-xs middle-xs text-center">  
                            <!--<h1 class="uppercase"> במקום התחבר עם לינקדין יהיה התחבר עם גוגל</h1> -->
                         </div>
	                    	<div class="text-center py-3">
						     <a href="<?php echo SITE_URL?>dealerjoin" class="mdc-fab mdc-fab--mini primary facebook_bg">
	                                <span class="mdc-fab__ripple"></span>
	                                <svg class="material-icons mat-icon-md" viewBox="0 0 24 24">
	                                 
	                                </svg>Sign-up as a Dealer 
	                            </a>
	                            <a href="<?php echo SITE_URL?>investorjoin" class="mdc-fab mdc-fab--mini primary google_bg">
	                                <span class="mdc-fab__ripple"></span>
	                                <svg class="material-icons mat-icon-md" viewBox="0 0 24 24">
	                                  
	                                </svg>Sign-up as a Investor
	                            </a>   
	                        </div> 
                    </div>                    
                </div>  
            </div>  
        </div> 
    </main> 
<?php 
	$this->load->view('layout/frontend/footer');
?>