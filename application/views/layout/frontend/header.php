<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_TITLE; ?></title> 
    <link rel="icon" type="image/x-icon" href="<?php echo ASSETS_URL ?>assets/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/libs/swiper.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/libs/material-components-web.min.css">  
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/style.css"> 
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/skins/blue.css"> 
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/rtl.css"> 
    <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/responsive.css">  

	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> 

</head>

<body class="mdc-beatle--background">  
    <aside class="mdc-drawer mdc-drawer--modal sidenav">
        <div class="row end-xs middle-xs py-1 px-3">
            <button id="sidenav-close" class="mdc-icon-button material-icons warn-color">close</button> 
        </div>
        <hr class="mdc-list-divider m-0">
        <div class="mdc-drawer__content"> 
            <div class="vertical-menu">   
             <div>
                        <a href="<?php echo SITE_URL; ?>" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">בית</span> 
                        </a> 
                    </div>  
					 <div>
                        <a href="#" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">אינדקס משקיעים</span> 
                        </a> 
                    </div> 
					 <div>
                        <a href="#" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">לוח עסקאות</span> 
                        </a> 
                    </div> 
					
			
			</div>  
        </div>
        <hr class="mdc-list-divider m-0">
        <div class="row center-xs middle-xs py-3">
            <a href="https://www.facebook.com/" target="blank" class="social-icon">
                <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
                    <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                </svg>
            </a>
            <a href="https://twitter.com/" target="blank" class="social-icon">
                <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
                    <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                </svg> 
            </a>
            <a href="https://www.linkedin.com/" target="blank" class="social-icon"> 
                <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
                    <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                </svg>
            </a>
         
        </div>  
    </aside>
    <div class="mdc-drawer-scrim sidenav-scrim"></div>  
    <header class="toolbar-1 has-bg-image">  
        <div id="top-toolbar" class="mdc-top-app-bar"> 
            <div class="beatle-container row between-xs middle-xs h-100">
                <div class="row start-xs middle-xs">  
                    <button id="sidenav-toggle" class="mdc-button mdc-ripple-surface d-md-none d-lg-none d-xl-none">
                        <span class="mdc-button__ripple"></span>
                        <i class="material-icons">menu</i>
                    </button>
                    <div class="row start-xs middle-xs fw-500 d-none d-md-flex d-lg-flex d-xl-flex"> 
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm">call</i>
                            <span class="px-1">(+100) 123 456 7890</span>
                        </span>
                        <span class="v-divider"></span> 
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm">location_on</i> 
                            <span class="px-1">2903 Avenue Z, ברוקלין, ניו יורק, ארה"ב</span>
                        </span>
                        <span class="v-divider"></span>
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm">mail</i>  
                            <span class="px-1">info@investex.com
                            <!-- GTranslate: https://gtranslate.io/ -->
                                <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="English" /></a>

                                <style type="text/css">
                                <!--
                                a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
                                a.gflag img {border:0;}
                                a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
                                #goog-gt-tt {display:none !important;}
                                .goog-te-banner-frame {display:none !important;}
                                .goog-te-menu-value:hover {text-decoration:none !important;}
                                body {top:0 !important;}
                                #google_translate_element2 {display:none!important;}
                                -->
                                </style>

                                <select onchange="doGTranslate(this);" style="display: none;"><option value="">Select Language</option>><option value="en|en">English</option></select><div id="google_translate_element2"></div>
                                <script type="text/javascript">
                                function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                                </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                                <script type="text/javascript">
                                /* <![CDATA[ */
                                eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
                                /* ]]> */
                                </script>
                            </span>
                        </span>  
                    </div>       
                </div> 
                <div class="row start-xs middle-xs d-none d-lg-flex d-xl-flex">
                    <a href="https://www.facebook.com/" target="blank" class="social-icon">
                        <svg class="material-icons" viewBox="0 0 24 24">
                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/" target="blank" class="social-icon">
                        <svg class="material-icons" viewBox="0 0 24 24">
                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                        </svg> 
                    </a>
                    <a href="https://www.linkedin.com/" target="blank" class="social-icon"> 
                        <svg class="material-icons" viewBox="0 0 24 24">
                            <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                        </svg>
                    </a>
                  
                </div>  
                <?php 
                    if (!empty($this->session->userdata('userid'))){ 
                        $fullname = $this->session->userdata('fname').' '.$this->session->userdata('lname');
                        $username = $this->session->userdata('username');
                ?>
                    <div class="row end-xs middle-xs">
                       <div class="mdc-menu-surface--anchor"> 
                            <button class="mdc-button mdc-ripple-surface"> 
                                <span class="mdc-button__ripple"></span>
                                <i class="material-icons mdc-button__icon mx-1">person</i>
                                <span class="mdc-button__label">account</span>
                                <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                            </button> 
                            <div class="mdc-menu mdc-menu-surface user-menu">
                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                    <li class="user-info row start-xs middle-xs">                   
                                        <img src="<?php echo ASSETS_URL; ?>assets/images/others/user.jpg" alt="user-image" width="50">
                                        <p class="m-0"><?php echo $fullname; ?> <br> <small><i><?php echo $username; ?></i></small></p>
                                    </li>
                                    <li role="separator" class="mdc-list-divider m-0"></li> 
                                    <li>
                                        <?php 
                                            if ($this->session->userdata('usertype') == DEALER)
                                            {
                                                $dashboard = 'dealerdashboard';
                                            }
                                            elseif ($this->session->userdata('usertype') == INVESTOR)
                                            {
                                                $dashboard = 'invstordashboard';
                                            }
                                        ?>
                                        <a href="<?php echo SITE_URL.$dashboard; ?>" class="mdc-list-item" role="menuitem">
                                            <i class="material-icons mat-icon-sm text-muted">dashboard</i> 
                                            <span class="mdc-list-item__text px-3">Dashboard</span>
                                        </a>
                                    </li>
                                    <li role="separator" class="mdc-list-divider m-0"></li>
                                    <li>
                                        <a href="<?php echo SITE_URL?>signout" class="mdc-list-item" role="menuitem">
                                            <i class="material-icons mat-icon-sm text-muted">power_settings_new</i> 
                                            <span class="mdc-list-item__text px-3">Sign Out</span>
                                        </a>
                                    </li> 
                                </ul>
                            </div> 
                        </div> 
                    </div> 
                <?php 
                    }else {
                ?>
                    <div class="row end-xs middle-xs">
                       <div class="mdc-menu-surface--anchor">
                        <a  href="<?php echo SITE_URL?>dealerjoin" style="color:#FFF; padding:5px; border:1px solid #FFF; border-radius:4px;font-family:'Rubik', sans-serif;">Sign up</a> 
                        <a  href="<?php echo SITE_URL?>login" style="color:#FFF; padding:5px; border:1px solid #FFF; border-radius:4px;font-family:'Rubik', sans-serif;">login</a> 
                        </div> 
                    </div> 
                <?php }?>
            </div> 
        </div>  
        <div id="main-toolbar" class="mdc-elevation--z2">
            <div class="beatle-container row between-xs middle-xs h-100"> 
                <a class="logo" href="<?php echo SITE_URL?>"> 
                   <img src="<?php echo ASSETS_URL; ?>assets/images/logo.png">
                </a>  
                <div class="horizontal-menu d-none d-md-flex d-lg-flex d-xl-flex">   
                    <div>
                        <a href="<?php echo SITE_URL; ?>" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">בית</span> 
                        </a> 
                    </div>  
					 <div>
                        <a href="#" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">אינדקס משקיעים</span> 
                        </a> 
                    </div> 
					 <div>
                        <a href="#" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">לוח עסקאות</span> 
                        </a> 
                    </div> 
				</div> 
                <div class="row middle-xs"> 
    				<div class="mdc-menu-surface--anchor"> 
                         <a href="<?php echo SITE_URL ?>investorJoin" class="mdc-button mdc-ripple-surface mdc-ripple-upgraded" style="--mdc-ripple-fg-size:75px; --mdc-ripple-fg-scale:1.88088; --mdc-ripple-fg-translate-start:62.8875px, -17.1px; --mdc-ripple-fg-translate-end:25.5125px, -19.5px;"> 
                            <span class="mdc-button__ripple"></span>
                            <i class="material-icons mdc-button__icon mx-1">person</i>
                            <span class="mdc-button__label col_fff">הצטרפות</span>
                            
                        </a> 
                    </div>
                    <div class="mdc-menu-surface--anchor"> 
                        <a href="<?php echo SITE_URL ?>dealerjoin" class="mdc-button mdc-ripple-surface mdc-ripple-upgraded" style="--mdc-ripple-fg-size:75px; --mdc-ripple-fg-scale:1.88088; --mdc-ripple-fg-translate-start:62.8875px, -17.1px; --mdc-ripple-fg-translate-end:25.5125px, -19.5px;"> 
                            <span class="mdc-button__ripple"></span>
                            <i class="material-icons mdc-button__icon mx-1">person</i>
                            <span class="mdc-button__label col_fff">כניסה</span>
                            
                        </a> 
                    </div> 
					 
                    <a href="<?php echo SITE_URL ?>propertyRegistration" class="mdc-button mdc-button--raised d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">פרסם עסקה</span> 
                    </a> 
                </div>  
            </div>
        </div> 
    </header> 