<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "5507755201:AAEv7oWZyrvxppvubwePn3TcKEwzSb5nl5k";
$chat_id = "-830899859";

$formData = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
    $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram) {
    echo "Success";
}else{
    echo "Error";
}