<?php

$mysqli = new mysqli("localhost","khurshid","123456","members-data");

// Check connection
if ($mysqli -> connect_errno) {

  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$user = isset($_POST['user'])?$_POST['user']:false;

$password = isset($_POST['password'])?$_POST['password']:false;




if($user != false && $password != false){


$query = "INSERT INTO `userinfodata` (`user`, `password`)
  VALUES ('$user', '$password')";

 if ($mysqli->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $mysqli->error;
}

}

else{
    echo "You don't submit your info";
}




?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>
    <style>
        .mx-auto{
            padding-top: 200px;
        }
    </style>
</head>
<body  style= "background-image: url('image/pic17.jpg');">
<section>
    <div class="container">
       <div class="row">
           <div class="col-md-6 mx-auto">

          
           
            
   

               <form action="project.php" method="post">
                   <div class="row mb-3">
                       <label for="user" class="col-sm-3 col-form-label" style= "color:#ADD8E6">@Username:</label>
                       <div class="col-sm-9">
                           <input
                               type="text"
                               class="form-control"
                               placeholder="Username"
                               id="user"
                               name="user"
                               value="">
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="password" class="col-sm-3 col-form-label" style= "color:#ADD8E6">Password:</label>
                       <div class="col-sm-9">
                           <input
                               type="password"
                               class="form-control"
                               placeholder="Password"
                               id="password"
                               name="password"
                               value="">
                       </div>
                   </div>


                   <button type="submit" class="btn btn-primary">Sign In</button>
                   <a href="sign_up.php" class="btn btn-primary">Creat a new account.</a>

               </form>
              
           </div>
       </div>

    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>

