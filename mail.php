<?php

$recepient = "kravchenko1395@gmail.com";
$sitename = "promotix";
$nameform = trim($_POST["name_form"]);
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$company = trim($_POST["company"]);

$pagetitle = "Новая заявка с сайта";
$message = "Name form: $name_form \nName: $name \nEmail: $email \nCompany name: $company ";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?> 