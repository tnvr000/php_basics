<?php
  echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s") . "<br>";

  date_default_timezone_set("America/Havana");
  echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s") . "<br>";

  echo mktime(0 , 0, 0, 10, 13, 2025);
?>