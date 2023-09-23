<?php
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];  // in the PHP page we got $firstname, which is a variable
                                                     //The variables request the element (HTML) and their value, they get this by the name attribute
                    $Email = $_POST['Email'];       
                    $PhNumber = $_POST['PhNumber'];  
                    $Password = $_POST['Password'];   

    // Conection of my Database......
    $conn = mysqli_connect("localhost","Prerna","Prerna@1001","register");
    $querry = "SELECT * FROM users WHERE  Email='$Email'";
  
  	  $run = mysqli_query($conn, $querry) ;
  	 if(mysqli_num_rows($run)){
            
            echo '<script>alert("Email Already exists, Try another")</script>'; 

            exit();
     
     }

   else{
      $sql = "INSERT INTO Members (firstname,lastname, Email, PhNumber,Password) VALUES('$firstname','$lastname','$Email','$PhNumber','$Password')"; //prepare : An SQL statement template is created and sent to the database ............parameters('?') are left unspecified.
      $data = mysqli_query($conn, $sql);
      //the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values
     echo "User is Registered";

    
        

     $conn->close();
   }
   

   


?>