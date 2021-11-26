<?php
  if(file_exists('my_settings.txt')) {
    echo 'file found.<br>';
  } else {
    echo 'my_settings.txt does not exists.<br>';
  }
  $fh = fopen("my_settings.txt", 'w') or die("Failed to create file");
  $text = "localhost;root;pwd1234;my_database";

  fwrite($fh, $text) or die("Could not write to file");
  fclose($fh);
  echo "File 'my_settingd.txt' written successfully.<br>";

  copy('my_settings.txt', 'my_settings_backup.txt') or die("Could not copy file");
  echo "File successfully copied to 'my_settings_backup.txt'.<br>";

  if(unlink('my_settings_backup.txt')) {
    echo "File 'my_settings_backup.txt' successfully deleted.<br>";
  } else {
    echo "Could not delete file.<br>";
  }

  echo "<pre>";
  echo file_get_contents("my_settings.txt");
  echo "</pre>";
?>