<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
   if(isset($_SESSION['user'])){
   echo "
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Search</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
    <body>
        <header>
            <div class='main'>
                    <ul>
                        <li><a href='formal.php' >Home</a></li>
                        <li><a href='search.php' class='active'>Search</a></li>
                        <li><a href='registeration.php'>Register</a></li>
                    </ul>
            </div>
             </header>
        <div class='form'>
             <form action='searchProcess.php' method='POST'>
                 <h1 class='head'>Search</h1>
                 <p>
                     
                     <input type = 'text' id='a' name='name' placeholder='User name' >                    
                 </p>
                 <p>
                     
                     <input type='text' id='b' name='id' placeholder='ID'>                    
                 </p>
                 <p>
                     
                     <input type='text' id='c' name='phone' placeholder='Phone' >                    
                 </p>
                 <p>
                     
                     <input type='text' id='d' name='level' placeholder='Level' >                    
                 </p>
                 <p>
                     <input type='submit' id='btn' value='Search' >                    
                 </p>
                 
             </form>
         </div>
        
    </body>
   </html> ";
   
   }
   else       include 'oops.php';
?>