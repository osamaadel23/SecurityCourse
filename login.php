<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            
           
        </header>
         <div class="form">
             <form action="loginProcess.php" method="POST">
                 <h1 class="head">Login</h1>
                 <p>
                     
                     <input type="text" id="user" name="user" placeholder="User name">                    
                 </p>
                 <p>
                     
                     <input type="password" id="pass" name="pass" placeholder="Password" >                    
                 </p>
                 <p>
                     <input type="submit" id="btn" value="login" >                    
                 </p>
                 
             </form>
         </div>
    </body>
</html>
