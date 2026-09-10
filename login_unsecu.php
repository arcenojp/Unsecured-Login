<?php
$conn=new mysqli("localhost","root","","datab");
if(!$conn){
    die("failed");
}
$user=$_POST['username'];
$pass=$_POST['password'];

$sql="SELECT * FROM tab WHERE username='$user' AND password='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    header("location:welcome.html");
    exit();
}else{
    echo"failed";
}
mysqli_close($conn);





?>