<?php
include("conn.php");
if (isset($_GET['uname'])) {
$name=$_GET['uname'];
$email=$_GET['email'];
$sub=$_GET['sub'];
$msg=$_GET['msg'];
$sq="select * from reg where email='$email'";
 $x=mysqli_query($conn,$sq);
if(mysqli_num_rows($x)>0)
{
  $sql="insert into contact(uname,email,sub,msg) values('$name','$email','$sub','$msg')";
  if(mysqli_query($conn,$sql))
  {
  //  echo "ok";
    header("location:index.php?msg=Message Sent Successfully");
  }else {
    //echo "error";
    header("location:index.php?msg=Something Went Wrong");
  }
}
else {

    header("location:index.php?msg=Please Register Yourself First ");

}
}
 ?>
