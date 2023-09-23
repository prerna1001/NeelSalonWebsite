<?php   
error_reporting(0);
 $_GET['firstname'];
 $_GET['lastname'];
 $_GET['Email'];
 $_GET['PhNumber'];
 $_GET['Password'];


?>

<html>
		<head>
						<style>
								  body{
                              
                                        background-image: url('back.gif');
                                        background-size: cover;
    
                    
                    
                    }
								.hello{
								
								padding-top:150px;
								padding-left:600px;

								
								}
						
						.up{
						
								color:white;
								background-color:black;
								border-radius:15px;
						}
						p{
							color:black;
							font-size:20px;
						
						}
						</style>
		
		</head>
		<body>
					<form class="hello" method="GET">
					<p>	firstname</p> <input type="text" name="firstname" value="<?php echo $_GET['firstname']; ?>" required><br><br>
					<p>	lastname:   </p><input type="text" name="lastname" value="<?php echo $_GET['lastname']; ?>" required><br><br>
					<p>	Email:     </p> <input type="email" name="Email" value="<?php echo $_GET['Email']; ?>" required><br><br>
					<p>	PhNumber:   </p><input type="text" name="PhNumber" value="<?php echo $_GET['PhNumber']; ?>" required><br><br>
					<p>	Password: </p>  <input type="text" name="Password" value="<?php echo $_GET['Password']; ?>" required><br><br>
						<input class="up" type="submit" name="submit" value="Update" id="hello">
					
					
					</form>

					<?php 
					
						if($_GET['submit'])
						{

							$conn = mysqli_connect('localhost','Prerna','Prerna@1001','register');
							$a = $_GET['firstname'];
							$b = $_GET['lastname'];
							$c = $_GET['Email'];
							$d = $_GET['PhNumber'];
							$e = $_GET['Password'];
							$query ="UPDATE members SET lastname='$b' , Email='$c' , PhNumber= '$d' , Password= '$e' WHERE firstname= '$a'";
							
							$data = mysqli_query($conn,$query);
							if($data)
							{
									echo "<script>alert('Updated Successfully!')
                         
                                         </script> ";
                                      echo '<script>window.location="BookingDetails.php"
              
                                        </script>';

							}
							else
							{
								echo "Error";
							
							}
						}
						else
						{
								
						}
					
					?>
		
		</body>
</html>