<? // Ваш ключ доступа к API (из Личного Кабинета)
$api_key = "5cj74qoqoyh4npckit7mdoj3wktrepjhjso1qiuo";
// Данные о подписчике, которого надо отписать от списков
header('Content-Type: text/html; charset="UTF-8"');
$success=0;
$error=0;
foreach ($contacts as $contact) {
		$user_email = $contact['EMAIL'];
		$user_phone = $contact['PHONE'];
$user_type = "email";

// Создаём POST-запрос
$POST = array (
  'api_key' => $api_key,
  'contact_type' => $user_type,
  'contact' => $user_email,
  'list_ids'=>5055642
);
// Устанавливаем соединение
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $POST);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_URL, 
            'http://api.unisender.com/ru/api/exclude?format=json');
$result = curl_exec($ch);
// Создаём POST-запрос
$POSTT = array (
  'api_key' => $api_key,
  'contact_type' => 'phone',
  'contact' => $user_phone,
  'list_ids'=>5055642
);

// Устанавливаем соединение
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $POSTT);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_URL, 
            'http://api.unisender.com/ru/api/exclude?format=json');
$result = curl_exec($ch);

if ($result) {
  // Раскодируем ответ API-сервера
  $jsonObj = json_decode($result);

  if(null===$jsonObj) {
    // Ошибка в полученном ответе
    //echo "Invalid JSON";

  }
  elseif(!empty($jsonObj->error)) {
    // Ошибка удаления подписчика
  //  echo "An error occured: " . $jsonObj->error . "(code: " . $jsonObj->code . ")";
	$error=$error+1;
  } else {
    // Адресат успешно удалён
    //echo "Excluded";
	$success=$success+1;
  }
} else {
  // Ошибка соединения с API-сервером
  echo "API access error";
}


}
echo 'Отчет Unisender<br/>';
echo 'Успешно удалено:'.$success.'<br/>';
echo 'Ошибок:'.$error.'<br/><br/>';

