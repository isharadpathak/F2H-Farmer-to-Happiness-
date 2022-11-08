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
if (isset($_GET['cid'])) {
 $cid=$_GET['cid'];

 $un=$_SESSION['uname'];
$sql="select * from card where cid='$cid'";
$x=mysqli_query($conn,$sql);
if ($r=mysqli_fetch_assoc($x) ){
  $sq="select * from reg where uname='$un'";
  $a=mysqli_query($conn,$sq);
  if($b=mysqli_fetch_assoc($a))
  {
     
  ?>
  <form class="" action="" method="">
    <table class='table'>
      <tr>
        <td colspan="2" align='center'><img src='<?php echo $r['photo']?>' style='height:200px;width:200px' class="rounded"></td>
      </tr>
      <tr>
        <td>Card Id</td><td><input type="text" name="cid" value="<?php echo $r['cid']?>" ></td>
      </tr>
      <tr>
        <td>Category</td><td><input type="text" name="cat" value="<?php echo $r['category']?>"></td>
      </tr>
      <tr>
        <td>Ocation</td><td><input type="text" name="oct" value="<?php echo $r['ocation']?>"></td>
      </tr>

      <tr>
        <td>Price</td><td><input type="text" name="pri" value="<?php echo $r['price']?>"></td>
      </tr>
      <tr>
        <td>Quantity</td><td><input type="text" name="qty" value="<?php echo $r['qty']?>"></td>
      </tr>
      <tr>
        <td>UserName</td><td><input type="text" name="uname" value="<?php echo $b['uname']?>"></td>
      </tr>
      <tr>
        <td>Name</td><td><input type="text" name="name" value="<?php echo $b['name']?>"></td>
      </tr>
      <tr>
        <td>Email</td><td><input type="text" name="eml" value="<?php echo $b['email']?>"></td>
      </tr>
      <tr>
        <td>Mobile</td><td><input type="text" name="mob" value="<?php echo $b['mob']?>"></td>
      </tr>
      <tr>
        <td>  Address</td><td><input type="text" name="add" value="<?php echo $b['address']?>"></td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit" name="button" class='btn btn-primary btn-block'>PLACE ORDER & PAY</button>
            </td>
      </tr>    </form>
  </table>

  <?php
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
if (isset($_GET['cat'])) {
  $cid=$_GET['cid'];$cat=$_GET['cat'];$oct=$_GET['oct'];$pri=$_GET['pri'];
  $qty=$_GET['qty'];$uname=$_GET['uname'];$name=$_GET['name'];$eml=$_GET['eml'];
  $add=$_GET['add'];$mob=$_GET['mob'];
  $total=$qty*$pri;
  $sql1="insert into ordercart values('$cid','$cat','$oct','$pri','$qty','$uname','$name','$eml','$mob','$add','$total')";
  if(mysqli_query($conn,$sql1))
  {
    header("location:pay.php?msg=Order Placed Successfully");
  }
  else {
        header("location:pay.php?msg=Something went Wrong");
  }
}

 ?>
