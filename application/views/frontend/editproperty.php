<?php 
	$this->load->view('layout/frontend/header');
	//	echo '<pre>'; print_r($getprodata); die;
?>
	<main>  

<div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL; ?>assets/images/others/contact.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content">
                <h1 class="title" style=" text-align: center;">Edit property - <?php echo $getprodata[0]->property_name;  ?></h1>
              
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
                       <form action="<?php echo SITE_URL?>editproperty/<?php echo base64_encode($proid); ?>" name="add_pro" id="add_pro" method="post" enctype="multipart/form-data" >
							
                               		<div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="pro_name" id="pro_name" value="<?php echo $getprodata[0]->property_name;  ?>">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Property Name</label>
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
                                                	 <li class="mdc-list-item transation_type" data-value="<?php echo $getprodata[0]->transation_id; ?>"><?php echo $getprodata[0]->transaction_name_en; ?></li>
                                                     <?php 
                                                        foreach ($transaction_type as $key=>$val){
                                                        	if ($val->id != $getprodata[0]->transation_id){
                                                    ?>
                                                       <li class="mdc-list-item transation_type" data-value="<?php echo $val->id; ?>"><?php echo $val->transaction_name_en; ?></li>
                                                    <?php 
                                                    		}
                                                        }
                                                    ?>
                                                    
                                                </ul>
                                            </div>
											 <input type="hidden" name="pro_transaction_type" id="pro_transaction_type" value="<?php echo $getprodata[0]->transation_id; ?>">
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
                                                     <li class="mdc-list-item cityname" data-value="<?php echo $getprodata[0]->cityid; ?>"><?php echo $getprodata[0]->cityname;?></li>                                                     
                                                    <?php 
                                                        foreach ($allisrealcountry as $k=>$v){
                                                        	if ($v->id != $getprodata[0]->cityid){
                                                    ?>
                                                        <li class="mdc-list-item cityname" data-value="<?php echo $v->id; ?>"><?php echo $v->name;?></li> 
                                                    <?php 
                                                			}
                                                        }
                                                    ?>
                                                </ul>
                                                
                                            </div>
                                            <input type="hidden" name="cityvalue" id="cityvalue" value="<?php echo $getprodata[0]->cityid; ?>">
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
                                                    <li class="mdc-list-item cityname" data-value="<?php echo $getprodata[0]->strid; ?>"><?php echo $getprodata[0]->street_name;?></li>   
                                                </ul>
                                            </div>
                                              <input type="hidden" name="streetval" id="streetval" value="<?php echo $getprodata[0]->strid; ?>">
                                        </div>
                                    </div>

						 			<div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="pro_price" id="pro_price" value="<?php echo $getprodata[0]->property_price; ?>">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Property price</label>
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
                                                        <label class="mdc-floating-label">
                                                        סכום מבוקש להשקעה </label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""><?php echo $getprodata[0]->property_investment_amount; ?></li>
                                                    <li class="mdc-list-item request_amount" data-value="500000"> 500,000 ש"ח </li>
                                                    <li class="mdc-list-item request_amount" data-value="100000-500000">100-500 ש"ח</li>
                                                    <li class="mdc-list-item request_amount" data-value="100000"> 100,000 ש"ח</li>
                                                </ul>
                                            </div>
                                            
                                            
                                            <input type="hidden" name="pro_request_amount" id="pro_request_amount" value="<?php echo $getprodata[0]->property_investment_amount; ?>">
                                            
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
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""><?php echo $getprodata[0]->property_estimated_return; ?></li>
                                                    <li class="mdc-list-item estimate_val" data-value="3"> עד 3% </li>
                                                    <li class="mdc-list-item estimate_val" data-value="3-10">3-10% </li>
                                                    <li class="mdc-list-item estimate_val" data-value="10"> 10% ומעלה</li>
                                                </ul>
                                            </div>
                                            
                                            <input type="hidden" name="pro_estimate_return" id="pro_estimate_return" value="<?php echo $getprodata[0]->property_estimated_return; ?>"> 
                                            
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
                                                        מצב נכס </label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value="<?php echo Open_For_Investement; ?>"></li>
                                                    <li class="mdc-list-item property_status" data-value="<?php echo Open_For_Investement; ?>">Open For Invesntment</li>
                                                    <li class="mdc-list-item property_status" data-value="<?php echo DRAFTS; ?>">Drafts</li>
                                                </ul>
                                            </div>
                                            
                                            
                                            <input type="hidden" name="property_statusval" id="property_statusval" value="<?php echo Open_For_Investement; ?>">
                                            
                                        </div>
                                    </div>

									 <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea">
                                            <textarea class="mdc-text-field__input" rows="5" name="pro_text" id="pro_text"><?php echo $getprodata[0]->property_text; ?></textarea>
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
                                            <textarea class="mdc-text-field__input" rows="5" id="pro_details" name="pro_details"><?php echo $getprodata[0]->property_details; ?></textarea>
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
										<div class="example-container">
										     <div id="MapLocation1" style="height: 350px"></div>
										        <label class="input">
										          <input type="hidden" id="Latitude" placeholder="Latitude" name="Latitude" value="<?php echo $getprodata[0]->property_latitude; ?>"/>
										          <!-- @Html.TextBoxFor(m => m.Location.Latitude, new {id = "Latitude", placeholder = "Latitude"}) -->
										        </label>
										        <label class="input">
										          <input type="hidden" id="Longitude" placeholder="Longitude" name="Longitude" value="<?php echo $getprodata[0]->property_longtitue; ?>" />
										          <!-- @Html.TextBoxFor(m => m.Location.Longitude, new {id = "Longitude", placeholder = "Longitude"}) -->
										        </label>
										</div>
									</div>



						
						
							<div class="col-xs-12 p-2">
							 <br>
							   <a href="javascript:void(0)" onclick="$('#pro-image').click()" class="uplod_pero_img">Upload Property Image</a>						
							      <input type="file" id="pro-image" name="uploadimage[]" style="display: none;" class="form-control" multiple="multiple">
							   <br><br>
							   <div class="preview-images-zone">
							   	<?php 
							   			$image = explode("|",$getprodata[0]->property_image);
							   			foreach ($image as $key=>$val){
							   	?>
									<img src="<?php echo FRONTEND_URL;?>property_image/<?php echo $val?>"style="padding:5px;border:1px solid #228be6; border-radius:4px;width:100px;" >
							   <?php }?>
							   </div>
		 					</div>		
		 					<textarea name="old_image" id="old_image"><?php echo $getprodata[0]->property_image; ?></textarea>
						
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