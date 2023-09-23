<?php


            $firstname=$_POST['firstname'];
             $lastname=$_POST['lastname'];
             $Password=$_POST['Password'];

              $conn = mysqli_connect("localhost","Prerna","Prerna@1001","register");
                if($conn->connect_error){
      echo "Coonection not established, Error:" .$conn->connect_error;  //if connection failed then tis message will echo
   }

         $query ="select * from Members where firstname='$firstname' && Password='$Password'";
         $result=mysqli_query($conn,$query);
         $count=mysqli_num_rows($result);
        
            if($count == true)
             {
             
                    echo "<script>alert('Login Successful .Thanks for Online Booking!Have A Nice Day')
                         
                </script> ";
                  echo '<script>window.location="Feedback.php"
              
             </script>';
             
             }
             else
             {
             
                   echo "<script>alert('Login Unsuccessful. Try Again')
                         
                </script> ";
                      echo '<script>window.location="Connection.php"
              
             </script>';
             }
           


		
   
    ?>