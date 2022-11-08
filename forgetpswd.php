
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
<div class="container" style='margin-top:50px'>
  <div class="row">
  <div class="col-md-3">

  </div>
  <div class="col-md-6">
    <form action="" method="" >
      <h2>If You Forget Your Password</h2>
      <input type="email" name="email" value="" placeholder=" Enter Your Email" required class='form-control'>
    <br><button type="submit" name="button" class='btn btn-primary btn-block'>SUBMIT</button>
    </form>
  </div>
  <div class="col-md-3">

  </div>
  </div>
</div>

</body>
</html>
<?php
include("conn.php");
if (isset($_GET['email'])) {
  $email=$_GET['email'];
  $ps=uniqid();
  $sql="update reg set pswd='$ps',cpswd='$ps' where email='$email'";
  if (mysqli_query($conn,$sql)) {
    $sq="update login set pswd='$ps' where email='$email'";
    if (mysqli_query($conn,$sq)) {
      header("location:index.php?msg=New Password is $ps");
    }
    else {
            header("location:index.php?msg=Something Went Wrong");
    }
  }else {
          header("location:index.php?msg=Something Went Wrong");
  }
}



 ?>
