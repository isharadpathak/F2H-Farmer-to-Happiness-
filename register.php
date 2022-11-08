<?php
include("conn.php");
if (isset($_GET['name'])) {
$name=$_GET['name'];
$sname=$_GET['surname'];
$uname=$_GET['username'];
$email=$_GET['email'];
$pswd=$_GET['pswd'];
$cpswd=$_GET['cpswd'];
$mob=$_GET['mobile'];
$address=$_GET['address'];
$ocation=$_GET['ocation'];
if ($pswd==$cpswd) {


$sql="insert into reg(name,sname,uname,email,pswd,cpswd,mob,address,ocation) values('$name','$sname','$uname','$email','$pswd','$cpswd','$mob','$address','$ocation')";
if(mysqli_query($conn,$sql))
{
  $sql1="insert into login(uname,email,pswd) values('$uname','$email','$pswd')";
  if(mysqli_query($conn,$sql1))
  {
  header("location:index.php?msg=Registered Successfully");}
  else {
    header("location:index.php?msg=Something Went Wrong Username Already Exists try New");
  }
}else {
  header("location:index.php?msg=Something Went Wrong Username Already Exists try New");
}

}
else
{
  echo "<center><h2 style='color:red'><mark>Password And Confirm Password Does Not Match</mark></h2></center>";
}
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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body style='font-family:Century Gothic;color:white;background:url(images/aaron-burden-211846-unsplash.jpg);background-size:cover'>
  <div class="container" data-aos="fade-up" style='background:rgba(0,0,0,0.7);margin-top:20px;border-radius:10px'><br>
    <h2>Customer Registration Form </h2><br>
    <form  action="" method="">
      <div class="row">
      <div class="col-md-4">
        <label for="">Name</label>
        <input type="text" name="name" value="" class='form-control' placeholder='Name'required pattern='[a-zA-Z\s]+'
        title='You Cannot enter numbers and special charachter in name'>
      </div>

      <div class="col-md-4">
        <label for="">Sur Name</label>
        <input type="text" name="surname" value="" class='form-control' placeholder="Surname"   required pattern='[a-zA-Z\s]+'
          title='You Cannot enter numbers and special charachter in Surname'>
      </div>
      <div class="col-md-4">
        <label for="">UserName</label>
        <input type="text" name="username" value="" class='form-control' placeholder="Username" required pattern='[a-zA-Z\s]+'
          title='You Cannot enter numbers and special charachter in Username'>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <label for="">Email</label>
        <input type="email" name="email" value="" class='form-control' placeholder="Email" required>
      </div>

      <div class="col-md-4">
        <label for="">Password</label>
        <input type="password" name="pswd" value="" class='form-control' placeholder="Password" pattern='.{5,30}' title='Password Must Contain more than 5 character and less than 30 character'>
      </div>
      <div class="col-md-4">
        <label for="">Confirm Password</label>
        <input type="password" name="cpswd" value="" class='form-control' placeholder="Confirm Password" required
        pattern='.{5,30}' title='Password Must Contain more than 5 character and less than 30 character'>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <label for="">Mobile</label>
        <input type="text" name="mobile" value="" class='form-control' placeholder="Mobile"
        required pattern=".{10,10}" maxlength="10" pattern="\d*"
        title='Enter only numeric data for Phone Number only 10 digits'>
      </div>

      <div class="col-md-4">
        <label for="">Address</label>
      <textarea name="address" rows="4" cols="40" class='form-control' placeholder="Address with Pin code & Land Mark"></textarea>
       </div>
      <div class="col-md-4" >
        <label for="">Ocation</label>
<select name="ocation" class='form-control'>
  <option value="wedding">Wedding</option>
  <option value="engagement">Engagement</option>
  <option value="birthday">Birthday</option>
  <option value="party">Other Parties</option>
</select>

      </div>
    </div><div class="row" style='height:20px'>

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
    <div class="row" style='margin-top:30px;'><div class="col-md-2">

    </div>
      <div class="col-md-8">
        <a href="index.php" style='text-decoration:none'>
        <button type="button" name="button" class='btn btn-danger btn-block'>BACK TO HOME</button>
        </a>
      </div>
      <div class="col-md-2">

      </div>
    </div>
    <br>
  </div>
  <script>
    AOS.init({
      duration:2000,
    });
  </script>
  </body>
</html>
