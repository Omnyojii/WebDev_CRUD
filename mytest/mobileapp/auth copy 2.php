<?php
    $con = mysqli_connect("localhost","root","","mobileapp") or die("connection error");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    if(isset($_POST['register']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM 'myaccount' WHERE 'firstname'= '$firstname'"));
        if($register == 0)
        {
            $insert = mysqli_query($con,"INSERT INTO 'myaccount' ('firstname','lastname') VALUES ('$firstname','$lastname')");
            if($insert)
                echo "success";
            else
                echo "error";
        }
        else if($register != 0)
            echo "exist";
    }
    else if(isset($_POST['login']))
    {
        $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM 'myaccount' WHERE 'firstname'='$firstname' AND 'lastname'='$lastname'"));
        if($login != 0)
            echo "success";
        else
            echo "error";
    }
    mysqli_close($con);
?>