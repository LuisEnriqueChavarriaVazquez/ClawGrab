<?php 
   
    /*$servername = "localhost";  
    $username = "root";  
    $password = "12345"; 
    $database = "clawgrab"; */

    $servername = "us-cdbr-east-03.cleardb.com";  
    $username = "b3cf231598121b";  
    $password = "bda8defc"; 
    $database = "heroku_e99f66b5b833c37"; 

    //mysql:b3cf231598121b:bda8defc@us-cdbr-east-03.cleardb.com/heroku_e99f66b5b833c37?reconnect=true
   
     // Create a connection  
     $conn = mysqli_connect($servername,  
         $username, $password, $database); 
    
   
    if($conn) { 
        echo "todo bien";
    }  
    else { 
        die("Error". mysqli_connect_error());  
    }  
?> 