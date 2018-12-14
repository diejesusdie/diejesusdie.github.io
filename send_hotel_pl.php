<?php
if (isset($_POST["name"])){
if (isset($_POST["name"])) {$name = $_POST["name"];}
if (isset($_POST["tel"])) {$tel = $_POST["tel"];}
if (isset($_POST["date"])) {$date = $_POST["date"];}
if (isset($_POST["type_form"])) {$type_form = $_POST["type_form"];}
if (isset($_POST["man_guest"])) {$man_guest = $_POST["man_guest"];}
if (isset($_POST["booking_date_arrival"])) {$booking_date_arrival = $_POST["booking_date_arrival"];}
if (isset($_POST["booking_date_departureki"])) {$booking_date_departureki = $_POST["booking_date_departureki"];}

if($name=="" or $tel==""){ // Проверяем на заполненность всех полей.
	echo "<span class='send_error'>Заполните обязательные поля!</span>";
}else{
	$ip=$_SERVER["REMOTE_ADDR"]; // Вычисляем ip пользователя
	$brose=$_SERVER["HTTP_USER_AGENT"]; // Вычисляем браузер пользователя
$to = "Cen_007@mail.ru"; // Ваш email адрес
$subject = "Сообщение c сайта"; // тема письма 
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Создание сайтов Trust Code"; // Отправитель письма
$message = "
Форма: $type_form
Имя: $name<br>
Телефон: $tel<br>
Дата заезда: $booking_date_arrival<br>
Дата выезда: $booking_date_departureki<br>
Количество человек: $man_guest<br>
<br>

--------------------------------------------------------<br>
---------------IP отправителя: $ip<br>
---------------Браузер отправителя: $brose<br>
"; 
$send = mail($to, $subject, $message, $headers);


 if ($send == "true")
 {
 echo "<span class='send_good'>Ваше сообщение отправлено. Мы ответим вам в ближайшее время.</span>";
 }
 else
 {
 echo "Не удалось отправить, попробуйте снова!";
 }
}
}
?>