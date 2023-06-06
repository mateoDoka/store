<?php
        $conn = mysqli_connect("localhost", "root", "", "db");
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
         
       
        $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $number=$_REQUEST['number'];
    $message=$_REQUEST['message'];
    
        $sql = "INSERT INTO contactform (name, email,number,message) VALUES ('$name', '$email','$number', '$message')";
         
        if(mysqli_query($conn, $sql)){
 echo '<script>alert("data stored in a database successfully.")</script>';
        } else{
            echo "ERROR: ! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        mysqli_close($conn);
?>