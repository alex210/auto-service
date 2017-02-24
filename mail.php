<?php

  $recepient = "sanya.groza@yandex.ua";
  $sitename = "AUTO-SERVICE";

  $name = trim($_POST["name"]);
  $phone = trim($_POST["phone"]);
  $message = "Имя: $name \nТелефон: $phone";

  $pagetitle = "Новая заявка с сайта \"$sitename\"";
  mail($recepient, $sitename, $message, "Content-type: text/plain; charset=\"UTF-8\"\n From: $recepient");


 ?>
