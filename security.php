<?php
  $user_input = "<script>alert('Your site sucks!');</script>";
  echo "<h4>My Commenting System</h4>";
  echo strip_tags($user_input);
  echo filter_var($user_input, FILTER_SANITIZE_STRIPPED);

  echo '<br>';
  echo "<br>MD5 Hash: " . md5("password");
  echo "<br>MD5 Hash: " . md5("password");
  echo "<br>SHA1 Hash: " . sha1("password");
  echo "<br>SHA1 Hash: " . sha1("password");
?>