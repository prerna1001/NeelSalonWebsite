<html>

<head>
		<title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
				integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
				crossorigin="anonymous">
				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
				
        <style>

		  body{
                
                
                       background-image: url('back.gif');
    background-size: cover;
    
    }
     h1{
                        text-align:center;
            }
        
                        .first{
background-color: black;
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
					  color: white;
				}

						/* mouse over link */
				a:hover {
						 color: hotpink;
					}

						/* selected link */
				a:active {
						  color: blue;
			}
          .carousel{
                            height:300px;
                            
                            width:500px;
			}
			 .center{
			
			 
                       margin-top: 0px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
			padding-left:0px;
			
			background-color:#ffccee;

			
			}
			td ,th {
								
					      text-align: center;
					      color: white;
					      background-color:#1a1a1a ;
						  
				
				}
				td:hover{
				
						color:hsl(288, 100%, 50%);
						text-shadow: 2px 2px 5px red;
						
						
						
				
				}
				th:hover{
				
						color:hsl(300, 100%, 90%);
						text-shadow: 2px 2px 5px red;
						
				}
				
				table{
				
				
				       
                         padding-top:20px;
                         padding-left:500px;
						 padding-bottom:200px;

						 border:5px solid white;
						 width:600px;
                         height:500px;
						 }
						 #pass{
						 
							display:flex;
						 
						 }
						 .Booking{
                         
                    
                            margin-top: 0px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 0px;
                padding-left:10px;
                         background-color:#EA6492;
                         padding-top:10px;
                         height: 450px;
                         width:500px;
                         color: white;
                         border-radius: 25px;
                
                }
                label{
                    font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
                    font-size:20px;
    
    }
     h1{
    
           
                    font-family:"Comic Sans MS", cursive, sans-serif;

    
    }
                    button{
            border:2px solid black;
             border-radius: 15px;
    background-color:black;
    color:white;
    }
     .form-control{
    
     border-radius: 10px;
	
    }
        </style>
</head>

<body>
		  <h1>Hand And Foot  Services</h1>

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
                
				<div id="pass">

<div><table cellspacing="1" class="center">
						<tr>
							<th>Service</th>
							<th>Price</th>
							
						
						</tr>
				
						<tr>
						
							<td>Manicure</td>
                            <td>400/-</td>
                            
							
						
						</tr>
						
						
						<tr>
						
							<td>Pedicure</td>
							<td>500/-</td>
							
						</tr>

						<tr>
						
							<td>O3+ Bubble </td>
							<td>1,500/-</td>
							
						</tr>

						<tr>
						
							<td>Crystal Manicure</td>
							<td>1000/-</td>
							
						</tr>

						<tr>
						
							<td>Crystal Pedicure</td>
							<td>1,200/-</td>
							
						</tr>

						<tr>
						
							<td>Heel Peel</td>
							<td>1500/-</td>
							
						</tr>
				
				
				</table></div>
				<div>
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Manicure.jpg" class="d-block w-100" alt="..."  height='500px' width='600px'>
    </div>
    <div class="carousel-item ">
      <img src="Manicure1.jpg" class="d-block w-100" alt="..."  height='500px' width='600px'>
    </div>
    <div class="carousel-item ">
      <img src="Manicure2.jpg" class="d-block w-100" alt="..."  height='500px' width='600px'>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

						<div class="container">
        <div action="detail2.php" class="row">
            <div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 col-sm-12 col-xs-12" id="login">
              
                <form action="detail3.php" method="post" >
                    <div class="Booking">
                       
                       
                        <div class="form-group">
                              <h1>Booking</h1>
                            <label for="DOB">Select Date</label>
                            <input class="form-control" type="date" id="DOB" placeholder="Date of Birth" name="dob" required/><br>
                        
                        
                        
                        
                        <lable required>Select Time Slot</lable><br><br>
                        <form>
                            <input type="radio" name="A" Value="10:00:00"> 10:00:00 AM<br>
                            <input type="radio" name="A" value="12:00:00"> 12:00:00 PM<br>
                            <input type="radio" name="A" value="03:00:00"> 03:00:00 PM<br>
                            <input type="radio" name="A" value="07:00:00"> 07:00:00 PM<br><br>
                             <lable>Select your service</lable>
                        <select name="hand">
                                  <option value="Hand& Foot">Hand & Foot</option>
                                  <option value="Manicure">Manicure</option>
                                  <option value="Pedicure">Pedicure</option>
                                  <option value="O3+ Buuble">O3+ Bubble</option>
								  <option value="Crystal Manicure">Crystal Manicure</option>
								  <option value="Crystal Pedicure">Crystal Pedicure</option>
								  <option value="Heel Peel">Heel Peel</option>
                        </select><br><br>
						 <button type="submit" name="Save" class="button">Save</button>
                            <button type="submit" name="submit" class="button"><a href="Connection.php">Submit</a></button>
                            
                           <button type="reset" name="reset" >Reset</button>
                        </form><br>
                       

                       
                      
                        </div>
                       
                     </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>