<!DOCTYPE html>
<html>
<head>
<title> Yeet  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->

</head>

<body>
<?php
$email = ($_GET"email")
$first =($_GET"first" )
$last =($_GET"last" )
$email = filter_var($email, FILTER_VALIDATE_EMAIL)
$first = filter_var($first, FILTER_VALIDATE_STRING)
$last = filter_var($last, FILTER_VALIDATE_STRING)
echo("Welcome "$first, $last)
echo("Your Email Address is:", $email)

?>

</body>
</html>
