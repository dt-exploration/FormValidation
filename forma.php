<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php

$nameErr = $emailErr = $websiteErr = $genderErr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

//Name
////////////////////////////////////////////////////////////////////
if (empty($_POST["name"])) {
    $nameErr = "Name is required !";
    $name = "WRONG";
} else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[A-Z\d\s]+$/i", $name )) {
        $nameErr = "Special characters not allowed !";
    }
  }
////////////////////////////////////////////////////////////////////

//E mail
////////////////////////////////////////////////////////////////////
if (empty($_POST["email"])) {
    $emailErr = "E-mail is required !";
    $email = "WRONG";
} else {
    $email = test_input($_POST["email"]);

    if (filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
        $emailErr = "Invalid E-mail ! ";
    }
}
/////////////////////////////////////////////////////////////////////



//Website
/////////////////////////////////////////////////////////////////////
if (empty($_POST["website"])) {
  $websiteErr = "";
  $website = "WRONG";
} else {
  $website = test_input($_POST["website"]);

  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]
             *[-a-z0-9+&@#\/%=~_|]/i",$website)) {

      $websiteErr = "Invalid website !";
  }
}
/////////////////////////////////////////////////////////////////////



//Comment
/////////////////////////////////////////////////////////////////////
$comment = test_input($_POST["comment"]);
/////////////////////////////////////////////////////////////////////



//Gender
////////////////////////////////////////////////////////////////////
if (empty($_POST["gender"])) {
    $genderErr = "Gender is required !";
} else {
    $gender = test_input($_POST["gender"]);
}
////////////////////////////////////////////////////////////////////

echo "$name<br>";
echo "$email<br>";
echo "$website<br>";
echo "$comment<br>";


}
 ?>

 <h2>PHP Form Validation Example</h2>
 <p><span class="error">* required field</span></p>
 <form method="post" action="forma.php">
   Name: <input type="text" name="name" value="<?php  ?>">
   <span class="error">* <?php echo "$nameErr";?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php  ?>">
   <span class="error">* <?php echo "$emailErr";?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php ?>">
   <span class="error"><?php echo "$websiteErr"; ?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"><?php ?></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender"  value="male">Male
   <input type="radio" name="gender"  value="other">Other
   <span class="error"><?php echo "$genderErr";?> </span>
   <br><br>
   <input type="submit" name="submit" value="Submit">
 </form>

</body>
</html>
