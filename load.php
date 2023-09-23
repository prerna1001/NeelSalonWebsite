<?php
     
    // Conection of my Database......

     $conn = mysqli_connect('localhost','Prerna','Prerna@1001','register');  //this is procedural  for connection to MYSQL server & Parmeters are: host, username,password,database name

   if($conn->connect_error){
      echo "Coonection not established, Error:" .$conn->connect_error;  //if connection failed then tis message will echo
   }
        
                    $id = $_POST['id'];
                                                      // in the PHP page we got $firstname, which is a variable
                                                     //The variables request the element (HTML) and their value, they get this by the name attribute
                   $name = $_POST['name'];       
                    $email = $_POST['email']; 
                    $msg=$_POST['message']; 

                    
      $sql = "INSERT INTO contact (id,name,email,message) VALUES ('".$id."','".$name."','".$email."','".$msg."')"; 
     $data = mysqli_query($conn, $sql);
       echo "<script>alert('Saved your query !!!')</script> ";
    

   $conn->close();
             
     echo '<script>window.location="ratings.php"</script>';  
  
      
?>