<?php
if(isset($_POST['submit']))
{
    $admin_name=$_POST['adminName'];
    $admin_pass=$_POST['adminPassword'];
    require('../db/connection.php');
    
    $sql="SELECT * FROM admin WHERE admin_email='$admin_name'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    echo $admin_pass;
    $pass=$row['admin_password'];
    if($pass===$admin_pass){
        session_start();
        $_SESSION['admin_id']=$row['admin_id'];
        $_SESSION['admin_name']=$row['admin_name'];
        header('Location:../admin/adminProfile.php');
    }
    else
    {
        echo"<script>alert('wrong user or password');
                window.location.href='../index.php';
        </script> ";
    }
}

?>