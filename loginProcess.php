<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if($_POST['user'] && $_POST['pass']){
//get values from login page
$username = $_POST['user'];
$password = $_POST['pass'];
    
$name = $username;
//prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//prevent mal scripts
function protect($string){
    $string = mysql_real_escape_string(trim(strip_tags(addcslashes($string))));
    return $string;
};


//connect and select database
mysql_connect("localhost","root","");
mysql_select_db("system1");

//new code
include 'RSA.php';
$book = new RSA;
$username = $book->Encrypt($username);
$password = $book->Encrypt($password); 


//query database for user
$result = mysql_query("select * from user where username = '$username' and password = '$password' ")
        or die("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password )
{
    $_SESSION['user'] = $name;
    include'formal.php';
}else{
    include 'oops.php';;
}
}else include 'oops.php';
}
else   
    include 'oops.php';
        