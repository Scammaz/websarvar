<!DOCTYPE html>
<html>
<head>
<title> Yeet  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->

</head>

<body>
<?php
$email = test_input($_GET["email"])
$first = ($_GET["first"])
$last = ($_GET["last"])  
// Validation                   
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
Welcome <?=$first. " " . $last;?> <br>
Your email address is: <?php echo $email; ?>





</body>
</html>