<?php 
	$this->load->view('layout/frontend/header');
?>

	<main> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('<?php echo ASSETS_URL; ?>assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content mh-200"> 
                <p class="desc">Match Your Investment Properties</p> 
            </div>
        </div>  
        <div class="px-3">  
            <div class="theme-container beatle-container ">  
                <div class="page-drawer-container mt-3">
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card">   
                            <form action="javascript:void(0);" id="filters" class="search-wrapper m-0 o-hidden"> 
                                <div class="column p-2">  
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Property Type</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">Office</li>
                                                    <li class="mdc-list-item" data-value="2">House</li>
                                                    <li class="mdc-list-item" data-value="3">Apartment</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>   
                                    
                                    <div class="row">
                                        <div class="col-xs-6 p-2">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Price From</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 to">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input">
                                                <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Price To</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 p-2">
                                        <div class="mdc-select mdc-select--outlined">
                                            <div class="mdc-select__anchor">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">City</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list">
                                                    <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                                    <li class="mdc-list-item" data-value="1">New York</li>
                                                    <li class="mdc-list-item" data-value="2">Chicago</li>
                                                    <li class="mdc-list-item" data-value="3">Los Angeles</li>
                                                    <li class="mdc-list-item" data-value="4">Seattle</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label">Zip Code</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                   
                                   
                                    
                                    
                                    
                                   
                                    
                                    <div class="col-xs-12 mb-2"> 
                                        <p class="uppercase m-2 fw-500">Features</p>  
                                        <div class="features column">
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="restaurant"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="air-conditioning">restaurant</label>
                                            </div>    
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="Spa"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="barbeque">Spa</label>
                                            </div>
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="Hotel"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="dryer">Hotel</label>
                                            </div>
                                           
                                           
                                            
                                            
                                            
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="fireplace"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="fireplace">Fireplace</label>
                                            </div> 
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="gym"/>
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="gym">Gym</label>
                                            </div>
                                        </div> 
                                    </div> 
                                </div>   
                                <div class="row around-xs middle-xs p-2 mb-3"> 
                                    <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Clear</span> 
                                    </button>
                                    <button class="mdc-button mdc-button--raised" type="submit">
                                        <span class="mdc-button__ripple"></span>
                                        <i class="material-icons mdc-button__icon">search</i>
                                        <span class="mdc-button__label">Search</span> 
                                    </button>  
                                </div>
                            </form>   
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                    <div class="page-sidenav-content"> 
                        <div class="properties-wrapper row mt-0  ">
						
						
						
                            <div class="row px-2 w-100">  
                                <div class="row mdc-card between-xs middle-xs w-100 p-2 filter-row mdc-elevation--z1 text-muted"> 
                                    <button id="page-sidenav-toggle" class="mdc-icon-button material-icons d-md-none d-lg-none d-xl-none"> 
                                        more_vert 
                                    </button>  
                                    <div class="mdc-menu-surface--anchor"> 
                                        <button class="mdc-button mdc-ripple-surface text-muted mutable"> 
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label"><span class="mutable">Sort by Default</span></span>
                                            <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                                        </button> 
                                        <div class="mdc-menu mdc-menu-surface">
                                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Sort by Default</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Newest</span>
                                                </li> 
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Oldest</span>
                                                </li> 
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Popular</span>
                                                </li> 
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Price (Low to High)</span>
                                                </li> 
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Price (High to Low)</span>
                                                </li>
                                            </ul>
                                        </div> 
                                    </div>
                                    
                                </div>  
                            </div> 
                            
                          
						 
							 <div class="row item col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                                <div class="mdc-card property-item list-item column-1 pos_rel">
                                  <div class="row property-status">
                                            <span class="red">Hot Deals</span> 
                                        </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#"> Lorem Ipsum is simply dummy text</a></h1>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
												industry. Lorem Ipsum has been the industry's standard dummy text
												ever since the 1500s, when an unknown printer took a galley of 
												type and scrambled it to</p>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span> 611 W 180th St, New York, NY 10033, USA</span>
                                                </p>
												
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 1,300,000</span> 
                                                    </h3> 
                                                  
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">13 Jan, 2021</span>
                                                </p>
                                                <a href="chat.html" target="_blank" class="mdc-button mdc-button--outlined mdc-ripple-upgraded">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Chat</span> 
                                                </a>  
                                            </div>
                                        </div>  
                                    </div> 
                                </div>  
                            </div>
							<div class="row item col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                                <div class="mdc-card property-item list-item column-1 pos_rel">
                                  <div class="row property-status">
                                            <span class="red">Hot Deals</span> 
                                        </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#"> Lorem Ipsum is simply dummy text</a></h1>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
												industry. Lorem Ipsum has been the industry's standard dummy text
												ever since the 1500s, when an unknown printer took a galley of 
												type and scrambled it to</p>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span> 611 W 180th St, New York, NY 10033, USA</span>
                                                </p>
												
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 1,300,000</span> 
                                                    </h3> 
                                                  
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">13 Jan, 2021</span>
                                                </p>
                                                <a href="chat.html" target="_blank" class="mdc-button mdc-button--outlined mdc-ripple-upgraded">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Chat</span> 
                                                </a>  
                                            </div>
                                        </div>  
                                    </div> 
                                </div>  
                            </div>
							
						<div class="row item col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                                <div class="mdc-card property-item list-item column-1 pos_rel">
                              
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#"> Lorem Ipsum is simply dummy text</a></h1>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
												industry. Lorem Ipsum has been the industry's standard dummy text
												ever since the 1500s, when an unknown printer took a galley of 
												type and scrambled it to</p>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span> 611 W 180th St, New York, NY 10033, USA</span>
                                                </p>
												
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 1,300,000</span> 
                                                    </h3> 
                                                  
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">13 Jan, 2021</span>
                                                </p>
                                                <a href="chat.html" target="_blank" class="mdc-button mdc-button--outlined mdc-ripple-upgraded">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Chat</span> 
                                                </a>  
                                            </div>
                                        </div>  
                                    </div> 
                                </div>  
                            </div>
						<div class="row item col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                                <div class="mdc-card property-item list-item column-1 pos_rel">
                              
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#"> Lorem Ipsum is simply dummy text</a></h1>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
												industry. Lorem Ipsum has been the industry's standard dummy text
												ever since the 1500s, when an unknown printer took a galley of 
												type and scrambled it to</p>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span> 611 W 180th St, New York, NY 10033, USA</span>
                                                </p>
												
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 1,300,000</span> 
                                                    </h3> 
                                                  
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">13 Jan, 2021</span>
                                                </p>
                                                <a href="chat.html" target="_blank" class="mdc-button mdc-button--outlined mdc-ripple-upgraded">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Chat</span> 
                                                </a>  
                                            </div>
                                        </div>  
                                    </div> 
                                </div>  
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