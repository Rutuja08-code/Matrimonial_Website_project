<?php

    //server connection database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    

    $sql = "insert into login (`name`, `email`, `pass`) VALUES ('".$name."','".$email."', '".$pass."');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } 
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
     mysqli_close($conn);
?>

