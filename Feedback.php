<html>
<body>
  <form method="post" action="retrievedetails.php">
    <p><label for="email">Email:</label>
    <input name="email" type="text"/>
    </p>
    <input type="submit" name="submit" value="submit"/>
  </form>

<?php
session_start();
$connect=mysqli_connect("localhost","Prerna","Prerna@1001") or die("Could not connect to database");
  $result=mysql_select_db("register", $connect) or die("Couldn't find db");
   

  if(isset($_POST['submit'])) {
      $email=$_POST['email'];
      $email_check=mysql_query("SELECT members FROM details WHERE user_email='$email'");
      $name=mysql_num_rows($email_check);
      $subject="Login Info";
      $message="Your username is .$name";
      $from="From: test@gmail.com";
      mail($email, $subject, $message, $from);
      echo "your username has been emailed to you";
  }
?>
</body>
</html>