<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    loginUser($email, $password);

}

function loginUser($email, $password){
    $dir = dirname(__DIR__, 1);
    $file = $dir . "\storage\\users.csv";
    $file = fopen($file,'r');

    while (($data = fgetcsv($file, 0, ",")) !== FALSE) 
    {        
        if ($data[1] === $email && $data[2] === $password){
            $_SESSION['username'] = $data[0];
            header('Location: /userAuth/dashboard.php');
        } else {
            header('Location: /userAuth/forms/login.html');
        }
            fclose($file);
    }
     
}

 
