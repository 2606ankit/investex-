<?php 
	
	define ('FRONTEND_URL','http://localhost/investex/');
	define ('SITE_URL','http://localhost/investex/index.php/user/');
	define ('ASSETS_URL','http://localhost/investex/assets/');
	define ('TODAY_DATE',date("Y-m-d H:i:s"));
	define ('SITE_TITLE','Investex');
	define ('ADMIN_EMAIL','ankit@beatleanalytics.com');
	define ('FILE_UPLOAD_PATH',$_SERVER['DOCUMENT_ROOT'] . '/investex/');
	// User type Start here

	define("ADMIN",1);
	define("DEALER",2);
	define("INVESTOR",3);

	// User Status 
	define("ACTIVE",1);
	define("INACTIVE",2); 

	// user insert type
	define("FACEBOOK",1);
	define("TWITTER",2);
	define("GOOGLE",3);
	define("SITE_USER",4);

	// real estate transaction type
	 
	 

?>