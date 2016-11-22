<?
// Ваш ключ доступа к API (из Личного Кабинета)
$api_key = "5cj74qoqoyh4npckit7mdoj3wktrepjhjso1qiuo";

header('Content-Type: text/html; charset="UTF-8"');
// Параметры сообщения
// Если скрипт в кодировке UTF-8, не используйте iconv
$sms_from = "Bar 113";
$sms_to =urldecode("+7(913)456-36-63");
$sms_text = urldecode("Привет! Твой промокод 6071865089860825. Бронируй стол по тел.: 2220292");

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




?>