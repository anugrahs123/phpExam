<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="examDB";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("conn Failed".$conn->connect_error);
    }

    $sql="CREATE TABLE profile(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(20),
        password VARCHAR(20)
    )";

    if($conn->query($sql) === TRUE){
        echo "Table Created";
    }else{
        echo "Error TAble creation";
    }
    $conn->close();
?>