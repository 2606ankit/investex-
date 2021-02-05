<?php 
	$this->load->view('layout/frontend/header');
?>
    <main>  

        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL; ?>assets/images/others/contact.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content">
                <h1 class="title" style=" text-align: center;">Upload Property</h1>
            </div>
        </div>

        
        <div class="px-3">  
            <div class="beatle-container">  
                <div class="row center-xs middle-xs my-5"> 
                    <div class="join mdc-card p-3 p-relative mw-600px col-md-7">
                     <div class="mdc-tab-bar-wrapper submit-property"> 
                        <div class="column center-xs middle-xs text-center">  
                            <h1 class="uppercase"> PROPERTY</h1>
                        </div>
                        <form action="<?php echo SITE_URL?>propertyRegistration" name="add_pro" id="add_pro" method="post" enctype="multipart/form-data" class="row">
                            
                             <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="pro_fullname" id="pro_fullname">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">שם מלא</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>      
                        
                               <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="pro_name" id="pro_name">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">PROPERTY NAME</label>
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
                                                        <label class="mdc-floating-label">סוג העסקה </label>
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
                                                        עִיר </label>
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
                                                        רְחוֹב </label>
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
                                                        סכום מבוקש להשקעה </label>
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
                                                        תשואה משוערת </label>
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
                                    
                                     <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea">
                                            <textarea class="mdc-text-field__input" rows="5" name="pro_text" id="pro_text"></textarea>
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
                                            <textarea class="mdc-text-field__input" rows="5" id="pro_details" name="pro_details"></textarea>
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
                        
                        
                            <div class="col-xs-12 p-2">
                                 <br>
                                   <a href="javascript:void(0)" onclick="$('#pro-image').click()" class="uplod_pero_img">Upload Property Image</a>                      
                                                
                                  
                                      <input type="file" id="pro-image" name="uploadimage[]" style="display: none;" class="form-control" multiple>
                                   <br><br>
                                   <div class="preview-images-zone"></div>
                            </div>             
                        
                            <div class="text-center mt-5"> 
                                <button class="mdc-button mdc-button--raised mdc-button mdc-button--raised cust_btn _bg_blu mdc-ripple-upgraded">המשך >></button>
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