
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

<br>
<div class="row">

  <div class="col-md-11">
    <table class='table table-bordered'>
<tr>
  <th>Usename</th>  <th>Email</th>  <th>Subject</th>  <th>Message</th>  <th>Reply</th> <th colspan='2'>Action</th>
</tr>
<?php
include("conn.php");
$sql="select * from contact where status='0'";
$x=mysqli_query($conn,$sql);
while($r=mysqli_fetch_assoc($x))
{
  ?>
<tr>
  <td><?php echo $r['uname']?></td><td><?php echo $r['email']?></td><td><?php echo $r['sub']?></td><td><?php echo $r['msg']?></td>
  <td>
  <form class="" action="" method="">
    <textarea name="reply" rows="3" cols="30" class='form-control'></textarea>
    <button type="submit" name="uname"value='<?php echo $r['uname']?>' class='btn btn-primary btn-block'>SEND REPLY</button>

  </td><td>
  <button type="submit" name="delete" value='<?php echo $r['uname']?>'class='btn btn-warning'>DELETE</button>
</form>
  </td>
</tr>
  <?php
}
 ?>
    </table>
  </div>
  <div class="col-md-1"></div>
</div>
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
if (isset($_GET['delete'])) {
  $uname=$_GET['delete'];

$sql="delete from contact where uname='$uname'";
if(mysqli_query($conn,$sql))
{
header("location:viewmsg.php?msg=Message deleted Successfully");

}
else {

header("location:viewmsg.php?msg=Something Went Wrong");
}}
if (isset($_GET['uname'])) {
  $uname=$_GET['uname'];$reply=$_GET['reply'];
$price=$_GET['price'];
$sql="update contact set reply='$reply',status='1' where uname='$uname'";
if(mysqli_query($conn,$sql))
{
header("location:viewmsg.php?msg=Reply Sent Successfully");
}
else {

header("location:viewcard.php?msg=Something Went Wrong");
}}

 ?>
