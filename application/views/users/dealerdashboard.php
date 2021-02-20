<?php 
	$this->load->view('layout/userdashboard/header');
	 $this->load->model("UserModel"); 
?>
	<!-- Main Content-->
	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">


				<!-- Page Header -->
				<div class="page-header">
					<div class="headertext">
						<h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
					</div>
				</div>
				<!-- End Page Header -->

				<!--Row-->
				<div class="row row-sm">
					<div class="col-sm-12 col-lg-12 col-xl-12">
						<!--Row-->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-item">
											<div class="card-item-icon card-icon">
												<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
											</div>
											<div class="card-item-title mb-2">
												<label class="main-content-label tx-13 font-weight-bold mb-1">MY PROPERTIES</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="<?php echo SITE_URL?>viewlist/<?php echo base64_encode(ALL_STATUS); ?>"><h4 class="font-weight-bold"><?php echo count($allproperty); ?></h4></a>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-item">
											<div class="card-item-icon card-icon">
												<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
											</div>
											<div class="card-item-title mb-2">
												<label class="main-content-label tx-13 font-weight-bold mb-1">ACTIVE  PROPERTIES</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="<?php echo SITE_URL?>viewlist/<?php echo base64_encode(Open_For_Investement); ?>"><h4 class="font-weight-bold"><?php echo count($getOpenStatuspro);?></h4></a>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-item">
											<div class="card-item-icon card-icon">
												<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
											</div>
											<div class="card-item-title mb-2">
												<label class="main-content-label tx-13 font-weight-bold mb-1">INVESTMENT REQUIRED</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<h4 class="font-weight-bold">$ <?php echo array_sum($getOpenStatusInvestement); ?></h4>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-item">
											<div class="card-item-icon card-icon">
												<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
											</div>
											<div class="card-item-title mb-2">
												<label class="main-content-label tx-13 font-weight-bold mb-1">INVESTMENT REISED</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<h4 class="font-weight-bold">$ 0</h4>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
								<div class="card custom-card ">
									<div class="card-body">
										<div class="card-item">
											<div class="card-item-icon card-icon">
												<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
											</div>
											<div class="card-item-title mb-2">
												<label class="main-content-label tx-13 font-weight-bold mb-1 ">MESSAGES</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<h4 class="font-weight-bold">0</h4>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-item">
											<div class="card-item-icon card-icon">
												<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
											</div>
											<div class="card-item-title mb-2">
												<label class="main-content-label tx-13 font-weight-bold mb-1">INVESTORS MATCHED</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="<?php echo SITE_URL?>viewlist/<?php echo base64_encode(INVESTOR_MATCH)?>"><h4 class="font-weight-bold"><?php echo count($getmatchinvestor);?></h4></a>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-item">
											<div class="card-item-icon card-icon">
												<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
											</div>
											<div class="card-item-title mb-2">
												<label class="main-content-label tx-13 font-weight-bold mb-1">UNDER CONSIDERATION</label>
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<h4 class="font-weight-bold"><?php echo count($allcosidration); ?></h4>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-item">
											<div class="card-item-icon card-icon">
												<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
											</div>
											<div class="card-item-title mb-2">
												<label class="main-content-label tx-13 font-weight-bold mb-1">Total INVESTMENT REISED
													</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<h4 class="font-weight-bold">15 Lac $</h4>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
						</div>
						<!--End row-->
					</div><!-- col end -->
				</div><!-- Row end -->
				<!--Row-->
				 
				
				<br><center><h3>DEALER</h3></center>
						<!-- Row -->

				<div class="row row-sm">
			
					<div class="col-lg-12">
						<div class="card custom-card overflow-hidden">
							<div class="card-body">
								<div style="padding:5px; border: 0px solid #ddd; border-radius: 4px;float: left; ">
									<a href="<?php echo SITE_URL?>propertyRegistration" class="btn btn-success my-2 btn-icon-text">Add Property</a>
									<a href="<?php echo SITE_URL?>viewlist/<?php echo base64_encode(ALL_STATUS); ?>" class="btn btn-warning my-2 btn-icon-text">View All </a>
								</div>
								<div class="table-responsive" style="margin-top: 20px;">
									<table id="example" class="display nowrap" style="width:100%">
										<thead>
											<tr>

												<th class="">Sr. No.</th>
												<th class="">PROPERTY NAME</th>
												<th class="">LOCATION</th>
												<th class="">UPLOAD DATE</th>
												<th class="">VIEW</th>
												<th class="">LIKE</th>
												<th class="">STATUS</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 
	                                    		if (!empty($allproperty)){
	                                    			foreach ($allproperty as $key=>$val)
	                                    			{
	                                    				$date = date("d-M-Y",strtotime($val->created_date));
	                                    				 	
	                                    				if ($val->status == Open_For_Investement){
	                                    					$status = '<label style="color:green !important;">Open For Investement<label>';
	                                    				}else if ($val->status == Close_for_Investment){
	                                    					$status = '<label>Close for Investment</label>';
	                                    				}else if ($val->status == DRAFTS){ $status = '<label style="color:red !important;">Draft</label>'; }
	                                                    $proid = $val->proId;
	                                                $prolike = $this->UserModel->getPropertyLike($proid);
													$proview = $this->UserModel->getPropertyView($proid);
	                                    	?>
											<tr>
												<td><?php echo $key+1;?></td>
												<td>
													<a href="<?php echo SITE_URL?>propertyview/<?php echo base64_encode($val->proId); ?>"><?php echo $val->property_name; ?></a>
												</td>
												<td><?php echo $val->cityname.' '.$val->street_name; ?></td>
												<td><?php echo $date?></td>
												<td><?php echo count($prolike); ?></td>
												<td><?php echo count($proview); ?>	</td>
												<td><?php echo $status; ?></td>
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
				<!-- End Row -->


			</div>
		</div>
	</div>
	<!-- End Main Content-->
<?php 
	$this->load->view('layout/userdashboard/footer');
?>