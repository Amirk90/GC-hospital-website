<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appointment</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style/style.css" />
 </head>
<body>

<?php
include("menu-user.php");
?>
<div class="container">
<br>
<div class="col-sm-3">
</div>
<div class="col-sm-5">
<h2 class="text-center">Add Appointment </h2>
 <?php
if(isset($_POST['save'])){
include("connection.php");
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$contact=$_POST['contactno'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$adate=$_POST['adate'];
$mail=$_SESSION["email"];
if($fname==null || $lname==null || $contact==null || $gender==null) { echo "<center><h3>Enter Complete Detail </h3></center>"; }
else {
$query="insert into patient_record (email,first_name,last_name,gender,age,contact,adate) values ('$mail','$fname','$lname','$gender','$age','$contact','$adate')";
$comnt=mysqli_query($connection, $query);
if($comnt) echo "<br><center><h2>Your Appointment is Submited </h2></center>";
}
}
?>


  <form class="form-horizontal" action="appointment.php" method="post">
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="firstname" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="lastname" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="age" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Gender:</label>
      <div class="col-sm-10">
	  <select name="gender" class="form-control">
	  <option value="Male"> Male </option>
	  <option value="Female"> female </option>
	  </select>

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact #:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="contactno" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date:</label>
      <div class="col-sm-10">
     <input type="date" class="form-control" name="adate" required>
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
