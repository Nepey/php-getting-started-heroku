<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Life is life
  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
    <br>
   
  
    <input type="hidden" name="submitted" value="yes">
    <input type="text" name="text" required maxlength="6" placeholder="введите 6 букв"><br>
    <input type="color" name="color"></p>
      <p><input type='date' name="date"></p>
      <p><input type='month' name="month"></p>
      <p><input type="email" name="email"></p>
      <p><input type="number" name="number"></p>
      <p><input type="range" name="range"></p>
      <p><input type="checkbox" name="checkbox"></p>
      <p><select id="my-select" name="myselect" size="1" required>
   <option value="">---------</option>
   <option value="1">любит</option>
   <option value="2">не любит</option>
      </select></p>
      <textarea id="my-textarea" style="resize:none" maxlength="10" placeholder="введите аккуратно"></textarea>
      
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>

  <?php } ?>

</body>
</html>
