<?php 
    $this->load->view('layout/frontend/header');
   // echo '<pre>'; print_r($matchproperty); die;
        $this->load->model("UserModel");
?>
    <main>   
    <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL;?>assets/images/carousel/slide-3.jpg');"></div>
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
                        
                        
                
    <div style="width:100%;border:1px solid #ddd;border-radius:4px;padding:10px;">l</div>
                
                            
      <div class="col-md-12">
      
    
    <div class="row margin_b_10">                 
    <div class="col-md-3 col-lg-3 col-xl-3">
    <section class="panel panel-featured-left panel-featured-primary">
        <div class="panel-body">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon pa-t-10">
                    <div class="summary-icon bg-primary">
                       <img src="<?php echo ASSETS_URL?>pro.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">MY PROPOSALS</h4>
                        <div class="info">
                        <strong class="amount"><?php echo count($getproposalByInvestorId); ?></strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="<?php echo SITE_URL?>" class="text-muted text-uppercase">(view all)</a>
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
                        <img src="<?php echo ASSETS_URL?>use.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">MATCHING DEALS</h4>
                        <div class="info">
                        <strong class="amount"><?php echo count($investormatchparoperty); ?></strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="<?php echo SITE_URL; ?>" class="text-muted text-uppercase">(view all)</a>
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
                        <img src="<?php echo ASSETS_URL?>pro.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">INVESTED PROPETIES</h4>
                        <div class="info">
                            <strong class="amount">0</strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="<?php echo SITE_URL; ?>" class="text-muted text-uppercase">(view all)</a>
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
                       <img src="<?php echo ASSETS_URL?>dol.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">UNDER CONSIDERATION</h4>
                        <div class="info">
                            <strong class="amount"><?php echo count($getsaveproperty); ?></strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="<?php echo SITE_URL; ?>underconsideration" class="text-muted text-uppercase">(view all)</a>
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
                    <div class="summary-icon bg-primary bg_red">
                       <img src="<?php echo ASSETS_URL?>dol.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">MY INVESTMENT</h4>
                        <div class="info">
                            <strong class="amount"><?php echo $suminvestement; ?> $</strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="<?php echo SITE_URL?>" class="text-muted text-uppercase">(view all)</a>
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
                       <img src="<?php echo ASSETS_URL?>dol.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">ESTIMATED RETURNS</h4>
                        <div class="info">
                            <strong class="amount"><?php echo $totalinvessum;?> $</strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="<?php echo SITE_URL; ?>estimatereturn" class="text-muted text-uppercase">(view all)</a>
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
                       <img src="<?php echo ASSETS_URL?>done.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">PROJECT COMPLETED</h4>
                        <div class="info">
                            <strong class="amount">0</strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="<?php echo SITE_URL; ?>" class="text-muted text-uppercase">(view all)</a>
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
                    <div class="summary-icon bg-primary bg_gre">
                       <img src="   msg.png">
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">MESSAGES </h4>
                        <div class="info">
                            <strong class="amount">0</strong>
                            
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a href="<?php echo SITE_URL; ?>" class="text-muted text-uppercase">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
  
        </div>
        
        </div>
        
                            <div class="row border-0 w-100 mt-3 po_rel">
                              
                                 <a href="<?php echo SITE_URL?>proposal" class="detail_table">Add Proposal</a>
                                <div class="mdc-data-table border-0 w-100 mt-1">
                                
                                <table id="proposal-list" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr class="mdc-data-table__header-row">
                                            <th class="mdc-data-table__header-cell">S.No</th>
                                            <th class="mdc-data-table__header-cell">Proposal Id</th>
                                            <th class="mdc-data-table__header-cell">Type of transaction</th>
                                            <th class="mdc-data-table__header-cell">Countries</th>
                                            <th class="mdc-data-table__header-cell">City</th>
                                            
                                            <th class="mdc-data-table__header-cell">Invest Amount</th>
                                            <th class="mdc-data-table__header-cell">Estimated return</th>
                                            <th class="mdc-data-table__header-cell">Match Property</th>
                                           
                                            <th class="mdc-data-table__header-cell">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="mdc-data-table__content s">
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
                                       <tr class="mdc-data-table__row">
                                            <td class="mdc-data-table__cell"><?php echo $key+1;?></td>
                                            <td class="mdc-data-table__cell"><a href="javascript:;" target="_blank"> <?php echo $val->proposal_unique_id; ?> </a>  </td>
                                            <td class="mdc-data-table__cell"><a href="javascript:;" target="_blank"> <?php echo $val->transaction_name_en; ?> </a>  </td>
                                            <td class="mdc-data-"><?php echo $val->city_name; ?></td>
                                            <td class="mdc-data-"><?php echo $val->street_name; ?></td>
                                            
                                            <td class="mdc-data-table__cell "><?php echo $val->proposal_amount_for_investment; ?></td>
                                            <td class="mdc-data-table__cell "> ><?php echo $val->proposal_estimate_return; ?> % ומעלה</td>
                                            <td class="mdc-data-table__cell "> <a href="<?php echo SITE_URL?>matchproperty/<?php echo base64_encode($val->propId); ?>"> <span class="geen_bx"><?php echo count(json_decode($matchproperty)); ?></span></a></td>
                                            <td class="mdc-data-table__cell">
                                                <a href="<?php echo SITE_URL?>editproposal/<?php echo base64_encode($val->propId); ?>" class="mdc-icon-button material-icons primary-color">edit</a>
                                                <a href="javascript:;" data-id="<?php echo $val->propId; ?>" class="mdc-icon-button material-icons warn-color deleteproposal">delete</a>
                                                 
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
        </div> 
    </main> 
    
<?php 
    $this->load->view('layout/frontend/footer');
?>
