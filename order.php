<?php
if(isset($_REQUEST['type']) and $_REQUEST['type']=='order'){
		extract($_REQUEST);
		
		$to = ADMIN_EMAIL;

$subject = 'New Borrow Request Generated: '.date("d M Y");

$headers = "From: server@xearntechnology.com\r\n";
$headers .= "Reply-To: server@xearntechnology.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$msg = '<div>
	<div style="background:#f2f2f2;margin:0 auto;max-width:640px;padding:0 20px"><div>
  </div><table align="center" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div style="width:96%;margin:auto;padding:5px 0 0px 0;font-size:40px"> HARDWARE LIBRARY </div>
          <div style="background:#fff;color:#5b5b5b;border-radius:4px;font-family:arial;font-size:13px;padding:10px 20px;width:90%;margin:20px auto;line-height:17px;border:1px #ddd solid;border-top:0;clear:both">
            <p>Hi there!</p>
            <p> Somebody recently has requested to borrow a Product.</p>
            <p> <strong>Email: </strong> '.$email.'</p>
            <p>Email address <strong>'.$email.'</strong> has joined the mailing list"</p>
            <p> HARDWARE LIBRARY  </p>
          </div>
          </td>
      </tr>
    </tbody>
  </table>
</div>
</div></div>';
			
			
			mail($to, $subject, $msg, $headers);
			
		echo "ok";	
		
		
		die;
	}
	require('includes/site_header.php');
	
	
?>

		<section class="about-seccss minh">
			<div id="members-section">
				<div class="container">
					<div class="row">
					
                    <div class="col-sm-12">
                    <div class="col-md-2">
							&nbsp;
					</div>	
                    
                   		 <div class="col-md-8">
							<div class="title ">
								
								<div class="order-block">
                                	<p class="lh">
                                	We're not renting out hardware to consumers just yet. 
                                	Sign up below and we'll let you know when we're up and running!</p>
                                </div>
                               
							</div> <!-- end title -->
						</div> <!-- end col-md-6 -->
                       
                    <div class="col-md-2">
                        &nbsp;
                    </div> 
					</div>
                    
                    	
                        
                        <div class="row">
						<div class="col-md-6 col-md-offset-3">

							<form id="signup" method="post">

                                <p class="text-center">Sign up to join our mailing list!</p>
								<div class="input-group " >
									
									<!-- Email input -->
									<input type="email" class="form-control" name="email"  id="email" placeholder="Email adress...">
									
									<!-- Subscribe button -->
									<span class="input-group-btn">
										<button class="btn btn-md standard-button" id="submit" type="button">Go!</button>
									</span>
                                     

								</div><!-- /input-group -->
                                <br />

<center> <p class="alert alert-danger" id="msg"></p></center>
							</form>

						</div> <!-- end col-md-6 -->
					</div>
                    
                         <div class="col-sm-12"> 
                       <div class="col-md-2">
							&nbsp;
					</div>	
                    
                   		 <div class="col-md-8">
							<div class="title ">
								
								
                                
                               
							</div> <!-- end title -->
						</div> <!-- end col-md-6 -->
                       
                    <div class="col-md-2">
                        &nbsp;
                    </div> 
						 
                       </div> 
                        

					</div> <!-- end row -->
				</div> <!-- end container -->
			</div>
		</section>
	
<?php
	require('includes/site_footer.php');
?>

<script>
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
					url :  "<?php echo _SITE_ADDRESS ?>order.php",
					beforeSend: function(){
						jQuery("#msg").html("<img src='<?php echo _SITE_ADDRESS ?>resources/images/loader.gif'>");
					},
					success : function(r){
						jQuery("#signup")[0].reset();





 $.ajax({
	                 url: "https://docs.google.com/forms/d/1O3jGrUemXQ_5JHINzQOiiqDAP1P-q0TRFFuD3uwUQXs/formResponse",
                  data: {"entry.800015304":$email} ,
                  type: "POST",
                    dataType: "xml",
                    statusCode: {
                        0: function () {
                            return true;
                        },
                        200: function () {
                             
                      
						   return true;
						   
                        }
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

</script>