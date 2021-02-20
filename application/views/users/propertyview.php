<?php 
	$this->load->view('layout/userdashboard/header');
	$created_date = date('d-M-Y',strtotime($propertybyId[0]->created_date));
?>
	<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">
 						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5"><?php echo $propertybyId[0]->property_name; ?></h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										 <i class="zmdi zmdi-pin" style=" font-size: 20px; margin-left: 9px;"></i><?php echo $propertybyId[0]->cityname.','.$propertybyId[0]->street_name; ?>
									</li>
								</ol>
								<p class="text-success"><?php echo $propertybyId[0]->transaction_name_en; ?></p>
							</div>
							
							<div class="d-flex">
								<div class="justify-content-center">
									<a href="javascript:;" data-id="<?php echo $propertybyId[0]->proId;?>"  class="btn btn-danger my-2 btn-icon-text deleteproperty">
									 Delete  
									</a>
									<a href="javascript:;" class="btn btn-warning my-2 btn-icon-text">
									 Hold 
									</a>
									<a href="<?php echo SITE_URL?>editproperty/<?php echo base64_encode($propertybyId[0]->proId);?>" data-id="" class="btn btn-success my-2 btn-icon-text">
									 Edit 
									</a>
								</div>
							</div>
						 
						</div>
						<!-- End Page Header -->
						<div class="row row-sm">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<!--Row-->
								<div class="row row-sm">
								
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 ">
									<div class="card custom-card ">
										<div class="card-body">
											<div class="card-item">
												 
											<div style="width:100%;">
												<div style="float: left !important;width: 30%;">0</div>
												<div style="float: right;width: 70%;">
													<label class="main-content-label tx-13 font-weight-bold mb-1 ">Under Consideration</label>
												</div>
											<div style="clear: both;"></div>
											</div>
											<div style="width:100%;">
												<div style="float: left !important;width: 30%;"><?php echo count($propertyinvestor);?></div>
												<div style="float: right;width: 70%;">
													<label class="main-content-label tx-13 font-weight-bold mb-1 ">Investors Matched</label>
												</div>
											<div style="clear: both;"></div>
											</div>
											 
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 ">
									<div class="card custom-card ">
										<div class="card-body">
											<div class="card-item">
												 
											<div style="width:100%;">
												<div style="float: left !important;width: 30%;">0</div>
												<div style="float: right;width: 70%;">
													<label class="main-content-label tx-13 font-weight-bold mb-1 ">Active Investors</label>
												</div>
											<div style="clear: both;"></div>
											</div>
											<div style="width:100%;">
												<div style="float: left !important;width: 30%;"><?php echo $created_date; ?></div>
												<div style="float: right;width: 70%;">
													<label class="main-content-label tx-13 font-weight-bold mb-1 ">Upload Date</label>
												</div>
											<div style="clear: both;"></div>
											</div>
											 
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 ">
									<div class="card custom-card ">
										<div class="card-body">
											<div class="card-item">
												 
											<div style="width:100%;">
												<div style="float: left !important;width: 30%;"><?php echo $propertybyId[0]->property_investment_amount; ?> $</div>
												<div style="float: right;width: 70%;">
													<label class="main-content-label tx-13 font-weight-bold mb-1 ">Total Investment Requested</label>
												</div>
											<div style="clear: both;"></div>
											</div>
											<div style="width:100%;">
												<div style="float: left !important;width: 30%;">0</div>
												<div style="float: right;width: 70%;">
													<label class="main-content-label tx-13 font-weight-bold mb-1 ">Investment Raised</label>
												</div>
											<div style="clear: both;"></div>
											</div>
											 
											</div>
										</div>
									</div>
								</div>
									
									 
								
								</div>
								<!--End row-->
							</div><!-- col end -->
						</div>
						<!-- Row -->
						<div class="row square">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">

									<div class="card-body">

											<!--<div class="" style="text-align: center;">
												<img src="<?php echo FRONTEND_URL?>profile_image/<?php echo $this->session->userdata('userimage');?>" alt="img" / style="border-radius: 104px;border: 1px solid #000;">
												<h3 class="h3"><?php echo $this->session->userdata('fname').' '.$this->session->userdata('lname');?></h3>
												<button type="button" class="btn btn-success my-2 btn-icon-text">
												 Total Investment Requested - $ <?php echo $propertybyId[0]->property_investment_amount; ?>
												</button>
												<button type="button" class="btn btn-warning my-2 btn-icon-text">
												 Estimated Returns - <?php echo $propertybyId[0]->property_estimated_return; ?>%
			 
												</button>
											</div> -->
										
										<div class="profile-tab tab-menu-heading">
											<nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100">
												<a class="nav-link active" data-toggle="tab" href="#investor">INVESTOR</a>
											
												<a class="nav-link" data-toggle="tab" href="#project-details">PROJECT DETAILS</a>
												<a class="nav-link" data-toggle="tab" href="#project-description">PROJECT DESCRIPTION</a>
												<a class="nav-link" data-toggle="tab" href="#gallery">GALLERY</a>
												<a class="nav-link" data-toggle="tab" href="#location">LOCATION</a>
												
												<a class="nav-link" data-toggle="tab" href="#personal-info">PERSONAL INFO</a>
											
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card main-content-body-profile">
									<div class="tab-content">
										
										<div class="main-content-body tab-pane border-top-0 active" id="investor">
											
											<div class=""style="padding: 30px 25px;">
											<table id="example2" class="display nowrap" style="width:100%">

												<thead>
													<tr>
														<th class="">Sr. No.</th>
														<th class="">Name </th>
														<th class="">Email Id</th>
														<th class="">Location</th>
														<th class="">Investment Date</th>
														<th class="">Investment </th>
														<th class="">Investment Return  </th>
													</tr>
												</thead>
												<tbody>
													<?php 
														if (!empty($propertyinvestor)){
															foreach ($propertyinvestor as $key => $val) 
															{
																$date = date('D,m Y',strtotime($val->created_date));
													?>
													<tr>
														<td><?php echo $key+1; ?></td>
														<td><a href="javascript:;"><?php echo $val->investor_first_name.' '.$val->investor_last_name; ?></a> </td>
														<td> <?php echo $val->investor_user_email;?></td>
														<td><?php echo $val->cityname.' '.$val->street_name;?></td>
														<td><?php echo $date; ?></td>
														<td><?php echo $val->proposal_amount_for_investment; ?> </td>
														<td><?php echo $val->proposal_estimate_return; ?> %</td>
													</tr>
													<?php 
															}
														}
													?>
												 
												</tbody>
											</table>
											</div>
										</div>
										<div class="main-content-body tab-pane p-4 border-top-0 " id="project-details">
											<h2 class="">Project Details</h2>
											<p><?php echo $propertybyId[0]->property_details; ?></p>
										</div>
										<div class="main-content-body tab-pane p-4 border-top-0" id="project-description">
											<h2 class="">PROJECT DESCRIPTION</h2>
											<p><?php echo $propertybyId[0]->property_text; ?></p>
										</div>
										<div class="main-content-body  tab-pane border-top-0" id="gallery">
											<ul id="lightgallery" class="list-unstyled row mb-0">
												
												<li class="col-xs-6 col-sm-3 col-md-3 col-xl-3 mb-3" 
												data-responsive="<?php echo USERS_ASSETS_URL;?>img/media/1.jpg" 
												data-src="<?php echo USERS_ASSETS_URL;?>img/media/1.jpg" 
												data-sub-html="">
													<a href="#" class="wd-100p">
														<img class="img-responsive" src="<?php echo USERS_ASSETS_URL;?>img/media/1.jpg" alt="Thumb-1">
													</a>
												</li>
											</ul>

										</div>
										<div class="main-content-body p-4 border tab-pane border-top-0" id="location">
											<iframe class="beatle_location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.9516835229556!2d72.53203961532367!3d23.062232884933106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b270b42b8cd%3A0x6f7633431c4a4cad!2sBeatle+Analytics!5e0!3m2!1sen!2sin!4v1560498989950!5m2!1sen!2sin" height="300" frameborder="0" style="border:0; width:100%;" allowfullscreen=""></iframe>
									
										</div>
										<div class="main-content-body tab-pane border-top-0" id="personal-info">
											
											<div class=""style="padding: 30px 25px;">
											<h2><?php echo $this->session->userdata('fname').' '.$this->session->userdata('lname');?></h2>
											<h6><?php echo $this->session->userdata('username');?></h6>
											<h6><?php echo $this->session->userdata('useremail');?></h6>
											<h6><?php echo $this->session->userdata('userphone');?></h6>
											</div>
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