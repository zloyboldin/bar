<?php
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['mail'];
  $tosend = "landingbar113@gmail.com";
    $subject = "Новая подписка пользователя";
    $email_from= '113bar@1gb.ru';
$full_name = 'Site 113bar';
 $email_from= 'admin@113bar.ru';
 $msg  = "<p><strong>Имя:</strong> ".$name."</p>\r\n";
 $msg .= "<p><strong>Почта:</strong> ".$email."</p>\r\n";
 $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
 
 $msg .= "<p><strong>Код:</strong> ".$user_id."</p>\r\n";

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