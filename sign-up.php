<?php 
    echo $_post["username"];
    $username = $_post["username"];
    $email = $_post["email"];
    $phonenumber = $_post["phonenumber"];
    $password = $_post["password"];
    $address = $_post["address"];

    $conn = new mysqli("localhost","root","","users");
    if(mysqli_connect_error()){
        die("cannot connect th the database");
    }
    $query = "INSERT INTO 'users' ('username','email','phonenumber','password','address') 
    values ('$username','$email','$phonenumber','$password','$address')";
