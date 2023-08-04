<?php
$f=$_POST['fname'];
$l=$_POST['lname'];
$m=$_POST['mail'];
$p=$_POST['passcode'];
$con=mysqli_connect("localhost","root","","loginform");
$sql="INSERT INTO EMAIL(fname,lname,mail,passcode) Values ('$f','$l','$m','$p')";
$r=mysqli_query($con,$sql);
if($r){
    echo"<script type='text/javascript'> alert('Details updated successfully...😊')</script>";
}
else{
    echo"<script type='text/javascript'> alert('Wrong details❌❌')</script>";
}
?>