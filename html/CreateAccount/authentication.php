<?php      
    include("../../database/connection.php");  
    $name = $_POST['name'];  
    $lastName = $_POST['lastName'];  
    $username = $_POST['username'];  
    $email = $_POST['email'];  
    $password = $_POST['password']; 
      
      
    $host = "212.227.68.127:3306";  
    $user = "u2_w3fFElkn8B";  
    $databasePassword = 'YuzN@lNW+N6@Gk.m+mRl1Fq4';  
    $db_name = "s2_tristan";  
      
    $con = mysqli_connect($host, $user, $databasePassword, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } else {
        $stmt = $con->prepare("insert into UserData(name, lastName, username, email, password)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$name,$lastName,$username,$email,$password);
        $stmt->execute();
        echo "<h1>Registration Successfully.</h1>";
        $stmt->close();
        $con->close();
    }
?> 
?> 