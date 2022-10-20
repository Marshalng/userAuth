<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  registerUser($username, $email, $password);
  //var_dump($_POST);
}

function registerUser($username, $email, $password){
    //save data into the file 
    $dir = dirname(__DIR__, 1);
   $file = $dir . "\storage\\users.csv";
    $file = fopen($file, 'a');
     fputcsv($file,$_POST);
     fclose($file);
     echo "User Successfully registered";
 
}
 

