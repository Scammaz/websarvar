<!DOCTYPE html>
<html>
<head>
<title> Yeet  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->

</head>

<body>

Welcome <?=$first. " " . $last;?> <br>
Your email address is: <?php echo $email; ?>


</body>
</html>

<?php
$email = ($_GET"email")
$first =($_GET"first" )
$last =($_GET"first" )
$email = filter_var($email, FILTER_VALIDATE_EMAIL)
$first = filter_var($first, FILTER_VALIDATE_STRING)
$last = filter_var($last, FILTER_VALIDATE_STRING)
?>
<?php                       
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>