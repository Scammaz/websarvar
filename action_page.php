<!DOCTYPE html>
<html>
<head>
<title> Yeet  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->

</head>

<body>
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
Welcome <?=$_GET["first"]. " " . $_GET["last"];?> <br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>