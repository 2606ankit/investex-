<?php 
	/*	****************************************************************************************
		 link for live server (uncomment when site will be site and comment local path site url)
	 ****************************************************************************************    */	 
	//define ('SERVER_URL','work.beatlebuddy.com/investex/');

	define ('SERVER_URL','http://localhost/investex/');
	
	define ('FRONTEND_URL',SERVER_URL);
	define ('SITE_URL',SERVER_URL.'index.php/user/');
	define ('AUTH_FB_URL',SERVER_URL.'index.php/User_authentication/');


	define ('ASSETS_URL',SERVER_URL.'assets/');
	define ('TODAY_DATE',date("Y-m-d H:i:s"));
	define ('SITE_TITLE','Investex');
	define ('ADMIN_EMAIL','ankit@beatleanalytics.com');
	define ('FILE_UPLOAD_PATH',$_SERVER['DOCUMENT_ROOT'] . '/investex/');
	// User type Start here

	define("ADMIN",1);
	define("DEALER",2);
	define("INVESTOR",3);

	// user login status 
	define ("LOGIN_STATUS_ACTIVE",1);
	define ("LOGIN_STATUS_INACTIVE",2);

	// User Status 
	define("ACTIVE",1);
	define("INACTIVE",2); 

	// property status
	define("Open_For_Investement",3);
	define("Close_for_Investment",4);
	define("DRAFTS",5); 
	define("STATUS_DELETE",6);

	// user insert type
	define("FACEBOOK",1);
	define("TWITTER",2);
	define("GOOGLE",3);
	define("SITE_USER",4);

	// user gender 
	define('MALE',1);
	define('FEMALE',2);
		 
	// property like and view type
	define("PROLIKE",1);
	define("PROVIEW",2);
	 

	// Error and Scusses Message Start here
	define ('INFO_REGISTRATION','You have successfully register.Verification mail has been sent to your email');
	define ('ERROR_REGISTRATION','Problem to insert data please insert another value');

	define('SUCCESS_MAIL_VERIFY','Welcome ! Thanks for verify your email');

	define ('PROPERTY_ADD_SUCCESS','You have successfully insert your property');
	define ('PROPERTY_ADD_ERROR','Unable to insert new property! Please try again !');
	define ('PROPERTY_EDIT_SUCCESS','You have successfully update your property');
	define ('PROPERTY_EDIT_ERROR','Unable to update property. Please try again !');
	
	define ('PROPOSAL_ADD_SUCCESS','Your proposal insert successfully');
	define ('PROPOSAL_ADD_ERROR','Unable to insert new proposal! Please try again.');

	define ('PROPOSAL_EDIT_SUCCESS','You have successfully update your proposal');
	define ('PROPOSAL_EDIT_ERROR','Unable to update proposal! Please try again.');


	// end here

?>