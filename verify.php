<?php
$access_token = '8SYju7+VuWn8XmIkTyoQwqJieP32HOTlca1jgjMbI+ShDwtgQIGY9xarNlPd8+DezXxGhBD00cdAlj4rCcrAqApOW3qe54WSsRPdqa+7TrFZYiIGU0NcZ4sRPkH+QY6KTYO8UE+QTcQrJRr504/BYAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
