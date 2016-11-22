<? // Данные о новом подписчике

header('Content-Type: text/html; charset="UTF-8"');
$user_email = urldecode($_POST['mail']);
$user_id = urldecode($_POST['client_id']);
$user_name = urldecode($_POST['name']);
$user_phone = urldecode($_POST['phone']);
$user_lists = "5055642";
$user_ip = "12.34.56.78";
$user_tag = urldecode("Зарегистрирован");
$api_key = '5cj74qoqoyh4npckit7mdoj3wktrepjhjso1qiuo';
// Создаём POST-запрос
$POST = array (
  'api_key' => $api_key,
  'list_ids' => $user_lists,
  'double_optin'=>1,
  'fields[email]' => $user_email,
  'fields[phone]' => $user_phone,
  'fields[Name]' => $user_name,
  'fields[clientid]' => $user_id,
  //'request_ip' => $user_ip,
  'tags' => $user_tag
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
?>