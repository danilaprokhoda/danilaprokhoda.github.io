<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "1695844636:AAF5NCg0IfI4UlYAT-pFHQDBQc-5utP5oPE";
$chat_id = "-510491943";
$arr = array(
  'Name: ' => $name,
  'Email' => $email,
  'Messages:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>