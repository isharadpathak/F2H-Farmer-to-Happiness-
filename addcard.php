
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
<form  action="" method="post" enctype='multipart/form-data'>
  <div class="row" style="margin-top:50px;">
  <div class="col-md-4">
    <label for="">Product Name</label>
    <input type="text" name="cid" value="" class='form-control' placeholder='Product Name'required >
  </div>

  <div class="col-md-4">
    <label for="">Product Category</label>
     <input type="text" name="ocation" value="" class='form-control' placeholder='Category'required >
 
  </div>
  <div class="col-md-4">
    <label for="">Product Type</label>
    <select name="category" class='form-control'>
    <option value="Fresh">Fresh</option>
    <option value="Frozen">Frozen</option>
      </select>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <label for="">Quantity(KG/Dozen)</label>
    <input type="number" name="qty" value="" class='form-control' placeholder="Quantity" required>
  </div>

  <div class="col-md-4">
    <label for="">Price</label>
    <input type="number" name="price" value="" class='form-control' placeholder="Price as per Quantity" required>
  </div>
  <div class="col-md-4">
    <label for="">Product Image </label>
<input type="file" name="photo" value="" class='form-control'>
    </div>
</div>
<div class="row" style='height:20px'>

</div>
<div class="row" >
  <div class="col-md-6">
      <button type="submit" name="button" class='btn btn-primary btn-block'>SUBMIT</button>
  </div>
  <div class="col-md-6">
      <button type="reset" name="button" class='btn btn-warning btn-block '>RESET</button>
  </div>
</div>
    </form>

<br>
</div>
<script>
AOS.init({
  duration:2000,
});
</script>
</body>
</html>
<?php
include("conn.php");
if (isset($_POST['cid'])) {
$cid=$_POST['cid'];
$ocation=$_POST['ocation'];
$category=$_POST['category'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$folder="images";
move_uploaded_file($_FILES['photo']['tmp_name'],"$folder/".basename($_FILES['photo']['name']));
$path="$folder/".basename($_FILES['photo']['name']);
$sql="insert into card(cid,ocation,category,qty,price,photo) values('$cid','$ocation','$category','$qty','$price','$path')";
if(mysqli_query($conn,$sql))
{
header("location:addcard.php?msg=Card Added Successfully");

}
else
{header("location:addcard.php?msg=Something Went Wrong Or Card Id already Added");
}
}
?>

</body>
</html>
