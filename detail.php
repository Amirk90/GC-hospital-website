<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appointment Details </title>
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
<h4 class="text-center"> My Appointments </h4>
<?php
if(isset($_GET['id'])){
$lid=$_GET['id'];
include("connection.php");
$query = "delete from patient_record where id='$lid'";
$run=mysqli_query($connection,$query);
if($run) echo "<h3 class='text-center'> Appointment Deleted Successfully </h3>";
}



$email=$_SESSION['email'];
include("connection.php");
$query="select * from patient_record where email='$email' order by id desc";
echo"<br><center><div class='table-responsive'><table class='table table-bordered'><thead> <tr><th>First Name</th><th>Last Name</th><th>Gender</th><th>Age</th>
<th>Contact No</th><th>Appointment Date</th><th>Edit/Delete</th></tr></thead>";
$view=mysqli_query($connection,$query);
echo"<tbody><tr>";
while($rows=mysqli_fetch_assoc($view)){
$id=$rows['id'];
$first_name=$rows['first_name'];
$last_name=$rows['last_name'];
$gender=$rows['gender'];
$age=$rows['age'];
$contact=$rows['contact'];
$adate=$rows['adate'];
echo"
<th>". $first_name."</th>
<th>".$last_name."  </th>
<th>".$gender."</th>
<th>".$age." </th>
<th>".$contact." </th>
<th>".$adate." </th>
<th><a href='edit_detail.php?id=$id' class='btn btn-primary'> Edit </a>
<br><br>
<a href='detail.php?id=$id' class='btn btn-danger'> Delete </a>
</th>

</tr></tbody>";
}
echo "</table></div> </center>";

?>


 </div>

<br>
<?php
include("footer.php");
?>

</body>
</html>










<?php

?>
