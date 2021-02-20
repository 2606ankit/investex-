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
								<h2 class="main-content-title tx-24 mg-b-5">Add Proposal</h2>
								<div style="width: 100%; padding:5px;"><hr></div>	
							</div>
						 </div>
						<!-- End Page Header -->

						  <div class="row row-sm">
					
							<div class="col-lg-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										 <form class="form-horizontal" action="/action_page.php" style="width: 50%;">
											  <div class="form-group">
											    <label class="control-label col-sm-6" for="email">Proposal Type</label>
											    <div class="col-sm-10">
											      <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="Property Name" value="">
											    </div>
											  </div>
											  <div class="form-group">
											    <label class="control-label col-sm-6" for="pwd">Property Type</label>
											    <div class="col-sm-10">
											    </div>
											  </div>
											  
											  <div class="form-group">
											    <div class="col-sm-offset-2 col-sm-10">
											      <button type="submit" class="btn btn-default">Submit</button>
											    </div>
											  </div>
											</form> 
									</div>
								</div>
							</div>
						</div>
						<!--Row-->
						
								<!-- Row -->
						
						<!-- End Row -->


					</div>
				</div>
			</div>
			<!-- End Main Content-->
<?php 
	$this->load->view('layout/userdashboard/footer');
?>