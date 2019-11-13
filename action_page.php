<!DOCTYPE html>
<html>
<head>
<title> Yeet  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->
        <script src="validate/checkEmptyForm.js"> </script> <!--external javascript form check-->
        <script src="validate/validateName.js"></script> <!--external javascript name check-->  
</head>

<body>

Welcome <?php echo $_POST["first","last"] ; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>