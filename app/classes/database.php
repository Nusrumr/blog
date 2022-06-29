<?php

namespace App\Classes;
class database
{
    public function dbConnect(){
        $hostName = "localhost";
        $username = "root";
        $password ="";
        $dbName = "blog";
        $link = mysqli_connect($hostName,$username,$password,$dbName);
        return $link;

    }
}






