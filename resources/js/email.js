jQuery(document).ready(function(){
	jQuery(document).on("click","#submit",function(){
		var $email  = jQuery("#email").val();	
		if($email==''){
			jQuery("#msg").html("<p id='msg2'>Please enter your email address</p>");	
			return false;
		}else{
			jQuery("#msg").html();	
		}

		if( !validateEmail($email)) { 
			jQuery("#msg").html("<p id='msg2'>Please enter a valid email address</p>");	
			return false;
		}

		$.ajax({
			type : "POST",
			data : "email="+$email+"&type=order",
			url :  "order.php",
			beforeSend: function(){
				jQuery("#msg").html("<img src='resources/images/loader.gif'>");
			},
			success : function(r){
				jQuery("#signup")[0].reset();
				$.ajax({
					url: "https://docs.google.com/forms/d/1O3jGrUemXQ_5JHINzQOiiqDAP1P-q0TRFFuD3uwUQXs/formResponse",
					data: {"entry.800015304":$email} ,
					type: "POST",
					dataType: "xml",
					statusCode: {
						0: function () { return true; },
						200: function () { return true; }
					}
				});

				jQuery("#msg").html("<p id='msg3'>Thank you for joining out mailing list! We will let you know as soon as we are up and running!</p>");	
			}
		});

	});
});

function validateEmail($email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return emailReg.test( $email );
}