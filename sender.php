<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $vipad = $_REQUEST["vipad"];

	$to = "kirikpolino4ka@gmail.com";
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Мастер-класс: $vipad"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
