<?php
session_start();
if(isset($_SESSION['user_id']) and isset($_SESSION['user_fname']))
{
    //echo $_SESSION['user_fname'];
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
                          <a class="nav-link active" href="../user/lostItems.php"  style="margin-top:4%; border:0px;">Lost Items</a>
                    
                  </li>
                            <li class="nav-item">
                    <a class="nav-link active" href="../logout/logout.php"  style="margin-top:4%; border:0px">Logout</a>
                  </li>
                        </ul>
                </div>
               
            </div>
           </div>
        </div>
             
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>





      
