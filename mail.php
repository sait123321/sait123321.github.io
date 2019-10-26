 <?php
$to = "temic1997@bk.ru"; // емайл получателя данных из формы 
$tema = "Форма обратной связи на PHP"; // тема полученного емайла 
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message1 = "Ваша фамилия: ".$_POST['fam']."<br>";//присвоить переменной значение, полученное из формы name=name
$message2 = "Компания: ".$_POST['comp']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message3 .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message4 .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message5 .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers6  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema,$message, $message1,$message2,$message3,$message4,$message5,$message6, $headers); //отправляет получателю на емайл значения переменных
?>