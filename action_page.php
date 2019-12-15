<!DOCTYPE html>
<html>
<head>
<title> Yeet  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->

</head>

<body>
<?php
$email = ($_GET['email']);
$first =($_GET['first']);
$last =($_GET['last']);

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$first = filter_var($first, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$last = filter_var($last, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    echo ( "$email is valid email");
 #   <break>
    echo ("First name = $first");
 #   <break>
    echo ("Last Namme = $last");

?>

</body>
</html>
