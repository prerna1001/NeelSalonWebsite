 <?php

                    session_start();

                    $con = mysqli_connect('localhost','Prerna','Prerna@1001');
                    mysqli_select_db($con,'registration');
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $Email = $_POST['Email'];
                    $PhNumber = $_POST['PhNumber'];
                    $Password = $_POST['Password'];
                   
                   $s = "select * from members where Email ='$Email'"  ;

                   $result = mysqli_query($con,$s);

                   $num = mysqli_num_rows($result);
                   
                   if($num == 1){
                   
                    echo "Username already Exists";

                   }
                   else {
                   
                        $reg ="insert into members(name , lastname, email, number, password) values('$firstname' , '$lastname' , '$Email' , '$PhNumber' , '$Password')"; 
                        mysqli_query($con, $reg);
                        echo "Registration Successfull!";
                   }
                   
                  
                ?>