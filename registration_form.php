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
    <?php if(!isset($_POST['agree'])): ?>
      <p>You have not accepted our terms of services</p>
    <?php else: ?>
      <h2>Thank You <?php echo $_POST['first_name']; ?></h2>
      <p>
        You have been regristered as
        <?php echo $_POST['first_name'] . ' ' . $_POST['last_name']; ?>
      </p>
    <?php endif; ?>
    <p>Go <a href="/registration_form.php">back</a> to form</p>
  <?php else: ?>
    <h1>Registration From</h1>
    <form action="registration_form.php" method="POST">
      First Name: <input type="text" name="first_name" /><br>
      Last Name: <input type="text" name="last_name" /><br>
      <label for="checkboxAgree">
        <input type="checkbox" name="agree" id="checkboxAgree">
        Agree To Terms of Services
      </label><br>
      <input type="hidden" name="form_submitted" value="1">
      <input type="submit" value="Submit">
    </form>
  <?php endif; ?>
</body>
</html>