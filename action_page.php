<!DOCTYPE html>
<html>
<head>
<title> Yeet  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->

</head>

<body>
<?php
$email = test_input($_GET["email"])
$first = test_input($_GET["first"])
$last = test_input($_GET["last"])

?>

Welcome <?=$first. " " . $last;?> <br>
Your email address is: <?php echo $email; ?>

<!-- Some form of server side validattion --> 

<?php                       
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

</body>
</html>