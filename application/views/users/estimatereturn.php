<?php 
	$this->load->view('layout/userdashboard/header');
?>
 <!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">

		
						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5"><?php echo $title; ?></h2>
								
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
														<label class="main-content-label tx-13 font-weight-bold mb-1">Total Proposal</label>
														
													</div>
													<div class="card-item-body">
														<div class="card-item-stat">
															<h4 class="font-weight-bold"><?php echo count($totalProposal);?></h4>
															
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
														 	<th class="">S.No</th>
														 	<th class="">Dealer Name</th>
					                                        <th class="">Property Name</th>
					                                        <th class="">Location</th>
															<th class="">Upload Date</th>
														    <th class=""> Investment Req</th>
														    <th class=""> Estimate Percentage</th> 
														    <th class=""> Estimate Return</th>
															
													</tr>
												</thead>
												<tbody>
													   
		                                        <?php 
		                                           if (!empty($getproperty)){
		                                       			foreach ($getproperty as $key=>$val){
		                                       			$createddate = date('d-M-Y',strtotime($val->created_date));
		                                       			$cityid   = $val->property_city;
		                                       			$streetid = $val->property_street;

		                                       			$street = $this->UserModel->getstreetbyid($streetid);
		                                       			$city = $this->UserModel->getcitybyid($cityid);
		                                       			$suminve 	 =	$val->property_investment_amount;
		                                				$percetage = 	($val->property_estimated_return/100)*$val->property_investment_amount;
		                                        ?>
		                                                 
													<tr>
														 <td class="">1</td>
				                                            <td class=""><?php echo $val->first_name.' '.$val->last_name; ?></td>
				                                            <td class=""><a href="<?php echo SITE_URL?>investorproperty/<?php echo base64_encode($val->id); ?>"><?php echo $val->property_name; ?></a></td>
				                                            <td class=""><?php echo $city[0]->name.','.$street[0]->name; ?></td>
				                                            <td class=""><?php echo $createddate?></td>
															<td class=""><?php echo $val->property_investment_amount; ?> $ </td>
															<td class="">%<?php echo $val->property_estimated_return ; ?> </td>
															<td class=""><?php echo $percetage; ?> $</td>
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