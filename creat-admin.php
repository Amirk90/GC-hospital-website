<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Admin </title>
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
<br>
<div class="col-sm-3">
</div>
<div class="col-sm-5">
<h2 class="text-center">Create Admin </h2>
 <?php

		if(isset($_POST['register'])){
		include("connection.php");
		$name=$_POST['name'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password1=$_POST['password1'];
		$qury1="select * from admin where email='$email'";
		$check=mysqli_query($connection, $qury1);
		$rows=mysqli_fetch_array($check);
		$dbemail=$rows['email'];
		if($name==null || $lastname==null || $email==null || $password==null || $password1==null) echo "<h3 class='text-center'>Please Fill Full Form</h3>";
		else{
		if($dbemail==$email){echo"<h3 class='text-center'>This Email $email Already Registered</h3>";}
		else {
		if($password1==$password){
		$fullpass=md5($password);
		$qury="insert into admin (name,lastname,email,password) values ('$name','$lastname','$email','$fullpass')";
		$reg=mysqli_query($connection, $qury);
		if($reg) echo "<h3 class='text-center'>Admin created Successfully</h3>";

  }else echo "<h3 class='text-center'> Password is not matched</h3>";
		}

		}
		}
		?>

  <form class="form-horizontal" action="creat-admin.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="lastname">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Re-Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password1">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="register">Create Admin</button>
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
