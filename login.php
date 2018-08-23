<?php
session_start(); 
$con=mysqli_connect("localhost","college","collegedb","college");

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$qa="select * from login where uname='$uname' and pass='$pass'";
$res=mysqli_query($con,$qa);

if($row=mysqli_fetch_array($res))

{
  // store session data
  $_SESSION["uname"] = "$uname";
  $_SESSION["pass"] = "$pass";
  if(($uname==$row['uname'])&&($pass==$row['pass']))
  {
    if($row['utype']=="student")
    {
    header("location:student/student.php");
    }
   else
    {
      header("location:admin/admin.php");
     }
    }
}    
else
{
echo "invalid ";
}
mysqli_close($con);
?>
