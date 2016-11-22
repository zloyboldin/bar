<? 

header('Content-Type: text/html; charset="UTF-8"'); 
$url = 'http://www.google-analytics.com/collect'; // This is the URL to which we'll be sending the post request.
foreach ($contacts as $contact) {
$data = array( // This is an associative array that will contain all the parameters that we'll send to Google Analytics
'v' => 1, // The version of the measurement protocol
'tid' => 'UA-61301662-1',
'cid' => $contact['CLIENT_ID'],
't' => 'pageview' ,
'dp'=>'/came/'
);
$content = http_build_query($data); // The body of the post must include exactly 1 URI encoded payload and must be no longer than 8192 bytes. See http_build_query.
$content = utf8_encode($content); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/x-www-form-urlencoded'));
curl_setopt($ch,CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
curl_setopt($ch,CURLOPT_POST, TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS, $content);
curl_exec($ch);

}
curl_close($ch);

 ?>