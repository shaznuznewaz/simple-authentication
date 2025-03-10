<?php

define("username","admin");
define("password","12345");

echo "Enter User Name: ";
$Username=readline();
echo "Enter Password: ";
$Password=readline();

if(empty($Username) || empty($Password)){

    echo "Username or Password is Blank";
}
else{
    if($Username===username && $Password===password){
        echo "Log in Successful";
    }

    else{
        echo "Log in Invalid";
    }
}


