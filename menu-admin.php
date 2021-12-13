<html>
<head>
</head>
<body>
<div class="row">
    <div class="col-sm-12"> <center>
      <img src="images/logo.png" class="img-responsive" style="width:40%;" alt="Image"> </center>
    </div> </div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
	<center>
      <ul class="nav navbar-nav">
        <li><a href="admin.php">All Appointments</a></li>
		<li><a href="alluser.php">All Users</a></li>
        <li><a href="creat-admin.php">Create Admin</a></li>
        <li><a href="feedback.php">FeedBack</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?state=logout"><span class="glyphicon glyphicon-share"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


</body>
</html>

<?php
if($_SESSION["rank"]=="admin")
echo "";
else
header("location: index.php?state=logout");
?>
