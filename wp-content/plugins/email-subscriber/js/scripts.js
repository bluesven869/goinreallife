jQuery(document).ready(function(jQuery)
	{
		
		
		
		
		jQuery(document).on('click','.kento_subscribe_delete',function(){
				var email_id = jQuery(this).attr('data-id');
				if(confirm("Do you want to delete ?"))
					{
						jQuery(".kento_subscribe_delete_"+email_id).html();
						jQuery(".kento_subscribe_delete_"+email_id).addClass("kento_subscribe_processing");
						
						
						jQuery.ajax({
								type: 'POST',
								url: kento_email_subscriber_ajax.kento_email_subscriber_ajaxurl,
								data: {"action": "kento_email_subscriber_delete_row", "email_id": email_id},
								success: function (data) {
									jQuery(".kento_subscribe_delete_"+email_id).removeClass("kento_subscribe_processing");
									jQuery(".kento_subscribe_delete_"+email_id).addClass("kento_subscribe_deleted");
									
									jQuery(".kento_subscribe_delete_"+email_id).html(data);
									
									jQuery(".row_id_"+email_id).addClass("row-deleted");
									
									jQuery(".kento_subscribe_delete_"+email_id).removeClass("kento_subscribe_delete");
									jQuery(".kento_subscribe_delete_"+email_id).addClass("kento_subscribe_deleted");
									
																
									
								}
							});
						
						}
				
				
				
				

				
				})
		
		
		
		
		
		
		
		
		

			jQuery(".kento_email_subscriber_close").click(function(){
				
				jQuery('.kento_email_subscriber').hide();
				
				})


		// will be using for trace stats
			jQuery(".subscribe_submit").click(function(){
				

				
				
				var subscribe_email = jQuery(".subscribe_email").val();
				var subscribe_name = jQuery(".subscribe_name").val();


/*
    if (subscribe_name==null || subscribe_name == "" ) {
		jQuery(".subscribe-status-name").html("Not a valid name. ");
		jQuery(".subscribe-status").html("");
		jQuery(".subscribe-status-email").html("");
		
		var name = 'false';
        return false;
		}
	else
		{
			jQuery(".subscribe-status-name").html("");
			var name = 'true';
		}


*/




    var atpos = subscribe_email.indexOf("@");
    var dotpos = subscribe_email.lastIndexOf(".");
	var WhiteSpace = subscribe_email.indexOf(' ');
	
	

    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=subscribe_email.length || WhiteSpace>= 0 ) {
		
		//jQuery(".subscribe-status-email").html("Not a valid e-mail address. ");
		//jQuery(".subscribe-status").html("");
			//alert("Not a valid e-mail address.");
			//Enter your email to recieve access to beta release
			jQuery("#subscribe_status").html("Not a valid e-mail address. ");
			jQuery("#subscribe_status").addClass("error");
			setTimeout(function(){
			  jQuery("#subscribe_status").removeClass("error");
			  jQuery("#subscribe_status").html("Enter your email to recieve access to beta release.");
			  jQuery(".subscribe_email").focus();
			}, 2000);
			var email = 'false';
        return false;
		}
	else
		{
			jQuery(".subscribe-status-email").html("");
			var email = 'true';
		}
		
		
		
		name = 'true';
		if(name=='true' && email=='true')
			{

				jQuery.ajax(
					{
					type:"POST",
					url:kento_email_subscriber_ajax.kento_email_subscriber_ajaxurl,
					data:{action:"kento_email_subscriber_ajax",subscribe_email:subscribe_email,subscribe_name:subscribe_name},
					success:function(data)
						{
							alert(data);
							//jQuery(".subscribe_email").hide();
							//jQuery(".subscribe_submit").hide();
							jQuery(".result").html("");
							jQuery(".email").html("<p class='thankyou'><label class='ok'>&nbsp;</label>Thank you! Your email has been submitted.</p>")
							
							//jQuery(".subscribe-status-email").html("");
						}
					})
			}
					
		});
					
	})