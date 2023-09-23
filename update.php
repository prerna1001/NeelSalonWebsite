<?php

   $conn = mysqli_connect('localhost','Prerna','Prerna@1001','register');  //this is procedural  for connection to MYSQL server & Parmeters are: host, username,password,database name

   if($conn->connect_error){
      echo "Coonection not established, Error:" .$conn->connect_error;  //if connection failed then tis message will echo
   }

   
  if(isset($_POST['done'])){

 
 $firstname= $_GET['firstname'];
 $lastname = $_POST['ln'];
 $Email = $_POST['email'];
 $PhNumber = $_POST['phone'];
 $Password= $_POST['pass'];
 
 $q = " UPDATE Members set   ln='$lastname', email='$Email' , phone='$PhNumber',pass='$Password'  where firstname= '$firstname' ";

  $query = mysqli_query($conn,$q);

  header('location:BookingDetails.php');
 

 }

?>




<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Update details </h1>
 </div><br>

 
 lastname:<input type="text" name="ln" class="form-control"> <br>

 
 Email<input type="text" name="email" class="form-control"> <br>

 
 PhNumber<input type="text" name="phone" class="form-control"> <br>

 
 Password<input type="text" name="pass" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>