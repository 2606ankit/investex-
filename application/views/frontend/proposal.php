<?php 
    $this->load->view('layout/frontend/header');
   // echo '<pre>'; print_r($matchproperty); die;
?>
<main>  

<div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL; ?>assets/images/others/contact.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content">
                <h1 class="title" style=" text-align: center;">Upload PROPOSAL </h1>
              
            </div>
        </div>

		
        <div class="px-3">  
            <div class="beatle-container">  
                <div class="row center-xs middle-xs my-5"> 
                    <div class="join mdc-card p-3 p-relative mw-600px col-md-7">
					 <div class="mdc-tab-bar-wrapper submit-property"> 
                        <div class="column center-xs middle-xs text-center">  
                            <h1 class="uppercase"> PROPOSAL</h1>
                           
                        </div>
                        <form action="<?php echo SITE_URL?>proposal" name="add_proposal" id="add_proposal" class="row" method="post">
					 
						
									<div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="proposal_name" id="proposal_name">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Full Name</label>
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
                                                        <label class="mdc-floating-label"> Transactions Type</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                             <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                     <?php 
                                                        foreach ($transaction_type as $key=>$val){
                                                    ?>
                                                       <li class="mdc-list-item transation_type" data-value="<?php echo $val->id; ?>"><?php echo $val->transaction_name_en; ?></li>
                                                    <?php 
                                                        }
                                                    ?> 
                                                </ul>
                                            </div>
											 <input type="hidden" name="pro_transaction_type" id="pro_transaction_type">
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
														Country  </label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                     
                                                    <?php 
                                                        foreach ($allisrealcountry as $k=>$v){
                                                    ?>
                                                        <li class="mdc-list-item cityname" data-value="<?php echo $v->id; ?>"><?php echo $v->name;?></li> 
                                                    <?php 
                                                        }
                                                    ?>
                                                </ul>
                                                
                                            </div>
                                            <input type="hidden" name="cityvalue" id="cityvalue">
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
														City </label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list" id="streetdiv">
                                                   
                                                </ul>
                                            </div>
                                              <input type="hidden" name="streetval" id="streetval">
											 
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
														 Requested amount for investment  </label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                     <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item request_amount" data-value="500000"> 500,000 ש"ח </li>
                                                    <li class="mdc-list-item request_amount" data-value="100000-500000">100-500 ש"ח</li>
                                                    <li class="mdc-list-item request_amount" data-value="100000"> 100,000 ש"ח</li>
                                                </ul>
                                            </div>
											  <input type="hidden" name="pro_request_amount" id="pro_request_amount">
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
															Estimated return
														</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                             <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item estimate_val" data-value="3"> עד 3% </li>
                                                    <li class="mdc-list-item estimate_val" data-value="3-10">3-10% </li>
                                                    <li class="mdc-list-item estimate_val" data-value="10"> 10% ומעלה</li>
                                                </ul>
                                            </div>
                                            
                                            <input type="hidden" name="pro_estimate_return" id="pro_estimate_return"> 
                                        </div>
                                    </div>
									 
                            <div class="text-center mt-5"> 
                            	<button type="submit" class="mdc-button mdc-button--raised mdc-button mdc-button--raised cust_btn _bg_blu mdc-ripple-upgraded">המשך ></button>
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
   // echo '<pre>'; print_r($matchproperty); die;
?>