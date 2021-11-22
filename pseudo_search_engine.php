<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peudo Search Engine</title>
</head>
<body>
  <?php if(isset($_GET['form_submitted'])): ?>
    <h2>Search Results For <?php echo $_GET['search_term']; ?></h2>
    <?php if($_GET['search_term'] == "GET"): ?>
      <p>The GET method displays its values in the URL</p>
    <?php else: ?>
      <p>Sorry, no mistake found for your search term</p>
    <?php endif; ?>
    <p>Go <a href="/pseudo_search_engine.php">back</a> to the form</p>
  <?php else: ?>
    <h1>Pseudo Search Engine</h1>
    <form action="pseudo_search_engine.php" method="GET">
      Search Term: <input type="text" name="search_term" /><br>
      <input type="hidden" name="form_submitted" value="1">
      <input type="submit" value="Submit">
    </form>
  <?php endif; ?>
</body>
</html>