<?php
  require 'animal.php';
  require 'cow.php';
  require 'lion.php';

  $cow = new Cow('Herbivore', 'Grass');
  $lion = new Lion('Carnivore', 'Meat');
  echo '<strong>Cow Object</strong><br>';
  echo 'The Cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . '<br><br>';
  
  echo '<strong>Lion Object</strong><br>';
  echo 'The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food();
?>