<html>

	<head>
					<title></title>
                      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
                             integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                           <link rel="stylesheet" href="indus.css" type="text/css">
                          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
					 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   
                    <style>

                             body{
                              
                       background-image: url('back.gif');
    background-size: cover;
    
                    
                    
                    }
                    
                    .Prerna {
                    
                     margin-left: 500px;
                     margin-right: auto;
                     margin-top: 500px;
                     border:3px solid black;        
                     width:400px;
                     height:300px;
                     text-align:center;
                     background-color:black;
                     color:white;
                     border-radius:25px;
                     
                    }
                    .Prerna1{
                    
                            margin-left: 500px;
                     margin-right: auto;
                     margin-top: 250px;
                     border:3px solid black;        
                     width:400px;
                     height:510px;
                     text-align:center;
                     background-color:black;
                     color:white;
                     border-radius:25px;}
                    .one:hover{
                    
                    color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .five:hover{
                    
                    color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .two:hover{
                    
                    color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .three:hover{
                    
                    color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .four:hover{
                    
                    color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                     .one1:hover{
                    
                            background-color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .five5:hover{
                    
                          background-color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .two2:hover{
                    
                    background-color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .three3:hover{
                    
                   background-color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .four4:hover{
                    
                    background-color:hsl(288, 100%, 50%);
						    text-shadow: 2px 2px 5px red;
                    
                    }
                    .six:hover{
                            
						color:hsl(300, 100%, 90%);
						text-shadow: 2px 2px 5px red;
						
                    
                    }
                    .seven{
                            border:1px solid white;
                            border-radius: 25px;
                            background-color:black;
                            color:white;
                    }
                    .eight{
                            border:1px solid white;
                            border-radius: 25px;
                            background-color:black;
                            color:white;
                    }
                    .main{
                            justify-content:center;
                            display:flex;
                    
                    } 
                    .col-md-6{
                    
                            padding-left:15px;
                    
                    }
            
                   </style>
	</head>

	<body>

     <body>
     <div id="main">
                    <section id="home_section">
    <div>
           <form action="demo1.php" method="post" class="Prerna1" >
                    <div class="contaniner">
                            <h1 class="six">Register Yourself</h1>
                            
                            <label for="firstname" class="one" b>First Name:</b></label>
                            <input type="text" name="firstname" placeholder="Username" class="one1" required ><br><br>

                            <label for="lastname" class="two"><b>Last Name:</b></label>
                            <input type="text" name="lastname" class="two2"  required><br><br>

                            <label for="email" class="three"><b>Email Id:</b></label>
                            <input type="email" name="Email" class="three3" required><br><br>

                            <label for="phone number" class="four" class="four4"><b>Phone Number:</b></label>
                            <input type="number" name="PhNumber" required><br><br>

                      <!--      <label for="Password" class="five"><b>Password</b></label>
                            <input type="password" name="Password"  class="five5" id="myinput"  required>
                                <span onclick="myFunction()">
                                <i id="hide1"class="fa fa-eye"></i>
                                <i id="hide2"class="fa fa-eye-slash"></i>
                                </span>-->
                                  
                                      <div class="col-md-6">
                                    Password: <input id="password-field" type="password" class="form-control" name="Password" value="">
                                 <i toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></i>
                                      </div>
                                <br><br>
                           
                            
                            


                             <button type="submit" name="submit" class="seven">Register</button>
                            <button type="reset" name="reset" class="eight">Reset</button>
                            <br><br>
                            Already Registered?    <button type="submit" name="submit" class="seven"><a href="#main_login"> Login</a></button>
                    </div>
           </form>
    
  
  </div>
  </section>
     <section id="main_login">

               
                 <form  action="login1.php" method="post" class="Prerna" >
                    <div class="contaniner">
                            <h1 class="six">Login</h1>
                            
                            <label name="firstname" class="one"><b>First Name:</b></label>
                            <input type="text" name="firstname" class="one1" required ><br><br>

                            <label name="lastname" class="two"><b>Last Name:</b></label>
                            <input type="text" name="lastname" class="two2"  required><br><br>

                           
                             <div class="col-md-6">
                                    Password: <input id="password-field" type="password" class="form-control" name="Password" value="">
                                 <i toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></i>
                                      </div>
                                      <br><br>

                            <button type="submit" name="submit" class="seven">Login</button>
                            <button type="reset" name="reset" class="eight">Reset</button><br><br>
                             </div>
           </form>

  </section>
	
				
</div> 




	</body>

</html>