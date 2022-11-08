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
				<a class="nav-link" href="customer.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="cards.php">Cards</a>
			</li>

			<li class="nav-item">
				<a class="nav-link " href="viewreply.php">View Reply</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="logout.php">Logout</a>
			</li>

		</ul>
	</nav>
</div>
  <div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6"><br>
<?php
include("conn.php");
$un=$_SESSION['uname'];
$sql="select * from reg where uname='$un'";
$x=mysqli_query($conn,$sql);
if ($r=mysqli_fetch_assoc($x) ){
  ?>
  <h1>MY PROFILE</h1>
<table class='table '>

  <tr>
    <td>Name</td><td><?php echo $r['name']?> <?php echo $r['sname']?></td>
  </tr>
  <tr>
    <td>User Name</td><td><?php echo $r['uname']?></td>
  </tr>
  <tr>
    <td>Email</td><td><?php echo $r['email']?></td>
  </tr>
  <tr>
    <td>Mobile</td><td><?php echo $r['mob']?></td>
  </tr>
  <tr>
    <td>Address</td><td><?php echo $r['address']?></td>
  </tr>
  <tr>
    <td>Password</td><td><?php echo $r['pswd']?></td>
  </tr>
  <tr>
  </tr>
</table>
  <?php
}

 ?>
<form class="" action="" method="">

   <button type="submit" name="button" value="update" class='btn btn-primary btn-block' >WANT TO UPDATE PROFILE</button>

   </form>
<?php
if (isset($_GET['button'])) {
  $sql="select * from reg where uname='$un'";
  $x=mysqli_query($conn,$sql);
  if ($r=mysqli_fetch_assoc($x) ){
    ?>
    <h2>UPDATE PROFILE</h2>
  <table class='table '>
<form class="" action="" method="">


    <tr>
      <td>Email</td><td><input type="email" name="email" value="<?php echo $r['email']?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Mobile</td><td><input type="text" name="mob" value="<?php echo $r['mob']?>" class="form-control">
        </td>
    </tr>
    <tr>
      <td>Password</td><td><input type="text" name="pswd" value="<?php echo $r['pswd']?>" class="form-control">
        </td>
    </tr>

    <tr>
      <td>Address</td><td><textarea name="address" rows="4" cols="40"  class="form-control"><?php echo $r['address']?></textarea>
      </td>
    </tr>
    <tr>

    </tr>
  </table>

           <button type="submit" name="uname" class='btn btn-info btn-block' value='<?php echo $r['uname']?>'>UPDATE PROFILE</button>

           </form>
  <?php
}
}

 ?>


      </div>
  <div class="col-md-3">

  </div>
  </div>
</div>

</body>
</html>
<?php
if (isset($_GET['uname'])) {
  $uname=$_GET['uname'];$email=$_GET['email'];$mob=$_GET['mob'];$address=$_GET['address'];
  $pswd=$_GET['pswd'];
$price=$_GET['price'];
$sql="update reg set email='$email',mob='$mob',address='$address',pswd='$pswd',cpswd='$pswd' where uname='$uname'";
if(mysqli_query($conn,$sql))
{
  $sq="update login set pswd='$pswd' where uname='$uname'";
  if(mysqli_query($conn,$sq))
  {
header("location:customer.php?msg=Profile Updated Successfully");
}
else {

  header("location:customer.php?msg=Something Went Wrong");
}
}
else {

header("location:customer.php?msg=Something Went Wrong");
}}

 ?>
