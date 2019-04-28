<?php
$con = mysqli_connect("$localhost", "root","","mailuser") or die(mysqli_error($con));
session_start(); 
$email= mysqli_real_escape_string($con,$_POST['email']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
 $register="insert into user_info(email,password) values('$email','$password')";
 $register= mysqli_query($con, $register) or die(mysqli_error($con));
 echo'successfully inserted';
 $_SESSION['email']=$email;
 if(isset($_SESSION['pgvisit']))
 {
     $_SESSION['pgvisit']=$_SESSION['pgvisit']+1;
     
 }
 else{
     $_SESSION['pgvisit']=1;
     
 }
     ?>



