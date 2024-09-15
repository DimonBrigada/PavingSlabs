<?php

$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["phone"];

if($name=="" or $email=="" or $tel==""){
    echo "Заполните все поля";
}
else{
 
    $to = "shatalov.mitia2017@yandex.ru"; 
    $subject = "Письмо с обратной связи"; 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: <test@mail.ru>\r\n";


    $message .= "Имя пользователя: ".$name."\n";
    $message .= "Почта: ".$email."\n";
    $message .= "Телефон: ".$tel."\n";

    $send = mail($to, $subject, $message, $headers);


    if ($send == "true")
    {
        echo "<p style='color: green;'>Ваше сообщение отправлено. Мы ответим вам в ближайшее время.\r\n</p>";
    }

    else
    {
        echo "<p style='color: red;'>Не удалось отправить, попробуйте снова!</p>";
    }
}
?>