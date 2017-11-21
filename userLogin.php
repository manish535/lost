<?php
if(isset($_POST['submit']))
{
    $user_name=$_POST['userName'];
    $user_password=$_POST['userPassword'];
    
    require('../db/connection.php');
    $sql="SELECT * FROM user WHERE user_email='$user_name';";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $password=$row['user_password'];
    if($password===$user_password)
    {
        session_start();
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['user_fname']=$row['user_fname'];
        header('Location:../user/userProfile.php');
    }
    else
    {
        echo"<script> alert('wrong user name or password');
            whindow.location.href='../index.php';
        </script>";
    }
}
?>