
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
html{
  scroll-behavior: smooth;
}
  body {
      position: relative;
  }
  #section1 {padding-top:50px;height:768px;color: #fff;}
  #section2 {padding-top:50px;height:768px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:768px;color: #fff; background-color: gold;}
  #section41 {padding-top:50px;height:768px;color: #fff; background-color: #673ab7;}
  #section42 {padding-top:50px;height:768px;color: #fff; background-color: gold;}
  </style>
</head>
<body style='background:gold;font-family: Century Gothic'>
  <?php if (isset($_GET['msg'])) {
    echo "<script>alert('".$_GET['msg']."');</script>";
  } ?>
  <div class="container-fluid" id="topheader">
  	<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
      <a class="navbar-brand" href="#">
    <img src="images/icons8-invite-64.png" alt="Logo" style="width:40px;">
  </a>
  		<ul class="navbar-nav">
  			<li class="nav-item ">
  				<a class="nav-link" href="#section1">Home</a>
  			</li>
  			<li class="nav-item">
  				<a class="nav-link" href="#section2">About Us</a>
  			</li>

  			<li class="nav-item">
  				<a class="nav-link " href="#section3">Services</a>
  			</li>
  			<li class="nav-item">
  				<a class="nav-link" href="#section41">Pricing</a>
  			</li>
  			<li class="nav-item">
  				<a class="nav-link " href="#section42">Contact Us</a>
  			</li>

  		</ul>&nbsp;&nbsp;&nbsp;
      <form class="form-inline" action="login.php">
   <div class="input-group">
     <div class="input-group-prepend">
       <span class="input-group-text"><i class="fas fa-user"></i></span>
     </div>
     <input type="text" class="form-control"name='uname' placeholder="Username">
   </div>&nbsp;
   <div class="input-group">
     <div class="input-group-prepend">
       <span class="input-group-text"><i class="fas fa-lock-open"></i></span>
     </div>
     <input type="password" class="form-control" name='pswd' placeholder="Password">&nbsp;
   </div>
   <div class="input-group">
     <button type="submit" name="button" class='btn btn-primary'>LOGIN</button>
   </div>

 </form>
 &nbsp;<a href='forgetpswd.php' style='color:gold;font-size:14px;text-decoration:none;'>forget</a>&nbsp;&nbsp;<label for="">New User ?</label>&nbsp;
<a href="register.php">
<button type="button" name="button" class='btn btn-info'>Register</button></a>
  	</nav>
  </div>

<div id="section1" class="container-fluid" >
  <h1><b style="color:green;">F2H </b> FARMER TO HAPPINESS</h1>
<div class="row">
  <div class="col-md-4">
    <img data-aos="fade-up" src="images\bb08cb10e6514666eac853b83926caf9.jpg" alt="" style='height:500px;width:400px;' class="rounded-circle">
  </div>
  <div class="col-md-4">
    <img data-aos="fade-up" src="images\wedding.jpg" alt="" style='height:500px;width:400px;'class="rounded-circle">
  </div>
  <div class="col-md-4">
    <img data-aos="fade-up" src="images\wedding-cards.jpg" alt="" style='height:500px;width:400px;' class="rounded-circle">
  </div>
</div>
</div>
<div id="section2" class="container-fluid">
  <h1>About Us</h1><div class="jumbotron" style='color:black' data-aos="fade-up">
  <div class="row"><div class="col-md-1">

  </div>
    <div class="col-md-10">
      <p data-aos="fade-left" style='font-size:20px;'>Farmer To Happiness (F2H) is a web application that can be widely used by farmers. 
It can be used for selling of vegetables by the farmer to the  Customer directly. The main advantage of this application is that, it decreases the chain of marketing in selling of vegetables which results in lower selling price of vegetables to the consumers. However, the application currently lacks sound theoretical frameworks that can be useful in addressing a key issue concerning the implementation of e-commerce systems</p>
<img src="images\maxresdefault.png" alt="" style='height:400px;width:1000px'class="img-thumbnail">
    </div>

    <div class="col-md-1">

    </div>
  </div>

</div>

</div>
<div id="section3" class="container-fluid">
  <h1>Services</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
    <div class="col-md-10" style='color:black'>
      <h2>We Are Focusing on :</h2>
      <center>
<div class="" data-aos="fade-right">
  <ul class="list-group list-group-horizontal" style="width:300px;box-shadow:0px 10px 15px black;">
  <li class="list-group-item">Heavy Discounts</li>
  <li class="list-group-item">Quick Service</li>
  <li class="list-group-item">Superb Quality</li>
  <li class="list-group-item">Fast delivery</li>
  <li class="list-group-item">Reasonable Price</li>
    <li class="list-group-item">Responsive for Mistakes</li>
    <li class="list-group-item">No Extra Charges</li>
          <li class="list-group-item">Free Delivery</li>
                      <li class="list-group-item">Perfect Packaging</li>
</ul>
</div>

</center>
    </div>
    <div class="col-md-1"></div>
    </div>
  </div>
</div>
<div id="section41" class="container-fluid">
  <h1>Pricing</h1>
  <div class="container">
    <div class="row" style='color:black'>


    <div data-aos="fade-right" class="col-md-2" style='padding:20px;background:white;border-radius:10px;border-right:2px solid black;box-shadow:3px 4px 5px black;text-align:center'>
      <h4>Tomato</h4>
      <h4>Quantity : 10 Kg</h4>
      <h4>Price : ₹100/Kg</h4>
      <h4>Discount : 15%</h4>
    </div>
    <div class="col-md-1">

    </div>
    <div data-aos="fade-right" class="col-md-2" style='padding:20px;background:white;border-radius:10px;border-right:2px solid black;text-align:center;box-shadow:3px 4px 5px black'>
<h4>Potato</h4>
<h4>Quantity : 10 Kg</h4>
<h4>Price : ₹20/Kg</h4>
  <h4>Discount : 10%</h4>
    </div>
    <div class="col-md-1">

    </div>
    <div data-aos="fade-left" class="col-md-2" style='padding:20px;background:white;border-radius:10px;border-right:2px solid black;text-align:center;box-shadow:3px 4px 5px black'>
<h4>Apple</h4>
<h4>Quantity : 10 Kg</h4>
<h4>Price : ₹200/Kg</h4>
  <h4>Discount : 10%</h4>
    </div>
    <div class="col-md-1">

    </div>
    <div data-aos="fade-left" class="col-md-2" style='padding:20px;background:white;border-radius:10px;text-align:center;box-shadow:3px 4px 5px black'>
<h4>Banana</h4>
<h4>Quantity : 10 Dozen</h4>
<h4>Price : ₹50/Dozen</h4>
  <h4>Discount : 10%</h4>
    </div>
  </div><br>
  <br>
  <img data-aos="fade-up" src="images\abc.jpg" alt="" style='padding:20px;height:400px;width:1200px'class="img-thumbnail">
</div></div>
<div id="section42" class="container-fluid">
  <h1>Contact Us</h1>
  <div class="container" style='color:black'>

  <div class="row">
  <div class="col-md-5"><br><br>
    <h4>Address :</h4>F2H [FARMER TO HAPPINESS]<br>
    Presidential Suite, Bond Street<br>
    Lucknow. Pin : 226010
    <br><br>
    <h4>Email :</h4> admin@f2h.com
    <br><br>
    <h4>Contact :</h4>9695375307/9199007192
    <br><br>
    <a href="https://facebook.com"
    <i class='fab fa-facebook ' style='font-size:30px;color:white;text-decoration:none'></i></a>
    <a href="https://twitter.com"
    <i class="fab fa-twitter-square"  style='font-size:30px;color:white;text-decoration:none'></i></a>
    <a href="https://gmail.com"><i class="fab fa-google-plus-square" style='font-size:30px;color:white;text-decoration:none'></i></a>
<a href="https://linkin.com"><i class="fab fa-linkedin"style='font-size:30px;color:white;text-decoration:none'></i></a>
  </div>
  <div class="col-md-7">
<fieldset data-aos="fade-left" style='border:1px solid black;padding:10px;border-radius:10px;box-shadow:3px 4px 5px black'>
  <legend style='text-align:center'>Contact Us Form</legend>
  <form action='contact.php'><div class="form-group">
    <label for="">Username :</label>
    <input type="text" name="uname" value="" class='form-control' placeholder="Enter Username"
    required>
  </div>
  <div class="form-group">
    <label for="">Email :</label>
    <input type="Email" name="email" value="" class='form-control' placeholder="Enter Email" required>
  </div>
  <div class="form-group">
    <label for="">Subject :</label>
    <input type="text" name="sub" value="" class='form-control' placeholder="Enter Subject">
  </div>
  <div class="form-group">
    <label for="">Message :</label>
    <textarea name="msg" rows="4" cols="40" class='form-control' placeholder="Enter Your Message" required></textarea>
  </div>
<div class="form-group">
  <button type="submit" name="button" class='btn btn-primary btn-block'>SEND MESSAGE</button>
</div>
</form>
</fieldset>
  </div>

  </div>
</div>

</div>

<?php include("footer.php")?>
