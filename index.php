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
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

    .nav-link{
        background-color: red;
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
                    <a class="nav-link active" href="#" onclick="document.getElementById('id01').style.display='block'" style="margin-top:4%; border:0px">Signup</a>
                  </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="#" onclick="document.getElementById('id02').style.display='block'" style="margin-top:4%; border:0px;">Login</a>
                    
                  </li>
                            <li class="nav-item">
                          <a class="nav-link active" href="#" onclick="document.getElementById('id03').style.display='block'" style="margin-top:4%; border:0px;">Admin Login</a>
                    
                  </li>
                        </ul>
                </div>
               
            </div>
           </div>
        </div>
             
 </div>
      <h3 style="background-color:red; color:white; text-align:center; margin-top:1%;"> BUY NOW OR CRY LATER!!! CHOICE IS YOURS!!!</h3>

      <!-- for user registration -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="user/userRegister.php" method="POST">
    <div class="container">
      <h3>User Registration</h3> 
                  <div class="form-group">
                      <div class="form-group">
                    <label for="userFname">First Name</label>
                    <input type="text" class="form-control" id="userFname" name="userFname" placeholder="First Name" required>
                  </div>
                      <div class="form-group">
                    <label for="userLname">Last Name</label>
                    <input type="text" class="form-control" id="userLname" name="userLname" placeholder="Last Name" >
                  </div>
                      <div class="form-group">
                    <label for="userEmail">Email</label>
                    <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email" required>
                  </div>
                    <label for="userPhone">Phone Number</label>
                    <input type="number" class="form-control" id="userPhone" name="userPhone" aria-describedby="emailHelp" placeholder="Mobile Number" required>
                  </div>
                  <div class="form-group">
                    <label for="userDob">Date Of Birth</label>
                    <input type="date" class="form-control" id="userDob" name="userDob" required>
                  </div>
                <div class="form-group">
                    <label for="userPassword">Set Password</label>
                    <input type="password" class="form-control" id="userPassword" name="userPassword" required>
                  </div>
                 
                <button type="submit" name="submit">Submit</button>
            
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
      
  
<!-- for user Login -->      
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="login/userLogin.php" method="POST">
    <div class="container">
      <h3>User Login</h3> 
                  <div class="form-group">
                      <div class="form-group">
                    <label for="userName">User Name/ Email</label>
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" required>
                  </div>
                      <div class="form-group">
                    <label for="userPassword">Password</label>
                    <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password" required>
                  </div>
                  
                 
                <button type="submit" name="submit">Submit</button>
            
    </div>
        </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
      
      
<!--Admin Login Form-->
      
      <div id="id03" class="modal">
  
  <form class="modal-content animate" action="login/adminLogin.php" method="POST">
    <div class="container">
      <h3>Admin Login</h3> 
                  <div class="form-group">
                      <div class="form-group">
                    <label for="adminName">Admin Name/ Email</label>
                    <input type="text" class="form-control" id="adminName" name="adminName" placeholder="Admin Name" required>
                  </div>
                      <div class="form-group">
                    <label for="adminPassword">Password</label>
                    <input type="password" class="form-control" id="adminPassword" name="adminPassword" placeholder="Password" required>
                  </div>
                  
                 
                <button type="submit" name="submit">Submit</button>
            
    </div>
        </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>





      
