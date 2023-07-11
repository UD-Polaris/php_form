<?php
$host = "localhost";  
$user = "root"; 
$pass = " "; 
$dbase = "ud"; 

$connection = new mysqli($host, $user, $pass, $dbase);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if(isset($_GET['email'])) {
    $email = $_GET['email'];

   
    $sql = "SELECT report FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $reportPath = $row['report'];

        header('Content-type: application/pdf');
        readfile($reportPath);
    } else {
        echo "No health report found for the provided email.";
    }
}

mysqli_close($connection);
?>
