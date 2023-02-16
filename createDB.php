<?php
    $servername="localhost";
    $username="root";
    $password="";

    $conn=new mysqli($servername,$username,$password);
    if($conn->connect_error){
        die("Connection Error".$conn->connect_error);
    }
    $sql="create database examDB";
    if($conn->query($sql)===TRUE){
        echo "Database Created";
    }
    else{
        echo "Failed";
    }
    $conn->close();
?>