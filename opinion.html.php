<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Javasciprt Libraries - Opinion Poll</title>
</head>
<body>
  <h2>Javascript libraries - Opinion Poll</h2>
  <p><b>What is your favorite Javascript?</b></p>
  <form action="opinion_poll.php" method="POST">
    <p>
      <input type="radio" name="vote" value="1" />jQuery<br />
      <input type="radio" name="vote" value="2" />Moo Tools<br />
      <input type="radio" name="vote" value="3" />YUI Library<br />
      <input type="radio" name="vote" value="4" />Glow<br />
    </p>
    <p>
      <input type="submit" name="submitbutton" value="OK" />
    </p>
  </form>
</body>
</html>