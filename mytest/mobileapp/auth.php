<p>HELLO WORLD</p>
<?php
    // header('Access-Control-Allow-Origin: *');
    // $con = mysqli_connect("localhost","root","","mobileapp") or die("connection error");

    include 'connection.php';
    $con = connectdb();

    $email = $_POST['email'];
    $password = $_POST['password'];
        // $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM 'users' WHERE 'email'='$email'"));
    $insert = mysqli_query($con,"INSERT INTO users (userid, email, password) VALUES (NULL,'$email','$password')");
    // $insert = "INSERT INTO user (firstname, lastname) VALUES ('$fn', '$ln')";
    // $insert = "INSERT INTO `users` (id`, `email`, `password`)
    // $insert = mysqli_query($con,"INSERT INTO `course_details` (`title`,`duration`,`price`) VALUES ('$title','$duration','$price')");
    // $insert= mysqli_query($con,"INSERT INTO `course_details` (`title`,`duration`,`price`) VALUES ('$title','$duration','$price')");

    
    if($insert == TRUE) {
        echo "New record created successfully";
    }else {
        echo "Error: " . $insert . "<br>" . $con->error;
    }
    $con->close();

    if(isset($_POST['login']))
    {
        $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$password'"));
        if($login != 0)
            echo "success";
        else
            echo "error";
    }
    mysqli_close($con);

?>