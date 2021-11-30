<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Javascript Libraries Poll Result</title>
</head>
<body>
  <h2>Opinion Poll Results</h2>
  <p><b>What is your favorite javascript Library?</b></p>
  <p><b><?php echo $choices_count[0]; ?></b> people have thus far taken part in this poll:</p>
  <p>
    <table>
      <?php echo($table_rows); ?>
    </table>
  </p>
</body>
</html>