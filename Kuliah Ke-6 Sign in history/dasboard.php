<?php 
 require_once "connect.php"; 

   if(!$user->isLoggedIn()){ 
     header("location: dasboard.php"); 
   } 

 $currentUser = $user->getUser(); 
 ?>

 <!DOCTYPE html>  
 <html>  
   <head> 
     <meta charset="utf-8"> 
     <title>Dashboard</title> 
     <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8"> 
   </head> 

   <body>
   <center> 
     <div class="container"> 
       <div class="info"> 
         <h1>Selamat Datang <?php echo $currentUser['email'] ?></h1> 
       </div> 
       <a href="log-out.php"><button type="button">Logout</button></a> 
     </div>
     </center> 
   </body> 
 </html>