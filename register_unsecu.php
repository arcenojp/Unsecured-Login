<?php
$conn=new mysqli("localhost","root","","datab");
if(!$conn){
   die("failed");
}
if($_SERVER['REQUEST_METHOD'] =='POST'){
   $user=$_POST['username'];
   $pass=$_POST['password'];
   $fn=$_POST['fullname'];
   $add=$_POST['address'];
   $confirm = $_POST['confirmpassword'];

if ($pass != $confirm) {
    die("Passwords do not match!");
}


   $sql="INSERT INTO tab(username,password,fullname,address)VALUES('$user','$pass','$fn','$add')";

   if($conn->query($sql) === TRUE){
      header("location:login.html");
      exit();
   }else{
      echo"failed";
   }

   mysqli_close($conn);
}








?>