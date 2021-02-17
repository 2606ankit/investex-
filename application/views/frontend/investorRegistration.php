<?php 
	$this->load->view('layout/frontend/header');
?>
  <main>  

<div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL; ?>assets/images/others/contact.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content">
                <h1 class="title" style=" text-align: center;">investor's registration</h1>
              
            </div>
        </div>

		
        <div class="px-3">  
            <div class="beatle-container">  
                <div class="row center-xs middle-xs my-5"> 
                    <div class="join mdc-card p-3 p-relative mw-600px col-md-7">
					 <div class="mdc-tab-bar-wrapper submit-property"> 
                        <div class="column center-xs middle-xs text-center">  
                            <h1 class="uppercase"> Preferences Form</h1>
                           
                        </div>
                        <form action="javascript:void(0);" id="sp-basic-form" class="row">
								
								
		
		
		
							<div class="col-xs-12 col-sm-12 p-2 profile_upoad">
                               <div class="small-12 medium-2 large-2 columns">
                                 <div class="circle">
                                   <!-- User Profile Image -->
                                   <img class="profile-pic" src="assets/images/agents/a-2.jpg">

                                   <!-- Default Image -->
                                   <!-- <i class="fa fa-user fa-5x"></i> -->
                                 </div>
                                 <div class="p-image">
                                   <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*"/>
                                 </div>
                              </div>
                            </div>
						
				<div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">שם מלא</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 		
						
                               
                        <div class="col-xs-12 col-sm-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">סוג העסקה (דרופ דאון מולטי סלקט)</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">עסקת נדל"ן מניב</li>
                                                    <li class="mdc-list-item" data-value="2">עסקת נדל"ן פליפ</li>
                                                    <li class="mdc-list-item" data-value="3">עסקת נדל"ן אקזיט</li>
                                                </ul>
                                            </div>
											
											
											
											
                                        </div>
                                    </div>
						
						
						
						
						<div class="col-xs-12 col-sm-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">
														איזור בארץ (דרופ דאון מולטי סלקט)</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">aaaaaaaaaaa</li>
                                                    <li class="mdc-list-item" data-value="2">aaaaaaaaaaa</li>
                                                    <li class="mdc-list-item" data-value="3">aaaaaaaaaaa</li>
                                                </ul>
                                            </div>
											
											
											
											
                                        </div>
                                    </div>
						
						
						<div class="col-xs-12 col-sm-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">
														סכום מבוקש להשקעה (דרופ דאון)</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1"> 500,000 ש"ח </li>
                                                    <li class="mdc-list-item" data-value="2">100-500 ש"ח</li>
                                                    <li class="mdc-list-item" data-value="3"> 100,000 ש"ח</li>
                                                </ul>
                                            </div>
											
											
											
											
                                        </div>
                                    </div>
									
									<div class="col-xs-12 col-sm-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">
														תשואה משוערת </label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1"> עד 3% </li>
                                                    <li class="mdc-list-item" data-value="2">3-10% </li>
                                                    <li class="mdc-list-item" data-value="3"> 10% ומעלה</li>
                                                </ul>
                                            </div>
											
											
											
											
                                        </div>
                                    </div>
									
									 <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea">
                                            <textarea class="mdc-text-field__input" rows="5"></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">פרטי הפרוייקט - (כותרת - טקסט חופשי מוגבל 100 תווים)</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
									
									
									<div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea">
                                            <textarea class="mdc-text-field__input" rows="5"></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">
													תיאור הפרויקט - טקסט חופשי מוגבל 500 תווים</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
						
						
						
                            <div class="text-center mt-5"> 
                                <a href="investor-registration-submit.html" class="mdc-button mdc-button--raised mdc-button mdc-button--raised cust_btn _bg_blu mdc-ripple-upgraded" type="submit">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">המשך >></span> 
                                </a>
                            </div>  
                          
						
						</form>
                      
                    </div>
					</div>                      
                </div>  
            </div>  
        </div> 
    </main> 

<?php 
	$this->load->view('layout/frontend/footer');
?>