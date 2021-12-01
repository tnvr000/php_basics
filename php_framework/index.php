<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP MVC Frameworks - Search Engine</title>
</head>
<body>
  <h2>PHP MVC Framework - Search Engine</h2>
  <p><b>Type the first letter of the PHP MVC Framework</b></p>
  <form action="index.php" method="POST">
    <p>
      <input type="text" size="40" id="textHint" onkeyup="showName(this.value)" />
    </p>
  </form>
  <p>Matches: <span id="textName"></span></p>
</body>
</html>