<?php
session_start();

   $email = $_POST['email'];
   $password = $_POST['password'];

   $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password";

   $result = mysqli_query($query);

   if($result->num_rows())
   {
    echo "login sucessfully";
    $_SESSION['user'] = $result->fetch_assoc();
   }

?>