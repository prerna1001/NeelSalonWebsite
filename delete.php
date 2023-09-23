<?php

$conn =  mysqli_connect('localhost','Prerna','Prerna@1001','webpracexam');
 if($conn->connect_error){
      echo "Coonection not established, Error:" .$conn->connect_error;  //if connection failed then tis message will echo
   }
$name= $_GET['name'];

$query = " DELETE from Members where name= '$name'";

$data = mysqli_query($conn,$query);

if($data)
{   
    echo "Record Deleted";
    header('location:UNIVERSITIES.php');
}
?>