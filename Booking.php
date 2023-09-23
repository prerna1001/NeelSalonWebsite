



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
    <link rel="stylesheet" href="indus.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
                body{
                
                
                       background-image: url('back.gif');
    background-size: cover;
            }
                }
                .Booking{
                         
                     margin-left: auto;
                     margin-right: auto;
                     margin-top: 250px;
                
                         
                         height: 400px;
                         width:500px;
                         color: white;
                         border-radius: 25px;
                
                }
                .container{
                                background-color:#EA6492;
                               

                
                }
                .form-group{
                        justify-content: center;
                        padding-left: 30px;
                        padding-top:20px;
                        padding-right:30px;
                
                }
                 .button{
            border:2px solid black;
             border-radius: 15px;
    background-color:black;
    color:white;
    }
    h1{
    
           
                    font-family:"Comic Sans MS", cursive, sans-serif;

    
    }
    label{
                    font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
                    font-size:20px;
    
    }
    .button1{
     border-radius: 10px;
            
    
    }
    .form-control{
    
     border-radius: 10px;
    
    }
    
   
</head>
<body>
      <!--  <div class="container">
            <div class="row">
                <div class="col-md-12">
                  
                </div>
            </div>
        </div> -->
          <div class="container">
        <div class="row">
            <div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 col-sm-12 col-xs-12" id="login">
              
                <form action="Connection.php" method="post" >
                    <div class="Booking">
                       
                       
                        <div class="form-group">
                              <h1>Booking</h1>
                            <label for="DOB">Select Date</label>
                            <input class="form-control" type="date" id="DOB" placeholder="Date of Birth" name="dob" required/><br>
                        
                        
                        
                        
                        <label required name="timings">Select Time Slot</label><br><br>
                        <form>
                            <input type="radio" name="A" value="c" > 10:00 AM<br>
                            <input type="radio" name="A" value="d"> 12:00 PM<br>
                            <input type="radio" name="A" value="e"> 03:00 PM<br>
                            <input type="radio" name="A" value="f"> 07:00 PM<br><br>
                            
                        <label required>Select your service</label>
                        <select class="button1" name="service">
                                  <option selected hidden value="" >Skin</option>
                                  <option name="1">Bleach</option>
                                  <option value="Face/Neck">Face/Neck</option>
                                  <option value="Fulllegs">Full Legs</option>
                              
                        </select><br><br>
                            <button type="submit" name="save" class="button" onclick="detail.php">Save</button>
                            <button type="submit" name="submit" class="button">Book</button>
                            <button type="reset" name="reset" class="button">Reset</button>
                        </form><br>
                      

                       
                      
                        </div>
                       
                     </div>
                </form>
            </div>
        </div>
    </div>
  
</body>
</html>