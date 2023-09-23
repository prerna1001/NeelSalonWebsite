<?php
          
                   $firstname = $_POST['firstname'];
                                                      // in the PHP page we got $firstname, which is a variable
                   $lastname = $_POST['lastname'];                                 //The variables request the element (HTML) and their value, they get this by the name attribute
                   $Email = $_POST['Email'];       
                    $PhNumber = $_POST['PhNumber'];
                    $Password = $_POST['Password'];
                    

       // Conection of my Database......

    $conn = mysqli_connect("localhost","Prerna","Prerna@1001","register");
   if($conn->connect_error){
      echo "Coonection not established, Error:" .$conn->connect_error;  //if connection failed then tis message will echo
   }

   $s="SELECT * from Members where firstname = '$firstname' && Email='$Email' ";
   $result=mysqli_query($conn,$s);
//$statement = $conn->prepare($s);
   $num=mysqli_num_rows($result);

   if($num>0)
   {
        echo "<script>alert('USER  have already register..sign in then login')
                         
                </script> ";
        echo '<script>window.location="Connection.php"
              
             </script>';


   }else{

      $sql = "INSERT INTO Members (firstname,lastname,Email,PhNumber,Password) VALUES('$firstname','$lastname','$Email','$PhNumber','$Password')"; //prepare : An SQL statement template is created and sent to the database ............parameters('?') are left unspecified.
     $data = mysqli_query($conn, $sql);
     //the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values
       echo "<script>alert('REGISTERED YOU, ')</script> ";
        echo '<script>window.location="Connection.php"</script>';
    $conn->close();
   }
  

?>

		



