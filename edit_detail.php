<?php
session_start();
include("connection.php");
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
<h2 class="text-center"> Edit Appointment </h2>
 <?php
if(isset($_POST['save'])){
$id=$_POST['id'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$contact=$_POST['contactno'];
$age=$_POST['age'];
$adate=$_POST['adate'];
$mail=$_SESSION["email"];
if($fname==null || $lname==null || $contact==null) { echo "<center><h3>Enter Complete Detail </h3></center>"; }
else {
$query="update patient_record set first_name='$fname',last_name='$lname',age='$age',contact='$contact',adate='$adate' where id='$id'";
$comnt=mysqli_query($connection, $query);
if($comnt) {

ob_start();
header("location: detail.php");

 }
}
}



if(isset($_GET['id'])){
$lid=$_GET['id'];
$query="select * from patient_record where id='$lid'";
$view=mysqli_query($connection,$query);
$rows=mysqli_fetch_assoc($view);
$id=$rows['id'];
$first_name=$rows['first_name'];
$last_name=$rows['last_name'];
$gender=$rows['gender'];
$age=$rows['age'];
$contact=$rows['contact'];
$adate=$rows['adate'];
}

?>


  <form class="form-horizontal" action="edit_detail.php" method="post">
   <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" required>
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="firstname" value="<?php echo $first_name; ?>" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="lastname" value="<?php echo $last_name; ?>" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="age" value="<?php echo $age; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact #:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="contactno" value="<?php echo $contact; ?>" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date:</label>
      <div class="col-sm-10">
     <input type="date" class="form-control" name="adate" value="<?php echo $adate; ?>" required>
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
