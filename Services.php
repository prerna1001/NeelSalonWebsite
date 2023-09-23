<html>
	<head>
			<title>Services</title>
			<link rel="StyleSheet" href="Services.css">
			<style>
					body{
					
										 background-image: url('back.gif');
    background-size: cover;
					
					}
				
					h1{


color:white;
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

 .first .nav-item a:nth-child(2){
				
						color:red;
				
				}

			</style>
	</head>
	<body>
	<h1>Services</h1>
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
	<div class="main">
	 <div class="image">
	
		<a href="Skin.php"><img  src="Skin.jpg" height=300 width=250>
		<div class="overlay overlay--blur">Skin Services</div></a>

	 </div>
	 <div class="image">
	
		<a href="Hair.php"><img  src="Hair1.jpg" height=300 width=250>
		<div class="overlay overlay--blur">Hair Services</div></a>

	 </div>
	

	  <div class="image">
	
		<a href="Hand.php"><img src="Hand.jpg" height=300 width=250>
		<div class="overlay  overlay--blur">Hand & Foot<br> Services</div></a>

	 </div>
	 </div> 
	</body>
</html>