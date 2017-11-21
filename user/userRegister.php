<?php

if(isset($_POST['submit']))
{
    require('../db/connection.php');
    $user_fname=$_POST['userFname'];
    $user_lname=$_POST['userLname'];
    $user_email=$_POST['userEmail'];
    $user_phone=$_POST['userPhone'];
    $user_dob=$_POST['userDob'];
    $user_password=$_POST['userPassword'];
    
    $sql="INSERT INTO user (user_fname,user_lname,user_email,user_phone,user_dob,user_password) VALUES('$user_fname','$user_lname','$user_email',$user_phone,$user_dob,'$user_password')";
    
    if($conn->query($sql)===TRUE)
    {
        echo"<script>alert('Registered Succesfully');
                window.location.href='../index.php';</script>";
    }
}

?>