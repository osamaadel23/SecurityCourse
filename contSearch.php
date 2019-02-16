<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Result</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <?php
   if(isset($_SESSION['user'])){
$phon = $row['phone'];
$nam =  $row['name'];
$idd =  $row['id'];
$level = $row['level'];
$wantA = $row['wantA'];
        
$encphone = $book->Encrypt($phon);
$decphone = $book->Decrypt($phon);
$encnam   = $book->Encrypt($nam);
$decnam   = $book->Decrypt($nam);
$encidd   = $book->Encrypt($idd);
$decidd   = $book->Decrypt($idd);
$enclevel = $book->Encrypt($level);
$declevel = $book->Decrypt($level);
$encwanta = $book->Encrypt($wantA);
$decwanta = $book->Decrypt($wantA);



$newData = 'Name:'.$decnam.' Id:'.$decidd.' Phone:'.$decphone.' Level:'.$declevel ;
$json = json_encode($newData);
$message = $book->Encrypt($json);


echo      "<table><tr><th>Name</th><td>$decnam</td></tr>
        <tr><th>ID</th><td>$decidd</td></tr>
        <tr><th>Level</th><td>$declevel</td></tr>
        <tr><th>Phone</th><td>$decphone</td></tr>
        <tr><th>WantedA</th><td>$decwanta</td></tr></table>";

echo 'This is the encrypted message: '.$message.'<br>';

$decc = $book->Decrypt($message);
 echo '<br>This is the message decrypted: '.json_decode($decc);

   }
 else {
       include 'oops.php';    
   }?>
    </body>
</html>
