<?php
  $framewoeks = array("CodeIgniger", "Zend Framework", "Cake PHP", "Kohana");
  $name = $_POST['name'];

  if(strlen(trim($name)) > 0) {
    $match = "";
    for($i = 0; $i < count($frameworks); ++$i) {
      if(strtolower($name) == strtolower(substr($framewoeks[$i], 0, strlen($name)))) {
        if($match == "") {
          $match = $frameworks[$i];
        } else {
          $match = $match . ", " . $framewoeks[$i];
        }
      }
    }
  }

  echo ($match == 0) ? 'no match found' : $match;
?>