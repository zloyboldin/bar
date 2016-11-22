<?php
header('Content-Type: text/html; charset="UTF-8"');
$servername = "mysql85.1gb.ru";
$username = "gb_coversion";
$password = "92cd1bd4b90";
$dbname = "gb_coversion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
} 
$name = $_GET['name'];

$mail = $_GET['mail'];
$phone = $_GET['phone'];
$client_id = $_GET['client_id'];
$sql = "UPDATE maintable SET FIO='$name',EMAIL='$mail', PHONE='$phone',CLIENT_ID='$client_id',STATUS='Зарегистрирован' WHERE STATUS='Выдан' LIMIT 1";
$result =$conn->query("SELECT * FROM maintable WHERE  STATUS='Выдан'");

if ($result && mysqli_num_rows($result) > 0)

    {
if ($conn->query($sql) === TRUE) {
    echo "Новая запись добавлена!";
    $getid =$conn->query("SELECT ID FROM maintable WHERE  FIO='".$name."'");
    while ($row = $getid->fetch_assoc()) {
    	$user_id=$row['ID'];}
    	echo 'Промо код клиента - '.$user_id.'<br/>';
    $user_lists = "5055642";
    $user_ip = "12.34.56.78";
    $api_key = '5cj74qoqoyh4npckit7mdoj3wktrepjhjso1qiuo';
    
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

    
    // Создаём POST-запрос
    $POST = array (
      'api_key' => $api_key,
      'list_ids' => $user_lists,
       'double_optin'=>1,
      'fields[email]' => urldecode($mail),
      'fields[phone]' =>  urldecode($phone),
      'fields[Name]' =>  urldecode($name),
      'fields[clientid]' => $user_id,
      //'request_ip' => $user_ip,
   
    );
    
    // Устанавливаем соединение
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $POST);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_URL, 
                'http://api.unisender.com/ru/api/subscribe?format=json');
    $result = curl_exec($ch);
    
    if ($result) {
      // Раскодируем ответ API-сервера
      $jsonObj = json_decode($result);
    
      if(null===$jsonObj) {
        // Ошибка в полученном ответе
        echo "Invalid JSON";
    
      }
      elseif(!empty($jsonObj->error)) {
        // Ошибка добавления пользователя
        echo "An error occured: " . $jsonObj->error . "(code: " . $jsonObj->code . ")";
    
      } else {
        // Новый пользователь успешно добавлен
        echo "Added. ID is " . $jsonObj->result->person_id;
    
      }
    } else {
      // Ошибка соединения с API-сервером
      echo "API access error";
    }
    // Ваш ключ доступа к API (из Личного Кабинета)

    header('Content-Type: text/html; charset="UTF-8"');
    // Параметры сообщения
    // Если скрипт в кодировке UTF-8, не используйте iconv
    $sms_from = "Bar 113";
    $sms_to =urldecode($phone);
    $sms_text = urldecode("Привет,".$name."! Твой промокод ".$user_id.". Бронируй стол по тел.: 2220292");
    
    // Создаём POST-запрос
    $POST = array (
      'api_key' => $api_key,
      'phone' => $sms_to,
      'sender' => $sms_from,
      'text' => $sms_text
    );
    
    // Устанавливаем соединение
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $POST);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_URL,
                'http://api.unisender.com/ru/api/sendSms?format=json');
    $result = curl_exec($ch);
    
    if ($result) {
      // Раскодируем ответ API-сервера
      $jsonObj = json_decode($result);
    
      if(null===$jsonObj) {
        // Ошибка в полученном ответе
        echo "Invalid JSON";
    
      }
      elseif(!empty($jsonObj->error)) {
        // Ошибка отправки сообщения
        echo "An error occured: " . $jsonObj->error . "(code: " . $jsonObj->code . ")";
    
      } else {
        // Сообщение успешно отправлено
        echo "SMS отправлено. Id сообщения " . $jsonObj->result->sms_id;
        echo "SMS стоимость " . $jsonObj->result->price . " " . $jsonObj->result->currency;
    
      }
    } else {
      // Ошибка соединения с API-сервером
      echo "API access error";
    }
    
    
    
    
    
    
    
    
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	}
	else
	{
		
		echo 'В таблице кончились свободные ID';
	}
	
	
$conn->close();
?>