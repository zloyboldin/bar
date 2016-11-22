<?php

$tosend ='bar113nsk@yandex.ru';
$subject =  $_POST['theme'];
$full_name = 'Site 113bar';
$phone = $_POST['phone'];
 $email_from= 'admin@113bar.ru';
$msg  = "<p><strong>Имя:</strong> ".$_POST['name']."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";

 

    $from = $full_name.'<'.$email_from.'>';
	
   

$headers = "From:" . $from. "\r\n";
      $headers .=         "X-Mailer: PHP/" . phpversion();
  $headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";  


if(mail($tosend, "=?UTF-8?B?".base64_encode($subject)."?=", $msg, $headers)) {
	echo json_encode(array('result' => 'ok'));
} else {
	echo json_encode(array('result' => 'fail'));
}


?> 