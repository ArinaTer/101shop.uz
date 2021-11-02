<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$source = $_COOKIE['utm']['utm_source'];
$medium = $_COOKIE['utm']['utm_medium'];
$campaign = $_COOKIE['utm']['utm_campaign'];
$url = $_SERVER['HTTP_HOST'];
$token = "1004219203:AAHfiSQnJpUAVuhkxuulBgV-ZNVHuJhLkeU";
$chat_id = "-452268586";

if (empty($source)) { $source = '-'; }
if (empty($medium)) { $medium = '-'; }
if (empty($campaign)) { $campaign = '-'; }

$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Веб-сайт: ' => $url,
  'Источник: ' => $source,
  'Тип трафика: ' => $medium,
  'Название кампании: ' => $campaign
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");