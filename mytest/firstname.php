<?php
    $con = mysqli_connect("localhost","root","","profile") or die ("unable to connect");

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $sql = "INSERT INTO 'my_table'('firstname','lastname') VALUES('$firstname','$lastname')";
    $result = mysqli_query($con,$sql);
    if($result) {
        echo $firstname." ".$lastname;
    } 
    else {
        echo "unable to insert data";
    }	
?>