<?php 
	$this->load->view('layout/frontend/header');
	$created_date = date('d-M-Y',strtotime($propertybyId[0]->created_date));

?>
<main>

	<div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL; ?>assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <br> <br>
        </div> 
 
        <div class="px-3 singla_view">  
            <div class="beatle-container">  
                <div class="page-drawer-container single-property mt-3"> 
                    <div class="page-sidenav-content w90per">
					
					<div class="w100">
					<a href="<?php echo SITE_URL?>dealerdashboard" class="w115 mdc-button mdc-button--raised d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex mdc-ripple-upgraded">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label"> Back <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
 						</span> 
                    </a>
						<div class="view w115"> <i class="fa fa-eye" aria-hidden="true"></i>0</div>					
						<div class="like_b w115"><i class="fa fa-heart" aria-hidden="true"></i>0</div>
						
                    </div>   
						
						
						
					<div class="" style="display: flex;float: left;width: 100%;">
						<div class="col-md-4">
						  <div class="mdc-card property-item grid-item column-4 full-width-page">
							  <div class="features mt-3 pa_09">                    
								 <div>
                                <h2 class="uppercase"><?php echo $propertybyId[0]->property_name; ?></h2>
                                <p class="row flex-nowrap address mb-0">
                                    <i class="material-icons text-muted">location_on</i>
                                    <span class="fw-500 text-muted"><?php echo $propertybyId[0]->cityname.','.$propertybyId[0]->street_name; ?>, israel</span>
                                </p>
								<p class="" style="  margin: 0px;"><?php echo $propertybyId[0]->transaction_name_en; ?></p>
								<a href="javascript:;" data-id="<?php echo $propertybyId[0]->proId;?>" class="delete_btn deleteproperty"><i class="fa fa-trash" aria-hidden="true"></i></a>

								<a href="<?php echo SITE_URL?>editproperty/<?php echo base64_encode($propertybyId[0]->proId);?>" data-id="" class="delete_btn"><i class="fa fa-pencil-square" aria-hidden="true"></i> </a>
								 
                            </div>
							
							   </div>   
						   </div>
						</div>
						<div class="col-md-4">
						  <div class="mdc-card property-item grid-item column-4 full-width-page">
							  <div class="features mt-3 pa_09">                    
								  <p>
								  	<a href="#"><span>Total Investment Requested </span><span><?php echo $propertybyId[0]->property_investment_amount; ?> $</span></a>
								  </p>
								   <p><a href="#"><span>Investment Raised</span><span>0 $</span></p>
								   <p><span>Estimated Returns</span><span><?php echo $propertybyId[0]->property_estimated_return; ?>%</span></p>
								   <p><span>Status</span><span>
								   		<?php if ($propertybyId[0]->status == Open_For_Investement){ echo 'Open For Investement';} elseif ($propertybyId[0]->status == Close_for_Investment ) { echo 'Close for Investment'; }
								   		elseif ($propertybyId[0]->status == DRAFTS) { echo 'Draft'; }  ?>
								   </span></p>
							   </div>   
						   </div>
						</div>
						
						<div class="col-md-4">
						  <div class="mdc-card property-item grid-item column-4 full-width-page">
							  <div class="features mt-3 pa_09">                    
								  <p><a href="#"><span>Under Consideration </span><span>0</span></a></p>
								   <p><a href="#"><span>Investors Matched</span><span>0</span></a></p>
								   <p><a href="#"><span>Active Investors</span><span>0</span></a></p>
								   <p><span>Upload Date</span><span><?php echo $created_date;?></span></p>
							   </div>   
						   </div>
						</div>
						 
					</div>
					 			 			
                        <div class="mdc-card p-3 mt-3">  
                            <div class="main-carousel mb-3"> 
                                
                                <div class="swiper-container">
                                    <div class="swiper-wrapper h250"> 
                                    	<?php
                                    	//echo $propertybyId[0]->property_image; 
                                    		$proimage = explode('|',$propertybyId[0]->property_image);
                                    		foreach($proimage as $k=>$v){
                                    	?>
	                                        <div class="swiper-slide">
	                                           <img src="<?php echo FRONTEND_URL?>property_image/<?php echo $v;?>" alt="slide image">
	                                        </div> 
                                        <?php
                                        	}
                                        ?>
 
                                            
                                    </div>     
                                    <button class="swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span> 
                                    </button>
                                    <button class="swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary"> 
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span> 
                                    </button>   
                                </div>
                            </div> 
 
                        </div>
                        <div class="mdc-card p-3 mt-3"> 
                            <h2 class="uppercase text-center fw-500 mb-2">Project Details</h2>  
                            <div class="row details">
                              <p><?php echo $propertybyId[0]->property_details; ?></p> 
                            </div>   
                        </div>
                        
						
						 <div class="mdc-card p-3 mt-3"> 
                            <h2 class="uppercase text-center fw-500 mb-2">Project Description</h2>  
                            <div class="row details">
                            	<p><?php echo $propertybyId[0]->property_text; ?></p>

                            </div>   
                        </div>
						 <input type="hidden" name="lat" id="lat" value="<?php echo $propertybyId[0]->property_latitude; ?>">
       						<input type="hidden" name="long" id="long" value="<?php echo $propertybyId[0]->property_longtitue; ?>">
                        <div class="mdc-card p-3 mt-3"> 
                        	  <h2 class="uppercase text-center fw-500 mb-2">Location</h2> 
                        	<div class="col-xs-12 p-2">
							<div class="example-container">
							     <div id="MapLocation2" style="height: 350px">asdfsad</div>
							        <label class="input">
							          <input type="hidden" id="Latitude" placeholder="Latitude" name="Latitude" value="31.0461"/>
							          <!-- @Html.TextBoxFor(m => m.Location.Latitude, new {id = "Latitude", placeholder = "Latitude"}) -->
							        </label>
							        <label class="input">
							          <input type="hidden" id="Longitude" placeholder="Longitude" name="Longitude" value="34.8516" />
							          <!-- @Html.TextBoxFor(m => m.Location.Longitude, new {id = "Longitude", placeholder = "Longitude"}) -->
							        </label>
							</div>
						</div>

                          
                           <!--<iframe class="beatle_location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.9516835229556!2d72.53203961532367!3d23.062232884933106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b270b42b8cd%3A0x6f7633431c4a4cad!2sBeatle+Analytics!5e0!3m2!1sen!2sin!4v1560498989950!5m2!1sen!2sin" 
						    height="300" frameborder="0" style="border:0; width:100%;" allowfullscreen=""></iframe> -->
                        </div>
                       
                    </div>  
                   
                   
                </div> 
            </div>  
        </div>  
       
        
    </main>
     
<?php 
	$this->load->view('layout/frontend/footer');
?>