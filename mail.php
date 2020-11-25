<?php

$recepient = "kravchenko1395@gmail.com";
$sitename = "Алекперов";
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);

$pagetitle = "Новая заявка с сайта";
$message = "name: $name \nEmail: $email ";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?> 