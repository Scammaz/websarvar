<!DOCTYPE html>
<html>
<head>
<title> Yeet  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->

</head>

<body>
<?php
$email = test_input($_GET["email"])
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
?>

Welcome <?=$_GET["first"]. " " . $_GET["last"];?> <br>
Your email address is: <?php echo ["email"]; ?>

</body>
</html>