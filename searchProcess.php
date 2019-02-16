<?php 

 function objectToArray($d) {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }
		
        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        }
        else {
            // Return array
            return $d;
        }
 }
 session_start();
   if(isset($_SESSION['user'])){
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
//get values from login page
     if( $_POST['name'] && $_POST['id']){
$name = $_POST['name'];
$id = $_POST['id'];
     
//connect and select database
mysql_connect("localhost","root","");
mysql_select_db("system1");

//new code
include 'RSA.php';
$book = new RSA;
$name = $book->Encrypt($name);
$id = $book->Encrypt($id);

//query database for user
$result = mysql_query("select * from studenta where name = '$name' and id = '$id'")
        or die("failed to query database".mysql_error());
$row = mysql_fetch_array($result);

if ($row != 0){
    
    include 'contSearch.php'; 
}
else    include 'oops.php';
 }else         
         include 'oops.php';}
   else    
       include 'oops.php';
   
}
   else    
       include 'oops.php';

