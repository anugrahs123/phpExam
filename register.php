<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REGISTER</h1>
    <form method="POST">
    <input type="text" name="uname" id="" placeholder="username">
    <input type="password" name="pass" id="" placeholder="password">
    <button type="submit" name="REG">Register</button>
    </form>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="examDB";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("conn Failed".$conn->connect_error);
}

   
   if(isset($_POST['REG'])){
        $Uname=$_POST['uname'];
        $Password=$_POST['pass'];
        
    $sql="insert into profile(name,password) values('$Uname','$Password')";

    if($conn->query($sql) === TRUE){
        echo "<script>alert('User Created')</script>";
        header('Location:login.php');
    }else{
        echo "Error TAble creation";
    }
       
    }
    $conn->close();

?>
</body>
</html>