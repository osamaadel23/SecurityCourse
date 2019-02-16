<?php
include 'RSA.php';
$words= "12345";
$book = new RSA;
$enc = $book->Encrypt($words);
$dec = $book->Decrypt($enc);
echo $enc.'<br> hello <br>'.$dec;





    