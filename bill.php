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
input {
  border:0px;outline:0px;
}
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
  $sq="select * from payment where name='$un'";
  $a=mysqli_query($conn,$sq);
  if($b=mysqli_fetch_assoc($a))
  {
  ?>
    <table class='table'>
      <tr><td colspan='2'>Card Services</td></tr>
        <tr><td>Customer Name</td><td><?php echo $r['name']?></td></tr>
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
          <td>Card id</td><td><?php echo $r['cid']?></td>
        </tr>

        <tr>
          <td>Category</td><td><?php echo $r['category']?></td>
        </tr>

        <tr>
          <td>Ocation</td><td><?php echo $r['ocation']?></td>
        </tr>

        <tr>
          <td>Price</td><td><?php echo $r['price']?></td>
        </tr>
        <tr>
          <td>Quantity</td><td><?php echo $r['qty']?></td>
        </tr>
        <tr>
          <td>Payement Mode</td><td><?php echo $b['mode']?></td>
        </tr>
        <tr>
          <td>Total Amount</td><td><?php echo $r['total']?> &#x20B9;</td>
        </tr>

  </table>
  <button class='btn btn-default' name='eml' onclick="prt()">Print </button> </div>
       <script>
  function prt() {
  window.print();
  }
  </script>

  <?php
}
}


 ?>

</div>
<div class="col-md-3">

</div>
</body>
</html>
