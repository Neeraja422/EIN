<?php
$username=$_POST['username'];
$password=$_POST['password'];

$username= stripcslashes($username);
$password= stripcslashes($password);
$username= mysql_real_escape_string($username);
$password= mysql_real_escape_string($password);

mysql_connect("localhost", "root" , "");
mysql_select_db("sih");

$result=mysql_query("select * from login1 where username='$username' and password='$password' ")
        or dir("Failed to query database" .mysql_error());
$row=mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
    include 'home.html';
}
else{
    echo "Failed to login";
}

