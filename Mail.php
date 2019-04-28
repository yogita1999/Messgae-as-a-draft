

<?php
$con = mysqli_connect("$localhost", "root","","mailuser") or die(mysqli_error($con));
 
$email_sender= mysqli_real_escape_string($con,$_POST['email_sender']);
$email_reciever= mysqli_real_escape_string($con,$_POST['email_reciever']);
$message= mysqli_real_escape_string($con,$_POST['message']);

 $register="insert into message(email_sender,email_reciever,message) values('$email_sender','$email_reciever','$message')";
 $register= mysqli_query($con, $register) or die(mysqli_error($con));
 echo'successfully inserted';
 
 ?>

