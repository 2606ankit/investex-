<?php 
	$this->load->view('layout/userdashboard/header');
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
												<label class="main-content-label tx-13 font-weight-bold mb-1">MY PROPOSALS</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="<?php echo SITE_URL?>investorDashboard"><h4 class="font-weight-bold"><?php echo count($getproposalByInvestorId); ?></h4></a>
													
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
												<label class="main-content-label tx-13 font-weight-bold mb-1">MATCHING DEALS</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="<?php echo SITE_URL?>investorDashboard"><h4 class="font-weight-bold"><?php echo count($investormatchparoperty); ?></h4></a>
													
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
												<label class="main-content-label tx-13 font-weight-bold mb-1">INVESTED PROPETIES</label>
												
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
												<label class="main-content-label tx-13 font-weight-bold mb-1">UNDER CONSIDERATION</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="<?php echo SITE_URL?>underconsideration"><h4 class="font-weight-bold"><?php echo count($getsaveproperty); ?></h4></a>
													
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
												<label class="main-content-label tx-13 font-weight-bold mb-1 ">MY INVESTMENT</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="<?php echo SITE_URL?>investorDashboard"><h4 class="font-weight-bold">$ <?php echo $suminvestement; ?></h4></a>
													
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
												<label class="main-content-label tx-13 font-weight-bold mb-1">ESTIMATED RETURNS</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="<?php echo SITE_URL?>estimatereturn"><h4 class="font-weight-bold">$ <?php echo $totalinvessum;?></h4></a>
													
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
												<label class="main-content-label tx-13 font-weight-bold mb-1">PROJECT COMPLETED</label>
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="javascript:;"><h4 class="font-weight-bold">0</h4></a>
													
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
												<label class="main-content-label tx-13 font-weight-bold mb-1">MESSAGES
													</label>
												
											</div>
											<div class="card-item-body">
												<div class="card-item-stat">
													<a href="javascript:;"><h4 class="font-weight-bold">0</h4></a>
													
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
				 
				
				<br><center><h3><?php echo ucfirst($this->session->userdata('fname').' '.$this->session->userdata('lname')); ?> Investor</h3></center>
						<!-- Row -->

				<div class="row row-sm">
			
					<div class="col-lg-12">
						<div class="card custom-card overflow-hidden">
							<div class="card-body">
								<div style="padding:5px; border: 0px solid #ddd; border-radius: 4px;float: left; ">
									<a href="<?php echo SITE_URL?>proposal" class="btn btn-success my-2 btn-icon-text">Add Proposal</a>
									<a href="<?php echo SITE_URL?>list/<?php echo base64_encode(ALL_PROPOSAL);?>" class="btn btn-warning my-2 btn-icon-text">View All </a>
								</div>
								<div class="table-responsive" style="margin-top: 20px;">
									<table id="example" class="display nowrap" style="width:100%">
										<thead>
											<tr>
												<th class="">S.No</th>
	                                            <th class="">Proposal Id</th>
	                                            <th class="">Type of transaction</th>
	                                            <th class="">Countries</th>
	                                            <th class="">City</th>
	                                            <th class="">Invest Amount</th>
	                                            <th class="">Estimated return</th>
	                                            <th class="">Match Property</th>
	                                            <th class="">Actions</th>
											</tr>
										</thead>
										<tbody>
											 <?php 
	                                        	if (!empty($getproposalByInvestorId)){
		                                            foreach ($getproposalByInvestorId as $key=>$val)
		                                            {
		                                                $cityid = $val->city_id;
		                                                $streetid = $val->street_id;
		                                                $trans_id = $val->trans_id;
		                                                $proamount = $val->proposal_amount_for_investment;
		                                                $return = $val->proposal_estimate_return;

		                                                $matchproperty = $this->UserModel->getMatchAllPropertyByInvestorId($cityid,$streetid,$trans_id,$proamount,$return);
		                                                // echo '<pre>'; print_r(json_decode($matchproperty)); die;
	                                        ?>
											<tr>
												<td><?php echo $key+1;?></td>
												<td>
													<a href="javascript:;" target="_blank"> <?php echo $val->proposal_unique_id; ?> </a>
												</td>
												<td><?php echo $val->transaction_name_en; ?></td>
												<td><?php echo $val->city_name; ?></td>
												<td><?php echo $val->street_name; ?></td>
												<td><?php echo $val->proposal_amount_for_investment; ?>	</td>
												<td><?php echo $val->proposal_estimate_return; ?> %</td>
												<td><a href="<?php echo SITE_URL?>matchproperty/<?php echo base64_encode($val->propId); ?>"> <span class="geen_bx"><?php echo count(json_decode($matchproperty)); ?></span></a></td>
												<td> <a href="<?php echo SITE_URL?>editproposal/<?php echo base64_encode($val->propId); ?>" class="mdc-icon-button material-icons primary-color">edit</a>
                                                <a href="javascript:;" data-id="<?php echo $val->propId; ?>" class="mdc-icon-button material-icons warn-color deleteproposal">delete</a></td>

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