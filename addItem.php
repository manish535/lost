<?php
session_start();
if(isset($_SESSION['admin_id']))
{
    if(isset($_POST['submit']))
    {
        $type=$_POST['type'];
        $place=$_POST['place'];
        $date=$_POST['date'];
        $phone=$_POST['phone'];
        
        require('../db/connection.php');
        $sql="INSERT INTO item (type,place,date,phone) VALUES('$type','$place','$date',$phone);";
        if($conn->query($sql))
        {
            echo"<script> alert('Response Submitted');
            window.location.href='../admin/adminProfile.php';</script>";
        }
    }
}
else
{
    header('Location:../index.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Lost & Found</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      
      
<style>
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */

/* Center the image and position the close button */

.container {
    padding: 16px;
}

/* The Modal (background) */

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

   
      </style>
  </head>
    
  <body>
      <div class="container-fluid" >
          
        <div class="card" style="border:none;">
            <div class="card-header" style="background-image: url('img/icon.jpg'); margin-top:2%;">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="w3-container" >
                    
                <img src="img/auction1.jpg" class="w3-circle" alt="Norway" style="width:30%;margin-top:2%;"><h2>Lost And Found</h2>
                    </div>  
                </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <ul class="nav nav-tabs card-header-tabs">        
                  <li class="nav-item">
                    <a class="nav-link active" href="../logout/logout.php" style="margin-top:4%; border:0px">LogOut</a>
                  </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="../admin/showItem.php" style="margin-top:4%; border:0px;">Available Items</a>
                    
                  </li>
                        </ul>
                </div>
               
            </div>
           </div>
        </div>
             
 </div>
      <h3 style="background-color:red; color:white; text-align:center; margin-top:1%;"> BUY NOW OR CRY LATER!!! CHOICE IS YOURS!!!</h3>

      <!-- for user registration -->
  
  <form class="modal-content animate" action="../admin/addItem.php" method="POST">
    <div class="container">
      <h3>Add Item</h3> 
                  <div class="form-group">
                      <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Name" required>
                  </div>
                      <div class="form-group">
                    <label for="place">Found Place</label>
                    <input type="text" class="form-control" id="place" name="place" placeholder="Place" >
                  </div>
                      <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date" required>
                  </div>
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number" required>
                  </div>
                  
                 
                <button type="submit" name="submit">Submit</button>
            
    </div>
    </form>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>





      
