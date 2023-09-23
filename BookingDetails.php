<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      body{
            
                         background-image: url('back.gif');
    background-size: cover;
            }
            .first a {
					
				color: white;
				text-decoration: none;
				
				}
.first a:hover {
				
				
			    text-decoration: underline;
				}
                a:link {
						color: red;
				}

					/* visited link */
				a:visited {
					  color: black;
				}

						/* mouse over link */
				a:hover {
						 color: red;
					}

						/* selected link */
				a:active {
						  color: blue;
			}
             .first{
background-color:;
color:white;
list-style: none;
display:flex;
justify-content: space-around;
color: white;
height:60;
width:1500;
line-height:50px;
opacity: 0.75;

}
    </style>
</head>

<body>
         <ul class="first">
            <li class="nav-item">
                   <img src="Salonlogo.jpg" height="60" width="60">
           </li>

           <li class="nav-item">
                    <a class="nav-link active" href="Home.php">Home</a>
           </li>

           <li class="nav-item">
                    <a class="nav-link" href="Services.php">Services</a>
           </li>

           <li class="nav-item">
                    <a class="nav-link" href="Bridal.php">Bridal</a>
           </li>

           <li class="nav-item">
                    <a class="nav-link" href="Offers.php">Offers</a>
           </li>

        
          
   </ul>
<center>
 <div class="container my-4"> 
   <div class="col-lg-12">

    <table class=" table table-responsive table-striped table-hover table-bordered">
        <tr class="table-dark text-dark">
           
            <th width="10% ">firstname</th>
            <th width="10%">lastname</th>
            <th width="10%">Email</th>
            <th width="10%">PhNumber</th>
            <th width="10%">Password</th>
            
            <th width="10%">Delete</th>
            <th width="10%">Update</th>
            
        </tr>
 
    <?php
                   
 
    // Conection of my Database......

     $conn = mysqli_connect('localhost','Prerna','Prerna@1001','register');  //this is procedural  for connection to MYSQL server & Parmeters are: host, username,password,database name

   if($conn->connect_error){
      echo "Coonection not established, Error:" ;  //if connection failed then tis message will echo
   }

   $sql=" SELECT * FROM Members " ;
   $data= mysqli_query($conn, $sql);
   $num= mysqli_num_rows($data);

   if($num>0){
     while ($product = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td> <?php  echo $product['firstname'] ?> </td>
                <td><?php  echo $product['lastname'] ?></td>
                <td><?php  echo $product['Email'] ?></td>
                <td><?php  echo $product['PhNumber'] ?></td>
                <td><?php  echo $product['Password'] ?></td>
                
                <td > <a class="text-danger" href="delete.php?firstname=<?php echo $product['firstname']; ?>">Delete</a></td> 
                <td > <a class="text-primary" href="update1.php?firstname=<?php echo $product['firstname'];?>&lastname=<?php echo $product['lastname'];?>&Email=<?php echo $product['Email'];?>&PhNumber=<?php echo $product['PhNumber'];?>&Password=<?php echo $product['Password'];?>">Update</a></td>       
              </tr>
       <?php   
        
     }
 echo "</table>";
     }
    else{
        echo "No record Found";
    }
   
    ?>
</div>         
</div>
</center>


    
     <script src="jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>