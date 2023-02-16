<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form method="POST">
    <input type="text" name="uname" id="" placeholder="username">
    <input type="password" name="pass" id="" placeholder="password">
    <button type="submit" name="LOG">LOGIN</button>
    </form>
    <br>
    <br>
    <hr>
    <a href="register.php"><button >Register</button></a>


<?php
    $servename="localhost";
    $username="root";
    $password="";
    $dbname="examDB";

    $conn=new mysqli($servename,$username,$password,$dbname);
    if($conn->connect_error){
        die("COn Error".$conn->connect_error);
    }
    if(isset($_POST['LOG'])){
        $Uname=$_POST['uname'];
        $Password=$_POST['pass'];
        $sql="select * from profile where name='$Uname' and password='$Password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            header('Location:welcome.php');
        }
        else{
            echo "<script>alert('User Not Authenticated')</script>";
        }
    }
    $conn->close();
?>
</body>
</html>