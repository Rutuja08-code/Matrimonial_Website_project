<?php

    //server connection database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact2";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    

    $sql = "insert into contact2 (`name`, `email`, `msg`) VALUES ('".$name."','".$email."', '".$msg."');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } 
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
     mysqli_close($conn);
?>

