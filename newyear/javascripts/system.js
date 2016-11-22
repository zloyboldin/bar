 
$(document).ready(function(){
			$(".btn-system").click(function() { 
				targetform=$("#modalform");
			    //get input field values
			    var user_name       = targetform.find('.name').val(); 
			    var user_phone      = targetform.find('.phone').val();
			    var user_mail = targetform.find('.mail').val();
			    var proceed = true;
			    if(user_name==""){ 
			        targetform.find('.name').css('border-color','red'); 
			        proceed = false;
			    }
			 
			    if(user_phone=="") {    
			       targetform.find('.phone').css('border-color','red'); 
			        proceed = false;
			    }
				if(user_mail=="") {    
				   targetform.find('.mail').css('border-color','red'); 
				    proceed = false;
				}
			if(proceed) 
			{
			    //data to be sent to server
			    var post_data;
			    var output;
				var clientId;
				 
  			  post_data = {'name':user_name,'mail':user_mail, 'phone':user_phone};
			 $.get('http://113bar.ru/newyear/_contact-us.php', post_data, function(response){  
			 
                
			       }, 'json');
			     $(".form-group,.input-field,.btn-system").hide();
			     	$(".thanks").fadeIn(400);
 	
						}
							//return false;
						});
				$(".btn-page").click(function() { 
							targetform=$("#contact_form1");
						    //get input field values
						    var user_name       = targetform.find('.name').val(); 
						    var user_phone      = targetform.find('.phone').val();
						    var user_mail = targetform.find('.mail').val();
						    var proceed = true;
						    if(user_name==""){ 
						        targetform.find('.name').css('border-color','red'); 
						        proceed = false;
						    }
						 
						    if(user_phone=="") {    
						       targetform.find('.phone').css('border-color','red'); 
						        proceed = false;
						    }
							if(user_mail=="") {    
							   targetform.find('.mail').css('border-color','red'); 
							    proceed = false;
							}
						if(proceed) 
						{
						    //data to be sent to server
						    var post_data;
						    var output;
							var clientId;
							 
							  post_data = {'name':user_name,'mail':user_mail, 'phone':user_phone};
						 $.get('http://113bar.ru/newyear/_contact-us.php', post_data, function(response){  
						 
				            
						       }, 'json');
						     $(".form-group,.input-field,.btn-system,.btn-page").hide();
						     	$(".thanks").fadeIn(400);
					
									}
										//return false;
									});
});