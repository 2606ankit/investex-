<?php 
	$this->load->view('layout/frontend/header');
   // echo '<pre>'; print_r($userdata); die;
?>

<main>   
	
	<div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL; ?>assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <br> <br>
        </div> 
		 
        <div class="px-3 dealer-dashboard">  
            <div class="beatle-container-- row between-xs middle-xs h-100">   
                <div class="page-drawer-container mt-3 col-md-12">
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav col-md-2">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card"> 
                            <div class="row start-xs middle-xs p-3">
							 <?php 
                             //echo $userdata['userloginstatus'];
                                if ($userdata['userloginstatus'] == LOGIN_STATUS_ACTIVE){echo '<span class="act_live_dot"></span>';}else { }?>
                                <img src="<?php echo FRONTEND_URL; ?>profile_image/<?php echo $userdata['userimage']; ?>" alt="user-image" class="avatar_bx">
                                <div class="text-muted fw-500 mx-3">
								<h1 class="blu"><?php echo $userdata['fname'].' '.$userdata['lname']?></h1>
								<p>
								<span class="color_yellow">Dealer</span><br>
										<label style="font-size: 12px;"><?php echo $userdata['username'];?></label><br>
										<label style="font-size: 12px;"><?php echo $userdata['useremail']?></label><br>
										<label style="font-size: 12px;"><?php echo $userdata['userphone']?></label><br>	
								</p>
								</div> 
								
                            </div>
                            <hr class="mdc-list-divider m-0">
                            <ul class="mdc-list">
							
							
							 	<li>
                                    <a href="<?php echo SITE_URL?>dealerdashboard" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">
											<i class="fa fa-tachometer" aria-hidden="true"></i>
										</span>
                                        <span class="mdc-list-item__text">Dashboard</span>
                                    </a>
                                </li>
								
								
                                <li>
                                    <a href="<?php echo SITE_URL?>userprofile" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">person</span>
                                        <span class="mdc-list-item__text">Profile</span>
                                    </a>
                                </li>
                                
                               
                                <li>
                                    <a href="<?php echo SITE_URL?>propertyRegistration" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">add_circle</span>
                                        <span class="mdc-list-item__text">Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo SITE_URL?>signout" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">power_settings_new</span>
                                        <span class="mdc-list-item__text">Logout</span>
                                    </a>
                                </li>
                            </ul>  
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                    <div class="pad_15 col-md-10">
						
                        <div class="mdc-card p-3">
						
						
                            
							
      <div class="col-md-12">
	  
	
    <div class="row margin_b_10">                 
    <div class="col-md-3 col-lg-3 col-xl-3">
    <section class="panel panel-featured-left panel-featured-primary">
        <div class="panel-body">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon pa-t-10">
                    <div class="summary-icon bg-primary">
                       <img src="<?php echo ASSETS_URL; ?>pro.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">MY PROPERTIES</h4>
                        <div class="info">
                            <strong class="amount"><?php echo count($allproperty); ?></strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="javascript:;" class="text-muted text-uppercase">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


 <div class="col-md-3 col-lg-3 col-xl-3">
    <section class="panel panel-featured-left panel-featured-primary">
        <div class="panel-body">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon pa-t-10">
                    <div class="summary-icon bg-primary bg_green">
                        <img src="<?php echo ASSETS_URL; ?>pro.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">ACTIVE  PROPERTIES</h4>
                        <div class="info">
                            <strong class="amount"><?php echo count($getOpenStatuspro);?></strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="javascript:;" class="text-muted text-uppercase">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
	
	<div class="col-md-3 col-lg-3 col-xl-3">
    <section class="panel panel-featured-left panel-featured-primary">
        <div class="panel-body">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon pa-t-10">
                    <div class="summary-icon bg-primary bg_red">
                       <img src="<?php echo ASSETS_URL; ?>dol.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">INVESTMENT REQUIRED</h4>
                        <div class="info">
                            <strong class="amount">$ <?php echo array_sum($getOpenStatusInvestement); ?></strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="javascript:;" class="text-muted text-uppercase">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
	
	<div class="col-md-3 col-lg-3 col-xl-3">
    <section class="panel panel-featured-left panel-featured-primary">
        <div class="panel-body">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon pa-t-10">
                    <div class="summary-icon bg-primary bg_yellow">
                       <img src="<?php echo ASSETS_URL; ?>dol.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">INVESTMENT REISED</h4>
                        <div class="info">
                            <strong class="amount">$ 0</strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="javascript:;" class="text-muted text-uppercase">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
	
	

        </div>
		
			<div class="row ">                 
					    <div class="col-md-3 col-lg-3 col-xl-3">
					    <section class="panel panel-featured-left panel-featured-primary">
					        <div class="panel-body">
					            <div class="widget-summary">
					                <div class="widget-summary-col widget-summary-col-icon pa-t-10">
					                    <div class="summary-icon bg-primary bg_gre">
					                       <img src="<?php echo ASSETS_URL; ?>msg.png">
					                    </div>
					                </div>
					                <div class="widget-summary-col">
					                    <div class="summary">
					                        <h4 class="title">MESSAGES</h4>
					                        <div class="info">
					                            <strong class="amount">0</strong>
					                            
					                        </div>
					                    </div>
					                    <div class="summary-footer">
					                        <a href="javascript:;" class="text-muted text-uppercase">(view all)</a>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </section>
					    </div>


					 <div class="col-md-3 col-lg-3 col-xl-3">
					    <section class="panel panel-featured-left panel-featured-primary">
					        <div class="panel-body">
					            <div class="widget-summary">
					                <div class="widget-summary-col widget-summary-col-icon pa-t-10">
					                    <div class="summary-icon bg-primary bg_maru">
					                        <img src="<?php echo ASSETS_URL; ?>use.png">
					                    </div>
					                </div>
					                <div class="widget-summary-col">
					                    <div class="summary">
					                        <h4 class="title">INVESTORS MATCHED</h4>
					                        <div class="info">
					                            <strong class="amount">0</strong>
					                            
					                        </div>
					                    </div>
					                    <div class="summary-footer">
					                        <a href="javascript:;" class="text-muted text-uppercase">(view all)</a>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </section>
					    </div>
	
						<div class="col-md-3 col-lg-3 col-xl-3">
					    <section class="panel panel-featured-left panel-featured-primary">
					        <div class="panel-body">
					            <div class="widget-summary">
					                <div class="widget-summary-col widget-summary-col-icon pa-t-10">
					                    <div class="summary-icon bg-primary bg-primary">
					                        <i class="fa fa-life-ring"></i>
					                    </div>
					                </div>
					                <div class="widget-summary-col">
					                    <div class="summary">
					                        <h4 class="title">UNDER CONSIDERATION</h4>
					                        <div class="info">
					                            <strong class="amount">0</strong>
					                            
					                        </div>
					                    </div>
					                    <div class="summary-footer">
					                        <a href="javascript:;" class="text-muted text-uppercase">(view all)</a>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </section>
					    </div>
						
						<div class="col-md-3 col-lg-3 col-xl-3">
					    <section class="panel panel-featured-left panel-featured-primary">
					        <div class="panel-body">
					            <div class="widget-summary w50p" style="border-right: 1px solid;margin-top: 11px;">
					                <div class="widget-summary-col widget-summary-col-icon">
					                    <div class="view">
					                       <i class="fa fa-eye" aria-hidden="true"></i>
										</div>
										<h1>0k</h1>
					                </div>
					               
					            </div>
								
								<div class="widget-summary w50p" style="margin-top: 11px;">
					                <div class="widget-summary-col widget-summary-col-icon">
					                    <div class="like_b">
					                       <i class="fa fa-heart" aria-hidden="true"></i>
					                    </div>
											<h1>0k</h1>
					                </div>
					               
					            </div>
								
					        </div>
					    </section>
					    </div>
	
	

        </div>
		
        </div>
       
    
		
							
							
							
                            <div class="row border-0 w-100 mt-3 ">
                                 <input class="search" type="text" class="form-control" placeholder="Search" id="usr"> 
								 <a href="javascript:;" class="detail_table">View In Detail</a>
								<div class="mdc-data-table border-0 w-100 mt-1">
                                <table class="table-responsive" aria-label="Dessert calories" style="width: 100%;">
                                    <thead>
                                        <tr class="mdc-data-table__header-row">
                                            <th class="mdc-data-table__header-cell">S.No</th>
                                            <th class="mdc-data-table__header-cell">PROPERTY NAME</th>
                                            <th class="mdc-data-table__header-cell">LOCATION</th>
											<th class="mdc-data-table__header-cell">UPLOAD DATE </th>
											<th class="mdc-data-table__header-cell">VIEW</th>
											<th class="mdc-data-table__header-cell">LIKE</th>
											<th class="mdc-data-table__header-cell">STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody class="mdc-data-table__content s">
                                    	<?php 
                                    		if (!empty($allproperty)){
                                    			foreach ($allproperty as $key=>$val)
                                    			{
                                    				$date = date("d-M-Y",strtotime($val->created_date));
                                    				$like = '0';	
                                    				$view = '0';	
                                    				if ($val->status == Open_For_Investement){
                                    					$status = '<label style="color:green !important;">Open For Investement<label>';
                                    				}else if ($val->status == Close_for_Investment){
                                    					$status = '<label>Close for Investment</label>';
                                    				}else if ($val->status == DRAFTS){ $status = '<label style="color:red !important;">Draft</label>'; }
												 
                                    	?>
                                      <tr class="mdc-data-table__row">
                                          <td class="mdc-data-table__cell"><?php echo $key+1;?></td>
                                          <td class="mdc-data-table__cell">
                                          	<a href="<?php echo SITE_URL?>propertyview/<?php echo base64_encode($val->proId); ?>" class="mdc-button mdc-ripple-surface mdc-ripple-surface--primary normal mdc-ripple-upgraded"><?php echo $val->property_name; ?></a>
                                          </td>
                                          <td class="mdc-data-table__cell"><?php echo $val->cityname.' '.$val->street_name; ?></td>
                                          <td class="mdc-data-table__cell"><?php echo $date?></td>
										  <td class="mdc-data-table__cell"><?php echo $like; ?> </td>
								 		  <td class="mdc-data-table__cell"><?php echo $view; ?></td>
										  <td class="mdc-data-table__cell"><?php echo $status; ?></td>
									    </tr>
									    <?php 
	                                   			}
                                    		}else{
									    ?>
									    	<tr class="mdc-data-table__row">
									    		<td colspan="10" class="mdc-data-table__cell"><a href="<?php echo SITE_URL?>propertyRegistration">Click To Add New Property</a></td>
									    	</tr>
									<?php }?>
									</tbody>
                                </table>
                            </div>
								
								
								
								
								
							
							
							
							
                        </div> 
                      
                    </div> 
                </div>  
            </div>  
        </div> 
    </main> 
<?php 
	$this->load->view('layout/frontend/footer');
?>
