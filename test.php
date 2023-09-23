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
    <link rel="stylesheet" href="indus.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body >
    <div class="container">
        <div class="row">
            <div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 col-sm-12 col-xs-12" id="login">
                <h3> School Trip</h3>
                <form action="connection.php" method="post">
                    <div>
                        <div class="form-group">
                            <label for="inputName">FULL NAME</label>
                            <input class="form-control" type="text" id="inputName" placeholder="Enter your name" name="fName" required />
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">EMAIL</label>
                            <input class="form-control" type="email" id="inputEmail" placeholder="Email address" name="email" required/>
                        </div>

                        <div class="form-group">
                            <label for="DOB">DOB</label>
                            <input class="form-control" type="date" id="DOB" placeholder="Date of Birth" name="dob" required/>
                        </div>

                        <div class="form-group">
                            <label for="inputFName">Fathers Name</label>
                            <input class="form-control" type="text" id="inputFName" placeholder="Fathers Name" name="fatherName" required/>
                        </div>
                        <div class="form-group">
                            <label for="inputNumber">Phone Number</label>
                            <input class="form-control" type="numeric" id="inputNumber" placeholder="Phone Number" name="mobileNumber" required/>
                        </div>

                        
                        <div class="form-group">
                            <label for="inputAgree">
                                <input type="checkbox" id="inputAgree" required /> I agree the terms and conditions
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-dark " id="signup-btn">Sign up</button>
                        <button type="button" class="btn btn-dark"><a href="database.php">See Database</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>