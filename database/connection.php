<?php      
    $host = "212.227.68.127:3306";  
    $user = "u2_w3fFElkn8B";  
    $password = 'YuzN@lNW+N6@Gk.m+mRl1Fq4';  
    $db_name = "s2_tristan";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  