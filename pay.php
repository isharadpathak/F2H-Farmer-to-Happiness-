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
td{text-align: center}
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
$sql="select * from ordercart where uname='$un'";
$x=mysqli_query($conn,$sql);
if ($r=mysqli_fetch_assoc($x) ){

  ?>
  <form class="" action="" method="">
    <input type="hidden" name="uname" value="<?php echo $r['uname']  ?>">
        <input type="hidden" name="email" value="<?php echo $r['email']  ?>">
        <input type="hidden" name="mob" value="<?php echo $r['mob']  ?>">
            <input type="hidden" name="address" value="<?php echo $r['address']  ?>">
              Total Cost   <input type="number" name="total" value="<?php echo $r['total']  ?>" class="form-control">
Payment Mode<select class="form-control" name="pay"  class="form-control">
  <option value="cash">Cash On Delivery</option>
  <option value="credit">Credit/Debit Card</option>
</select><br>
<button type="submit" name="button" class='btn btn-primary btn-block'>SUBMIT</button>
</form>

  <?php
  if(isset($_GET['pay']))
{
  $mode=$_GET['pay'];$uname=$_GET['uname'];$email=$_GET['email'];$mob=$_GET['mob'];
  $address=$_GET['address'];$total=$_GET['total'];
  if($mode=="cash")
  {
    $sql1="insert into payment(mode,name,email,mobile,address,total) values('$mode','$uname','$email','$mob','$address','$total')";
if(mysqli_query($conn,$sql1))
{
  header("location:bill.php");
}}
else
{
  $sql1="insert into payment(mode,total,name,email,mobile,address) values('$mode','$total','$uname','$email','$mob','$address')";

if(mysqli_query($conn,$sql1))
{
?>
<form class="" action="" method="">
Card No <input type="text" name="cno" value="" class="form-control" required pattern=".{16,16}" maxlength="16"
title='Enter only numeric data for Card Number only 16 digits'>
Name on Card <input type="text" name="cname" value=""  class="form-control" required pattern='[a-zA-Z\s]+'
title='You Cannot enter numbers and special charachter in name'>
Expiry <input type="month" name="exp" value=""  class="form-control" required placeholder="Month - Year">
CVV <input type="number" name="cvv" value=""  class="form-control" required pattern=".{3,3}"><br>
<button type="submit" name="button" class='btn btn-warning btn-block'>SUBMIT</button>
</form>
<?php
}

  }

}

}

 ?>

</div>
<div class="col-md-3">

</div>
</body>
</html>
<?php
if (isset($_GET['cno'])) {
  $cno=$_GET['cno'];  $cname=$_GET['cname'];  $exp=$_GET['exp'];  $cvv=$_GET['cvv'];
  $sql2="update payment set cardno='$cno',expiry='$exp',nameoncard='$cname',cvv='$cvv' where name='$un'";
  if(mysqli_query($conn,$sql2))
  {
    header("location:bill.php?Order placed & Payment Done Successfully");
  }
  else {
    header("location:pay.php?Something went Wrong");
  }
}

 ?>
