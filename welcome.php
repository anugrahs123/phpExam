<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
  
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="examDB";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("COn Failed".$conn->connect_error);
    }
    $sql='select * from profile';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 1){
        while($row=mysqli_fetch_row($result)){
            echo "<li>$row[1]</li>";
        }
    }
?>
  
    </ul>
</body>
</html>