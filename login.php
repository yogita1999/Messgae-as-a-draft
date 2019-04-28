
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 <html>
     <body>    
<?php
    $con = mysqli_connect("$localhost", "root","","mailuser") or die(mysqli_error($con));
session_start(); 

    $email= mysqli_real_escape_string($con,(filter_input(INPUT_POST,'email')));
    $password=filter_input(INPUT_POST, 'password');
    $select_query="SELECT email,password from user_info WHERE email='$email'";
    $select_query_result= mysqli_query($con, $select_query) or die(myqli_error($con));
    if(mysqli_num_rows($select_query_result)==0){
        echo "There is no user with this e-mail!!";
        header('location:logout.php');
    }
    else{
        $row= mysqli_fetch_array($select_query_result);
        if($row['email']==$email AND $row['password']==$password){
                header('location:Mail.html');
            }
             
        }
        
               
    
?>
     </body>
</html>