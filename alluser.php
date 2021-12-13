<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>All User</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style/style.css" />
 </head>
<body>

<?php
include("menu-admin.php");
?>
<div class="container">
<h4 class="text-center"> All User List </h4>
<?php
 

if(isset($_GET['id'])){
$lid=$_GET['id'];
include("connection.php");
$query = "delete from user where id='$lid'";
$run=mysqli_query($connection,$query);
if($run) echo "<h3 class='text-center'> Delete Successfully </h3>";
}


$email=$_SESSION['email'];
include("connection.php");
$query="select * from user";
echo"<br><center><div class='table-responsive'><table class='table table-bordered'><thead> <tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Delete</th></tr></thead>";
$view=mysqli_query($connection,$query);
echo"<tbody><tr>";
while($rows=mysqli_fetch_array($view)){
$id=$rows['id'];
$name=$rows['name'];
$email=$rows['email'];
$lastname=$rows['lastname'];
echo"
<th>". $name."</th>
<th>". $lastname."</th>
<th>".$email."  </th>
<th><a href='alluser.php?id=$id' class='btn btn-danger'> Delete </a></th>

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
