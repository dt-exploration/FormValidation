<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="forma.php">
  Name: <input type="text" name="name" value="<?php  ?>">
  <span class="error">* <?php ?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php  ?>">
  <span class="error">* <?php ?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php ?>">
  <span class="error"><?php ?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender"  value="other">Other
  <span class="error">* </span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>


<?php
$email="d@gmail.com";
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));

$url="https://www.google.com";
var_dump(filter_var($url,FILTER_VALIDATE_URL));

$ip="133.111.111.111";
var_dump(filter_var($ip,FILTER_VALIDATE_IP));




 ?>
</body>
</html>
