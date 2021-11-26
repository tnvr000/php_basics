<?php
  $my_url = "https://www.expense_meter.in";

  if(preg_match("/www/", $my_url)) {
    echo "The string $my_url contains 'www'<br>";
  } else {
    echo "The string $my_url does not contain 'www'<br>";
  }

  $my_text = "I 'love' regular expressions";
  $my_array = preg_split("/ /", $my_text);
  print_r($my_array);

  $text = "<br>We at expense_meter strive to make budgeting and expense keeping simple and convenient<br>";
  $text = preg_replace("/expense_meter/", '<span style="background-color:yellow">expense_meter</span>', $text);
  echo $text;

  $my_email = "tnvr.ah.kh@gmail.com";
  if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $my_email)) {
    echo "$my_email is a valid ecmail address.<br>";
  } else {
    echo "$my_email is not a valid email address<br>";
  }
?>