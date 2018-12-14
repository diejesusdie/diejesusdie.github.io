<?php
if (isset($_POST["name"])){
if (isset($_POST["name"])) {$name = $_POST["name"];}
if (isset($_POST["tel"])) {$tel = $_POST["tel"];}
if (isset($_POST["date"])) {$date = $_POST["date"];}
if (isset($_POST["type_form"])) {$type_form = $_POST["type_form"];}
if (isset($_POST["man_guest"])) {$man_guest = $_POST["man_guest"];}
if (isset($_POST["booking_date_arrival"])) {$booking_date_arrival = $_POST["booking_date_arrival"];}
if (isset($_POST["booking_date_departureki"])) {$booking_date_departureki = $_POST["booking_date_departureki"];}
if (isset($_POST["room_booking"])) {$room_booking = $_POST["room_booking"];}

if($name=="" or $tel==""){ // Проверяем на заполненность всех полей.
	echo "<span class='send_error' style='position:fixed;right:5px;top:5px;z-index:9999;font-size:1em;padding:15px;display:inline-block;border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;width: auto;'>Заполните обязательные поля!</span>";
}else{
	$ip=$_SERVER["REMOTE_ADDR"]; // Вычисляем ip пользователя
	$brose=$_SERVER["HTTP_USER_AGENT"]; // Вычисляем браузер пользователя
$to = "sevenhotelnn@gmail.com"; // Ваш email адрес
$subject = "Сообщение c сайта"; // тема письма 
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Броирование номера Trust Code"; // Отправитель письма
$message = "
Форма: БРОНИРОВАНИЕ НОМЕРА<br>
Имя: $name<br>
Телефон: $tel<br>
Дата заезда: $booking_date_arrival<br>
Дата выезда: $booking_date_departureki<br>
Количество человек: $man_guest<br>
Номер: $room_booking<br>
<br>

--------------------------------------------------------<br>
---------------IP отправителя: $ip<br>
---------------Браузер отправителя: $brose<br>
"; 
$send = mail($to, $subject, $message, $headers);


 if ($send == "true")
 {
 echo "<span class='send_good'  style='position:fixed;right:5px;top:5px;z-index:9999;font-size:1em;padding:15px;display:inline-block;border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;width: auto;'>Вы успешно забронировали комнату! Мы скоро свяжемся с вами.</span>";
 }
 else
 {
 echo "Не удалось отправить, попробуйте снова!";
 }
}
}
?>