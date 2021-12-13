<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us </title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style/style.css" />
 </head>
<body>

<?php
include("menu.php");
?>
<div class="container">
<br>
<div class="col-sm-3">
</div>
<div class="col-sm-5">
<h2 class="text-center">Contact Us </h2>
 <?php
if(isset($_POST['save'])){
include("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
if($name==null || $email==null || $subject==null || $message==null) { echo "<center><h3>Enter Complete Detail </h3></center>"; }
else {
$query="insert into message (name,email,subject,message) values ('$name','$email','$subject','$message')";
$comnt=mysqli_query($connection, $query);
if($comnt) echo "<br><br><center><h2>Thank you for contacting us</h2></center>";
}
}
?>


  <form class="form-horizontal" action="contactus.php" method="post">
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Subject:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="subject" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Message:</label>
      <div class="col-sm-10">
       <textarea type="text"  rows="7" cols="50" name="message" required></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" value="Login">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>



<br>
<?php
include("footer.php");
?>

</body>
</html>










<?php

?>
