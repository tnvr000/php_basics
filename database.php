<?php
  $conn = mysqli_connect('localhost', 'tnvr000', 'pqqrrr@123');
  if(!$conn) {
    die("Unable to connect to MySQL.");
  }
  if(!mysqli_select_db($conn, 'php_login')) {
    die("Unable to select database: " . mysqli_error($conn));
  }

  $sql_stmt = "SELECT * FROM my_contacts";
  $result = mysqli_query($conn, $sql_stmt);

  if(!$result) {
    die("Database access failed: " . mysqli_error($conn));
  }
  $rows = mysqli_num_rows($result);

  if($rows) {
    while($row = mysqli_fetch_array($result)) {
      echo "<br>ID: " . $row['id'];
      echo "<br>Full Name: " . $row['full_name'];
      echo "<br>Gender: " . $row['gender'];
      echo "<br>Contact No.: " . $row['contact_no'];
      echo "<br>Email: " . $row['email'];
      echo "<br>City: " . $row['city'];
      echo "<br>Country: " . $row['country'] . "<br>";
    }
  }

  $sql_stmt = "INSERT INTO my_contacts(full_name, gender, contact_no, email, city, country) VALUES('Poseidan', 'Male', '541', 'poseidan@sea.co', 'Troy', 'Ithaca')";
  $result = mysqli_query($conn, $sql_stmt);

  if(!$result) {
    die("Adding record failed: " . mysqli_error($conn));
  }
  echo "<br>Poseidan has been successfully added to your contacts list.<br><br>";

  $sql_stmt = "UPDATE my_contacts SET contact_no = '875' WHERE email = 'poseidan@sea.co'";
  $result = mysqli_query($conn, $sql_stmt);
  if(!$result) {
    die("Updating record failed: " . mysqli_error($conn));
  }
  echo "Poseidan contact updated successfully.<br><br>";

  $sql_stmt = "DELETE FROM my_contacts WHERE email = 'poseidan@sea.co'";
  $result = mysqli_query($conn, $sql_stmt);
  if(!$result) {
    die("Deleting record failed: " . mysqli_error($conn));
  }
  echo "Poseidan contact deleted successfully.<br><br>";

  mysqli_close($conn);

  try {
    $pdo = new PDO("mysql:host=localhost;dbname=php_login", 'tnvr000', 'pqqrrr@123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    $sql_stmt = "SELECT * FROM my_contacts";
    $result = $pdo->query($sql_stmt);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $data = array();
    foreach($result as $row) {
      $data[] = $row;
    }
    print_r($data);
  } catch(PDOException $e) {
    echo $e->getMessage();
  }

?>