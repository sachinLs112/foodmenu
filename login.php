<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
$user=$_POST['mailid'];
$pass=$_POST['pass'];
if(!empty($user) && !empty($pass) && !is_numeric($user)){
    $query="select * from email where mail='$user' limit 1";
    $result=mysqli_query($con,$query);
    if($result){
        if($result && mysqli_num_rows($result)>0){
          $usedata=mysqli_fetch_assoc($result);
          if($usedata['passcode']==$pass){
            header("location: index.php");
          }
        }
    }
    
    echo"<script type='text/javascript'> alert('❌🙃Wrong username or password')</script>";
}else{
    echo"<script type='text/javascript'> alert('Succesfully register')</script>";
}
}
?>
