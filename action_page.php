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
    echo "<br>";
    echo ("First Name = $first");
    echo "<br>";
    echo ("Last Name = $last");
    echo "<br>";
?>

<?php
$servername = "localhost";
$username = "php";
$password = "password";
$dbname = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT userid, firstname, lastname, email FROM users;";
#$sql_insert = "INSERT into users(firstname,lastname,email)values("$first","$last","$email");";

$result = mysqli_query($conn, $sql);

#$inject_php = mysqli_query($conn, $sql_insert);

#$inject_php;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["userid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " Email:" . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


</body>
</html>
