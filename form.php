<?php

// echo 'Hello'
$server_name = "95.217.199.12";
$username = "trulyfut_ppcuser";
$password = ",^DB1QkJ=pGd";
$database_name = "trulyfut_ppc";

// Create connection
$conn = mysqli_connect($server_name, $username, $password,$database_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $number = $_POST['Number'];
    $message = $_POST['Message'];
    $service = $_POST['Services'];
    $sql_query = "INSERT INTO contactForms (name,email,phNum,service,message) VALUES ('$name','$email','$number','$service','$message') ";
    if (mysqli_query($conn,$sql_query)) {
        echo 'Inserted Successfully';
    }
    else{
        echo 'Error:';
    }
    mysqli_close($conn);
}


?>