<?

$request = array('action'=>'login','login'=>'ferrrasil@gmail.com','passwd'=>'ba5Heej');

$data = array('apiversion' => 100, 'json' => 1,'request'=>$request);  
$data_string =http_build_query($data);	
echo ($data_string);
$ch = curl_init('https://api.sendsay.ru/');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                           
curl_setopt($ch, CURLOPT_POST, true);                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/x-www-form-urlencoded',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
 
$result = curl_exec($ch);

echo '<pre>';               
print_r($result);

echo '</pre>';               

?>