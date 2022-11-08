<?php
session_start();
if(empty($_SESSION['uname']))
{
  header("location:index.php?msg=Please Login First");
}
 ?>
<!DOCTYPE html>
        <html lang="en">
          <head><title></title>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link href="fontawesome/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<style>
</style>
</head>
<body style='font-family:Century Gothic'>
  <?php if (isset($_GET['msg'])) {
    echo "<script>alert('".$_GET['msg']."');</script>";
  } ?>

<div class="container" style='margin-top:50px'>
  <div class="container" id="topheader">
	<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item ">
				<a class="nav-link" href="admin.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="addcard.php">Add Cards</a>
			</li>
      <li class="nav-item">
        <a class="nav-link" href="viewcard.php">View Cards</a>
      </li>

			<li class="nav-item">
				<a class="nav-link " href="viewcustomer.php">View Customer</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="vieworder.php">View Order</a>
			</li>

			<li class="nav-item">
				<a class="nav-link " href="viewmsg.php">View Messages</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="logout.php">Logout</a>
			</li>

		</ul>
	</nav>
</div>

  <div class="row">
  <div class="col-md-3">
<h2>DashBoard</h2>
<ul class="list-group list-group-horizontal">
  <li class="list-group-item">View Customer</li>
  <li class="list-group-item">View Cards</li>
  <li class="list-group-item">Add Cards</li>
  <li class="list-group-item">Update Cards</li>
  <li class="list-group-item">View Order</li>
    <li class="list-group-item">View Messages</li>
</ul>

  </div>
  <div class="col-md-6">



      </div>
  <div class="col-md-3">

  </div>
  </div>
</div>

</body>
</html>
