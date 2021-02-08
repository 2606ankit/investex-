$(document).ready(function(){
	ajax_url = 'http://localhost/investex/index.php/AjaxController/';
	base_url = 'http://localhost/investex/index.php/user/';
	 // Validation for add line manage 
  $("#dealer_join").validate({

	    rules: {
	      dealer_firstname : {
	        required: true,
	      },
	      dealer_lastname : {
	        required: true,
	      },
	      dealer_miles : {
	        required: true,
	      },
	      dealer_email : {
	        required: true,
	        remote : {
	   				url:  ajax_url+'checkemail',
			        type: "post",
			      	data: {dealer_email: function() {return $('#dealer_email').val();}}
	   		}
	      },
        dealer_username : {
        required: true,
        remote : {
   				url:  ajax_url+'checkusername',
		        type: "post",
		      	data: {dealer_username: function() {return $('#dealer_username').val();}}
	   		}
	      },
	      
	     
	      dealer_phone : {
	        required: true,
	        number:true,
	        minlength : 10,
	        maxlength : 10,

	      },
	      dealer_password : {
	        required: true,
	        minlength : 8,
	       },
	      dealer_repassword : {
	        
	       equalTo: "#dealer_repassword",
	       },
	    },
	    messages : {
		  dealer_firstname: {
		    required: "First Name should not be empty",
		  },
		  dealer_lastname: {
		    required: "Last Name should not be empty",
		  },
		  dealer_miles: {
		    required: "Miles Number should not be empty",
		  },
		  
		  dealer_phone: {
		    required: "Mobile Number should not be empty",
		    number: "Mobile Number should Numeric",
		    min: "Mobile Number should be min 10 digit",
		  },
		  dealer_username: {
		    required: "Username should not be empty",
			remote: jQuery.validator.format("{0} is already taken. Please choose another username. ")
		  },
		  dealer_email: {
		    required: "Email should not be empty",
			remote: jQuery.validator.format("{0} is already taken. Please choose another Email. ")
		   },
		  dealer_password: {
		    required: "Password Should not be blank",
			minlength: "Password Should have minimum 8 digit",
		  },
		 
		  dealer_repassword: {
		    required: "Password Should not be blank",
			equalto: "Password does not match",
		  },
		},
		// errorElement: 'div',
		// errorLabelContainer: '.errorTxt'
		errorPlacement: function(label, element) {
        label.addClass('arrow');
        label.insertAfter(element);
	    },
	    wrapper: 'span'
	  });
  	//end here

  	$("#add_pro").validate({

	    rules: {
	      pro_fullname : {
	        required: true,
	      },
	      pro_name : {
	        required: true,
	      },
	      pro_transaction_type : {
	        required: true,
	      },
	      cityvalue : {
	        required: true,
	        
	      },
        streetval : {
       		 required: true,
       	 },
	      
	     
	      pro_request_amount : {
	        required: true,
	        number:true,
	       },
	      pro_estimate_return : {
	        required: true,
	         number:true,
	       },
	      pro_text : {
	         required: true,	
	       },
	       pro_details : {
	         required: true,	
	       },
	    },
	    messages : {
		  dealer_firstname: {
		    required: "First Name should not be empty",
		  },
		  dealer_lastname: {
		    required: "Last Name should not be empty",
		  },
		  dealer_miles: {
		    required: "Miles Number should not be empty",
		  },
		  
		  dealer_phone: {
		    required: "Mobile Number should not be empty",
		    number: "Mobile Number should Numeric",
		    min: "Mobile Number should be min 10 digit",
		  },
		  dealer_username: {
		    required: "Username should not be empty",
			remote: jQuery.validator.format("{0} is already taken. Please choose another username. ")
		  },
		  dealer_email: {
		    required: "Email should not be empty",
			remote: jQuery.validator.format("{0} is already taken. Please choose another Email. ")
		   },
		  dealer_password: {
		    required: "Password Should not be blank",
			minlength: "Password Should have minimum 8 digit",
		  },
		 
		  dealer_repassword: {
		    required: "Password Should not be blank",
			equalto: "Password does not match",
		  },
		},
		// errorElement: 'div',
		// errorLabelContainer: '.errorTxt'
		errorPlacement: function(label, element) {
        label.addClass('arrow');
        label.insertAfter(element);
	    },
	    wrapper: 'span'
	  });


  	// profile change password start here
  	$("#change_pass").validate({

	    rules: {
	      currentpassword : {
	        required: true,
	        remote : {
   				url:  ajax_url+'checkPassword',
		        type: "post",
		      	data: {currentpassword: function() {return $('#currentpassword').val();}}
	   		}
	      },
	      newpass : {
	        required: true,
	        minlength : 8,
	       },
	      newrepass : {
	        
	       equalTo: "#newpass",
	       },
	       
	    },
	    messages : {
		   
		  currentpassword: {
		    required: "Please enter current password",
			remote: jQuery.validator.format("password does not match. ")
		  },
		  
		  newpass: {
		    required: "Password Should not be blank",
			minlength: "Password Should have minimum 8 digit",
		  },
		 
		  newrepass: {
		    required: "Repet Password Should not be blank",
			equalto: "Password does not match",
		  },
		},
		// errorElement: 'div',
		// errorLabelContainer: '.errorTxt'
		 
	  });
  	// end here

 	 // value blank for username and passowrd
 	 $("#username").val('');
 	 $("#user_pass").val('');

 	 // add property start here
 	 $(".estimate_val").click(function(){
 	 	var estimate_val = $(this);
 	 	var dataval = estimate_val.attr("data-value");
 	 	$("#pro_estimate_return").val(dataval);
 	 })

 	 $(".transation_type").click(function(){
 	 	var transation_type = $(this);
 	 	var trans_value = transation_type.attr('data-value');

 	 	$("#pro_transaction_type").val(trans_value);
 	 })

 	 $(".request_amount").click(function(){
 	 	var request_amount = $(this);
 	 	var amount_val = request_amount.attr("data-value");
 	 	$("#pro_request_amount").val(amount_val);
 	 })

 	 $(".property_status").click(function(){
 	 	var property_status = $(this);
 	 	var property_statusval = property_status.attr('data-value');
 	 	$("#property_statusval").val(property_statusval);
 	 })

 	 $(".cityname").click(function(){
 	 	var cityname = $(this);
 	 	var cityname = cityname.attr('data-value');
 	 	 $("#cityvalue").val(cityname);
 	 	 $.ajax({
 	 	 	type  : 'post',
 	 	 	url   : ajax_url+'getCityByCountryId',
 	 	 	data  : {cityname:cityname},
 	 	 	success : function(res){
 	 	 		$("#streetdiv").html(res);
 	 	 		 $(".prostreet").click(function(){
		 	 		var prostreet = $(this);
			 	 	var streetid = prostreet.attr("data-value");
			 	 	$("#streetval").val(streetid);
			 	 })
 	 	 	}
 	 	 })
 	 })
 	 // end here

 	 // delete property Start here
 	 	$(".deleteproperty").click(function(){
 	 		var deleteproperty = $(this);
 	 		var delid = deleteproperty.attr('data-id');
 	 		var txt;
			var r = confirm("Are you shure to delete this property!");
			if (r == true) {

				$.ajax({
					type : 'POST',
					url  : ajax_url+'deleteProperty',
					data : {delid:delid},
					success : function(res){
						//alert(res);
						window.location.href = base_url+'dealerdashboard'; 
						//window.location(base_url+'dealerdashboard');
					}
				})

			} 
 	 	})

 	 // delete Proposal Start here
 	 	$(".deleteproposal").click(function(){
 	 		
 	 		var deleteproposal = $(this);
 	 		var delid = deleteproposal.attr('data-id');
 	 		var txt;
			var r = confirm("Are you shure to delete this proposal !");
			if (r == true) {

				$.ajax({
					type : 'POST',
					url  : ajax_url+'deleteProposal',
					data : {delid:delid},
					success : function(res){
						// alert(res);
						window.location.href = base_url+'investorDashboard'; 
						//window.location(base_url+'dealerdashboard');
					}
				})

			} 
 	 	})	
 	 //
})