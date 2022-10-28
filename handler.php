<?php
$user_name = $_POST["username"];
$user_phone = $_POST["userphone"];
echo "Привет, <i>" . $user_name . "</i>" . "<br/>";
echo "Ваш телефон: <b>" . $user_phone . "</b>";