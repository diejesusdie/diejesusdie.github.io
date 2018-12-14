<?php
if (isset($_POST["name"])){
if (isset($_POST["name"])) {$name = $_POST["name"];}
if (isset($_POST["tel"])) {$tel = $_POST["tel"];}
if (isset($_POST["date"])) {$date = $_POST["date"];}
if (isset($_POST["type_form"])) {$type_form = $_POST["type_form"];}

if($name=="" or $tel==""){ // Проверяем на заполненность всех полей.
	echo "<span style='color:red'>Заполните обязательные поля!</span>";
}else{
	$ip=$_SERVER["REMOTE_ADDR"]; // Вычисляем ip пользователя
	$brose=$_SERVER["HTTP_USER_AGENT"]; // Вычисляем браузер пользователя
$to = "sevenhotelnn@gmail.com"; // Ваш email адрес
$subject = "Сообщение c сайта"; // тема письма 
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Создание сайтов Trust Code"; // Отправитель письма
$message = "
Форма: $type_form
Имя: $name<br>
Телефон: $tel<br>
Текст: $date<br><br>

--------------------------------------------------------<br>
---------------IP отправителя: $ip<br>
---------------Браузер отправителя: $brose<br>
"; 
$send = mail($to, $subject, $message, $headers);


 if ($send == "true")
 {
 echo "Ваше сообщение отправлено. Мы ответим вам в ближайшее время.";
 }
 else
 {
 echo "Не удалось отправить, попробуйте снова!";
 }
}
}
?>