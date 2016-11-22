function sendSms(phone){
var post_data = {'phone':phone};
 $.get('http://113bar.ru/system/process.php', post_data, function(response){  

                //load json data from server and output message     
                if(response.type == 'error')
                {
                    alert(response.text);
                }else{
		 				alert(response.text)
                }
                
			       }, 'json');
			       
			       }

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
				ga(function(tracker) {
								clientId = tracker.get('clientId');
				
								});
  			  post_data = {'name':user_name,'mail':user_mail, 'phone':user_phone,'client_id':clientId};
			 $.get('http://113bar.ru/system/process.php', post_data, function(response){  
			
                //load json data from server and output message     
                if(response.type == 'error')
                {
                    alert(response.text);
                }else{
		 				sendSms(user_phone);
						
                }
                
			       }, 'json');
			     $(".form-group,.input-field,.btn-system").hide();
			     	$(".thanks").fadeIn(400);
//            $.post('http://113bar.ru/system/newsubscriber.php', post_data, function(response){  
//            
//                            //load json data from server and output message     
//                            if(response.type == 'error')
//                            {
//                                alert(response.text);
//                            }else{
//                           
//                            }
//                            
//                        }, 'json');
//            
               $.post(
                "http://www.google-analytics.com/collect",
                {
                        v: 1,
                        tid: 'UA-61301662-1',
                        cid: clientId,
                        t: 'pageview', 
                       dp: '/registered/'
                },'json'
				);
						ga('set', 'dimension1', clientId);
						
						}
							//return false;
						});
						
});