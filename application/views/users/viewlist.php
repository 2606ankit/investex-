<?php 
	$this->load->view('layout/userdashboard/header');
	$this->load->model("UserModel");;  
?>
			<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">

		
						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Properties</h2>
								
							</div>
							
						</div>
						<!-- End Page Header -->

						<!--Row-->
						<div class="row row-sm">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<!--Row-->
								<div class="row row-sm">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
										<div class="card custom-card">
											<div class="card-body">
												<div class="card-item">
													<div class="card-item-icon card-icon">
														<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
													</div>
													<div class="card-item-title mb-2">
														<label class="main-content-label tx-13 font-weight-bold mb-1">Total PROPERTIES</label>
														
													</div>
													<div class="card-item-body">
														<div class="card-item-stat">
															<h4 class="font-weight-bold"><?php echo count($allproperty);?></h4>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div><!-- col end -->
						</div><!-- Row end -->
						<!--Row-->
						
								<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										
										<div class="table-responsive">
											<table id="example" class="display nowrap" style="width:100%">

												<thead>
													<tr>
														<th class="">Sr. No.</th>
														<th class="">Property Name </th>
														<th class="">Location   </th>
														<th class="">Upload Date</th>
														<th class="">Investors Matched</th>
														<th class=""> Active Investors </th>
														<th class="">Under Considration</th>
														<th class="">Investment Req </th>
														<th class="">Investment Raised </th>
														<th class="">Estimate Return</th>
														<th class="">Like</th>
														<th class="">View</th>
														<th class="">Status</th>
														<th class="">Action </th>
													</tr>
												</thead>
												<tbody>
													   
		                                        <?php 
		                                            if (!empty($allproperty)){
		                                                foreach ($allproperty as $key=>$val){

		                                                 $date = date("d-M-Y",strtotime($val->created_date));
		                                                        
		                                                    if ($val->status == Open_For_Investement){
		                                                        $status = '<label style="color:green !important;">Open For Investement<label>';
		                                                    }else if ($val->status == Close_for_Investment){
		                                                        $status = '<label>Close for Investment</label>';
		                                                    }else if ($val->status == DRAFTS){ $status = '<label style="color:red !important;">Draft</label>'; }
		                                                    $proid = $val->proId;
		                                                $prolike = $this->UserModel->getPropertyLike($proid);
		                                                $proview = $this->UserModel->getPropertyView($proid);

		                                                $Consideration = $this->UserModel->getsavepropertyByuPropertyId($val->proId);

		                                                $cityid = $val->property_city;
		                                                $streetid = $val->property_street;
		                                                $trans_id = $val->property_transaction_type;
		                                                $proamount = $val->property_investment_amount;
		                                                $return = $val->property_estimated_return;
		                                                 
		                                                $matchproperty = $this->UserModel->getPropertyMatchByProposal($cityid,$streetid,$trans_id,$proamount,$return,$val->proId);
		                                               // echo '<pre>'; print_r($matchproperty);

		                                        ?>
		                                                 
													<tr>
														<td><?php echo $key+1; ?></td>
														<td><a href="<?php echo SITE_URL?>propertyview/<?php echo base64_encode($val->proId); ?>"><?php echo $val->property_name; ?></a></td>
														<td> <?php echo $val->cityname.' '.$val->street_name; ?></td>
														<td><?php echo $date?></td>
														<td><?php echo count(json_decode($matchproperty)); ?></td>
														<td>15</td>
														<td><?php echo count($Consideration); ?></td>
														<td>$<?php echo $val->property_investment_amount; ?></td>
														<td>$<?php echo $val->property_estimated_return; ?></td>
														<td><?php echo $val->property_estimated_return; ?>%</td>
														<td><?php echo count($prolike); ?></td>

														<td><?php echo count($proview); ?></td>
														<td><?php echo $status; ?></td>
														<td>
															<select name="somename" class="form-control SlectBox SumoUnder" onclick="console.log($(this).val())" onchange="console.log('change is firing')" tabindex="-1">
															<option title="" value="Edit">Action</option>
															<option value="Hold"><a href="<?php echo SITE_URL?>editproperty/<?php echo base64_encode($val->proId);?>">Edit</a></option>
															<option value="Active">Active</option>
															<option value="delete">Delete </option>
														</select>
														</td>
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