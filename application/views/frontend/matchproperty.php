<?php 
    $this->load->view('layout/frontend/header');
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
							<span class="act_live_dot"></span>
                                <img src="<?php echo FRONTEND_URL; ?>profile_image/<?php echo $userdata['userimage']; ?>" alt="user-image" class="avatar_bx">
                                <div class="text-muted fw-500 mx-3">
								<h1 class="blu"><?php echo $userdata['fname'].' '.$userdata['lname']?></h1>
								 <p>
                                <span class="color_yellow">investor</span><br>
                                    <label style="font-size: 12px;"><?php echo $userdata['username'];?></label><br>
                                    <label style="font-size: 12px;"><?php echo $userdata['useremail']?></label><br>
                                    <label style="font-size: 12px;"><?php echo $userdata['userphone']?></label><br> 
                                </p>
								</div> 
								
                            </div>
                            <hr class="mdc-list-divider m-0">
                            <ul class="mdc-list">
							
							
							 <li>
                                    <a href="<?php echo SITE_URL?>investorDashboard" class="mdc-list-item py-1">
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
                                    <a href="<?php echo SITE_URL?>proposal" class="mdc-list-item py-1">
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
						 
                            <div class="row border-0 w-100 mt-3 po_rel">
                                
								 <a href="<?php echo SITE_URL?>investorDashboard" class="detail_table">View Dashboard</a>
								<div class="mdc-data-table border-0 w-100 mt-1">
                                 <table id="investor-match-property" class="display nowrap" style="width:100%">
                                   <thead>
                                        <tr class="mdc-data-table__header-row">
                                            <th class="mdc-data-table__header-cell">S.No</th>
                                        
                                            <th class="mdc-data-table__header-cell">Property Name</th>
                                            <th class="mdc-data-table__header-cell">Location</th>
											<th class="mdc-data-table__header-cell">Upload Date</th>
										     <th class="mdc-data-table__header-cell"> Investment Req</th>
											 
										 </tr>
                                    </thead>
                                    <tbody class="mdc-data-table__content s">
                                       <?php 
                                       		if (!empty($getproperty)){
                                       			foreach ($getproperty as $key=>$val){
                                       			$createddate = date('d-M-Y',strtotime($val->created_date));
                                   		?>
                                        
                                      <tr class="mdc-data-table__row">
                                            <td class="mdc-data-table__cell">1</td>
                                            <td class="mdc-data-table__cell"><a href="<?php echo SITE_URL?>propertyview/<?php echo base64_encode($val->id); ?>" class="mdc-button mdc-ripple-surface mdc-ripple-surface--primary normal mdc-ripple-upgraded"><?php echo $val->property_name; ?></a></td>
                                            <td class="mdc-data-table__cell"><?php echo $val->property_street.','.$val->property_city; ?></td>
                                            <td class="mdc-data-table__cell"><?php echo $createddate?></td>
											<td class="mdc-data-table__cell"><?php echo $val->property_investment_amount; ?> $ </td>
											 
										</tr>
										<?php 
	                                       		}
	                                       	}
										?>	 
									
									
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
