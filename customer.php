<?php


$servername="localhost";
$username="root";
$password="";
$database_name="misga";
try {
    $conn=mysqli_connect("localhost","root","","misga");
    if(!$conn)
    {
        die("Connection Failed" . mysqli_connect_error());
    }
   
    if (isset($_POST['Register']))
    {
        $fullName = $_POST['fullName'];
        $address = $_POST['address'];
        $teleNumber = $_POST['teleNumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
   
        $sql_query = "INSERT INTO customer (fullName,address,teleNumber,email,password)
        VALUES ('$fullName' , '$address' , '$teleNumber' , '$email' , '$password')";
   
           if(mysqli_query($conn,$sql_query))
           {
               echo"New Details Entry inserted successfully !";
           }
           else
           {
               echo"Error" . $sqyl . "" . mysqli_error($conn);
           }
           mysqli_close($conn);
   
    }

}

catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }


?>