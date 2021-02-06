<?php 
	$this->load->view('layout/frontend/header');
?>

  <style>
    .errorTxt{
  min-height: 20px;
  text-align: left;
  font-size: 12px;
  color:#900;
}
pan.arrow {
    margin-left: 6px;
    height:17px;
    background: url('http://i45.tinypic.com/f9ifz6.png') no-repeat left center;
}
label.error {
    height:17px; 
    color:#900;
    margin-left:9px;
    margin-top: 30px !important; 
    width: 100% !important;
    padding:1px 5px 0px 5px;
    font-size:small;
}
</style>
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
                            <h1 class="uppercase"> Sign up as a Investor</h1>
                           
                        </div>
                        <form action="<?php echo SITE_URL?>dealerjoin" method="post" name="dealer_join" id="dealer_join"> 

                               <div class="text-center py-3">
                                 <a href="javascript:void(0);" class="mdc-fab mdc-fab--mini primary facebook_bg">
                                        <span class="mdc-fab__ripple"></span>
                                        <svg class="material-icons mat-icon-md" viewBox="0 0 24 24">
                                            <path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
                                        </svg>Connect with Facebook 
                                    </a>
                                 

                                    
                                    <a href="javascript:void(0);" class="mdc-fab mdc-fab--mini primary google_bg">
                                        <span class="mdc-fab__ripple"></span>
                                        <svg class="material-icons mat-icon-md" viewBox="0 0 24 24">
                                            <path d="M21.35,11.1H12.18V13.83H18.69C18.36,17.64 15.19,19.27 12.19,19.27C8.36,19.27 5,16.25 5,12C5,7.9 8.2,4.73 12.2,4.73C15.29,4.73 17.1,6.7 17.1,6.7L19,4.72C19,4.72 16.56,2 12.1,2C6.42,2 2.03,6.8 2.03,12C2.03,17.05 6.16,22 12.25,22C17.6,22 21.5,18.33 21.5,12.91C21.5,11.76 21.35,11.1 21.35,11.1V11.1Z" />
                                        </svg>Connect with Google
                                    </a>   
                                </div> 
                            
                        
                        
                        
                          <div class="row flex-nowrap between-xs middle-xs mt-3">
                                <div class="divider p-relative w-100"></div>
                                <h1 class="text-muted ws-nowrap fw-500 p-2">או</h1>                       
                                <div class="divider p-relative w-100"></div>
                            </div>  
                               
                         <div class="errorTxt"></div>
                        
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                              
                                <input class="mdc-text-field__input" type="text" name="dealer_firstname" id="dealer_fullname">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">First Name</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  

                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                             
                                <input class="mdc-text-field__input" type="text" name="dealer_lastname" id="dealer_lastname">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Last Name</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  
                            
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                             
                                <input class="mdc-text-field__input" type="text" id="dealer_miles" name="dealer_miles">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Miles</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  
                            
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                             
                                <input class="mdc-text-field__input" type="email" id="dealer_email" name="dealer_email">
                                <div class="mdc-notched-outline" >
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Email</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>

                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                             
                                <input class="mdc-text-field__input" type="text" id="dealer_phone" name="dealer_phone">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Mobile Phone</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  
                            
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                             
                                <input class="mdc-text-field__input" type="text" id="dealer_username" name="dealer_username">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Choose Username</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  
                            
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                             
                                <input class="mdc-text-field__input" type="password" name="dealer_password" id="dealer_password">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Choose Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                             
                                <input class="mdc-text-field__input" type="password" name="dealer_repassword" id="dealer_repassword">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Re-Enter Password</label>
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
                            
                            
                            <div class="mdc-form-field mt-3 w-100">
                                
                                <h2 for="keep" class="text-muted fw-500">בלחיצה הינך מצהיר כי קראת את תנאי השימוש ואת הצהרת הפרטיות וכי אתה מסכים להם במלואם.</h2>
                            </div>
                            
                            <div class="text-center mt-5"> 
                                <button type="submit" class="mdc-button mdc-button--raised bg-accent" type="submit">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">הצטרפות >></span> 

                                 </button>
                            </div>  
                          
                        
                        </form>
                        <div class="row end-xs middle-xs"> 
                            <a href="#" class="mdc-button normal">
                                <span class="mdc-button__ripple"></span>
                                <i class="material-icons mdc-button__icon">vpn_key</i>
                                <span class="mdc-button__label">Reset Password</span> 
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