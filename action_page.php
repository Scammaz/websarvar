<!DOCTYPE html>
<html>
<head>
<title> Action  </title>
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
   /* echo ( "$email is valid email");
    echo "<br>";
    echo ("First Name = $first");
    echo "<br>";
    echo ("Last Name = $last");
    echo "<br>";
    */
    ?>  
    <div class="centerref">
        <?php
        $x = 0
            while($x <= 5) {
                sleep(1)
                `gpio blink 22`;
                $x++;
            }
        
            // HERE IS THE INPUT AND SHOW SECTION OF THE SQL DATABASE
     if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
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
        $sql_insert = "INSERT INTO users (firstname,lastname,email) values('$first','$last','$email');";

        if (mysqli_query($conn, $sql_insert)) {
            echo "New record created successfully";
            } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            $result = mysqli_query($conn, $sql);
            echo ("<br>");
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
             while($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row["userid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "        Email:" . $row["email"]. "<br>";
            }
            } else {
                echo "0 results";
        }
    mysqli_close($conn);
    } else {
        echo("$email is not a valid email address");
        header( "refresh:5;url=index.php" );
        }
        ?>
        <?php   
        $output=shell_exec('ls-lart');
        echo"<div>$output</div>";
        ?>  
    </div> 

</body>
</html>
