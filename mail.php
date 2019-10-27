<?php
$spam = $_POST['spam'];
$msg_box = "";
if($_POST['btn_submit']){
$errors = array();
if($_POST['name'] == "") $errors[] = "Поле 'Ваше имя' не заполнено!";
if($_POST['sname'] == "") $errors[] = "Поле 'Ваша фамилия' не заполнено!";
if($_POST['comp'] == "") $errors[] = "Поле 'Компания' не заполнено!";
if($_POST['email'] == "") $errors[] = "Поле 'Почта' не заполнено!";
if($_POST['phone'] == "") $errors[] = "Поле 'Телефон' не заполнено!";
if($_POST['message'] == "") $errors[] = "Поле 'Текст сообщения' не заполнено!";
if(empty($errors)){
$message .= "имя: ".$_POST['name']."<br>";
$message .= "фамилия: ".$_POST['sname']."<br>";
$message .= "отчество: ".$_POST['otch']."<br>";
$message .= "Компания: ".$_POST['comp']."<br>";
$message .= "E-mail: ".$_POST['email']."<br>";
$message .= "Номер телефона: ".$_POST['phone']."<br>"; 
$message .= "Сообщение: ".$_POST['message']."<br>"; 
$message .= "время: ".$_POST['sel']."<br>"; 
send_mail($message); 
$msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
}
else
{
$msg_box = "";
foreach($errors as $one_error){
$msg_box .= "<span style='color: red;'>$one_error</span><br/>";
}
}
}
function send_mail($message){
$mail_to = "temic1997@bk.ru";
$subject = "Письмо с обратной связи";
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: Тестовое письмо <адрес_почты_на_хосте>\r\n"; // от кого письмо
if (empty($spam)){ 
mail($mail_to, $subject, $message, $headers);
  header("Location: index.html");
  } else exit ;
}
?>