<?php
    header("Access-Control-Allow-Origin: *");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mobileapp";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $fn = mysqli_real_escape_string($_GET['firstname']);
    $ln = mysqli_real_escape_string($_GET['lastname']);

    if(!$conn){
        die("Connection Failed: " .mysqli_connect_error());
    }

    $sql = "INSERT INTO myaccount (firstname, lastname) VALUES ('$fn', '$ln')";

    if ($conn->query($sql) === TRUE) {
        echo "NEW RECORD CREATED";
    die();
    }
    else {
    echo "ERROR: " .$sql. "<br>" . mysqli_error($conn);
    }
    $conn->close();
?>
