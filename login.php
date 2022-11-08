<?php
include("conn.php");
session_start();
if (isset($_GET['uname'])) {
  $uname=$_GET['uname'];
  $pswd=$_GET['pswd'];
if($uname=="admin")
{
  $sql="select * from login where uname='admin'";
  $x=mysqli_query($conn,$sql);
  if($r=mysqli_fetch_assoc($x))
  {
    $dbpswd=$r['pswd'];
    if($dbpswd==$pswd)
    {
      $_SESSION['uname']=$uname;
      $_SESSION['pswd']=$pswd;
      header("location:admin.php?msg=Welcome Admin");
    }
    else {
            header("location:admin.php?msg=Admin please check your Password");
    }
  }
}
else {
  $sq="select * from login where uname='$uname'";
  $a=mysqli_query($conn,$sq);
  if ($b=mysqli_fetch_assoc($a)) {
    $dbps=$b['pswd'];
    if($dbps==$pswd)
    {
      $_SESSION['uname']=$uname;
      $_SESSION['pswd']=$pswd;
      header("location:customer.php?msg=Welcome $uname");
    }
    else {
            header("location:index.php?msg=Invalid Password");
    }
  }
  else {
    header("location:index.php?msg=Invalid UserName or Password");
  }
}



}


 ?>
