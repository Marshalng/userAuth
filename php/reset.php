<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    resetPassword($email, $password);
}
 
function resetPassword($email, $password){
    $dir = dirname(__DIR__, 1);
    $file = $dir . "\storage\\users.csv";
    $file = fopen($file,'r+');
while (($data = fgetcsv($file, 0, ",")) ) 
    {        
        if ($data[1] === $email){
        
                     $data[2] == $password;
    
                    fputcsv($file,[$data[0],$email,$password]);
                         echo "Password updated";
            
                        } else {
                        echo "User does not exist";
                       } 
    }
    fclose($file);
}

 