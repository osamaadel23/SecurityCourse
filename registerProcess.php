<?php
 session_start();
   if(isset($_SESSION['user'])){
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if($_POST['name'] && $_POST['id'] && $_POST['phone'] && $_POST['level'] && $_POST['wantA']){
//get values from register page
$name = $_POST['name'];
$id = $_POST['id'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$wantA = $_POST['wantA'];

//prevent mysql injection
$name = stripcslashes($name);
$phone = stripcslashes($phone);
$level = stripcslashes($level);
$wantA = stripcslashes($wantA);
$id = stripcslashes($id);
$id = mysql_real_escape_string($id);
$name = mysql_real_escape_string($name);
$phone = mysql_real_escape_string($phone);
$level = mysql_real_escape_string($level);
$wantA = mysql_real_escape_string($wantA);


//connect and select database
mysql_connect("localhost","root","");
mysql_select_db("system1");

//new code
include 'RSA.php';
$book = new RSA;
$name = $book->Encrypt($name);
$id = $book->Encrypt($id);
$phone = $book->Encrypt($phone);
$level = $book->Encrypt($level);
$wantA = $book->Encrypt($wantA);
//query database for user
$result = mysql_query("INSERT INTO studenta ( id , name , phone , level , wantA )
   VALUES
   ('$id' ,'$name', '$phone' , '$level', '$wantA' )")
        or die("failed to query database".mysql_error());

include 'formal.php';
}else{
    include 'oops.php';
}}
else{
    include 'oops.php';
   }}
   else    include 'oops.php';
