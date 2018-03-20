<?php
session_start();

$db= mysql_connect("localhost" , "root" , "" , "sih");

if(isset($_POST['signup'])){
    session_start();
    $username=mysql_real_escape_string($_POST['username']);
    $nationality=mysql_real_escape_string($_POST['nationality']);
    $email=mysql_real_escape_string($_POST['email']);
    $gender=mysql_real_escape_string($_POST['gender']);
    $password=mysql_real_escape_string($_POST['password']);
    $cpassword=mysql_real_escape_string($_POST['cpassword']);
    
    if($password==$cpassword){
        $password= md5($password);
        $sql="INSERT INTO signup(username, nationality, email, gender, password) VALUES('$username' , '$nationality', '$email', '$gender' , '$password')" ;
        $sq2="INSERT INTO login(username,password) VALUES('$username','$password')";
        mysql_query($db, $sql);
        mysql_query($db, $sq2);
        
    }
    else{
        
    }
 }
