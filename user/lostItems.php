<?php
session_start();

if(isset($_SESSION['user_id']))
{
    require('../db/connection.php');
    $sql="SELECT * FROM item";
    $result=$conn->query($sql);
    
}
else
{
    header('Location:../index.php');
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
  </head>
  <body>
    <div class="fluid-container">
        <div class="row">
           <!-- <div class="col-md-1"></div>  -->
            <div class="col-md-12" style="margin-top:4%">
                <h1>Items</h1>
                <hr>
                <br>
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Type</th>
                      <th>Found At</th>
                      <th>Found Date</th>
                      <th>Contact To</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       $a=1;
                    if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                               echo '
                                    <tr>
                                      <th scope="row">'.$a.'</th>
                                      <td>'.$row["type"].'</td>
                                      <td>'.$row["place"].'</td>
                                      <td>'.$row["date"].'</td>
                                      <td>'.$row["phone"].'</td>
                                    </tr>
                                ';
                                $a++;
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                    ?>
                  </tbody>
                </table>
                
            </div>
        </div>  
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.m-in.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>