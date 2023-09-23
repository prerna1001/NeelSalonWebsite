<?php
		 
		$dob=$_POST['dob'];
		$A=$_POST['A'];
		$hair=$_POST['hair'];
		echo $dob;
		  $conn = mysqli_connect("localhost","Prerna","Prerna@1001","register");
          if($conn->connect_error){
               echo "Coonection not established, Error:" .$conn->connect_error;  //if connection failed then tis message will echo
           }
		  else {
		   
					$sql = "INSERT INTO details (id,dob,A,hair) VALUES('','$dob','$A','$hair')"; //prepare : An SQL statement template is created and sent to the database ............parameters('?') are left unspecified.
                  
				     $run = mysqli_query($conn , $sql);
					  if($run == true){
						  echo "<script>alert('Saved ')</script> ";
						   echo '<script>window.location="Connection.php"</script>';
				 
				 }else{
				 
					echo"Error";
				 }
				
				}
	


?>