<?php

namespace App\Classes;

use App\classes\database;

class login{
public function adminlogincheck($data){
    $email = $data['email'];
    $password = md5($data['password']);
    $sql ="SELECT * FROM users WHERE email = '$email'AND password ='$password'";
    if(mysqli_query(database::dbconnect(),$sql)){
        $queryResult = mysqli_query(database::dbconnect(),$sql);
        $user = mysqli_fetch_assoc($queryResult);
        if($user){
            header('Location: dashboard.php');
        } else {
            $message = "Please use Valid email or password";
            return $message;
        }
    } else{
        die("Query problem".mysqli_error(database::dbconnect()));
    }


}


}

