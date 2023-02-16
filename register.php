<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function validate(){
            let email=document.getElementById("uname");
            let password=document.getElementById("pass");
            let Findex=email.value.indexOf("@");
            let Lindex=email.value.lastIndexOf(".");
            if(email.value.trim().length==""){
                alert("please provide Email");
                email.focus();
                return false;
            }
            else if(Findex<1 && Lindex<Findex+2){
                alert("Email not correct");
                email.focus();
                return false;
            }
            else if(password.value.trim().length<8){
                alert("Password need min 8 character");
                email.focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <h1>REGISTER</h1>
    <form method="POST" onsubmit="return validate()">
    <input type="text" name="uname" id="uname" placeholder="email">
    <input type="password" name="pass" id="pass" placeholder="password">
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