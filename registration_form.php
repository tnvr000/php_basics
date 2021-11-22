<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>
<body>
  <?php if(isset($_POST['form_submitted'])): ?>
    <h2><?php echo $_POST['firstName']; ?></h2>
    <p>
      You have been regristered as
      <?php echo $_POST['firstName'] . ' ' . $_POST['lastName']; ?>
    </p>
    <p>
      Go <a href="/registration_form.php">back</a> to form
    </p>
  <?php else: ?>
    <h1>Registration From</h1>
    <form action="registration_form.php" method="POST">
      First Name: <input type="text" name="firstName" /><br>
      Last Name: <input type="text" name="lastName" /><br>
      <input type="hidden" name="form_submitted" value="1">
      <input type="submit" value="Submit">
    </form>
  <?php endif; ?>
</body>
</html>