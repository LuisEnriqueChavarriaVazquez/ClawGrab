<?php 
   
    $servername = "localhost";  
    $username = "root";  
    $password = "12345"; 
    $database = "clawgrab"; 
   
     // Create a connection  
     $conn = mysqli_connect($servername,  
         $username, $password, $database); 
    
   
    if($conn) { 
        //echo "todo bien";
    }  
    else { 
        die("Error". mysqli_connect_error());  
    }  
?> 