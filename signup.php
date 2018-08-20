<?php
$con=mysqli_connect("localhost","college","collegedb","college");
// $uid=$_POST['id'];
$uname=$_POST['name'];
$ugender=$_POST['gender'];
$uaddres=$_POST['addres'];
$utype=$_POST['utype'];
$pass=$_POST['pass'];

$sql ="insert into signup values(null,'$uname','$ugender','$uaddres','$utype','$pass')";
$res=mysqli_query($con,$sql);
$sql ="insert into login values('$uname','$pass','$utype')";
$res=mysqli_query($con,$sql);
mysqli_close($con);
?>
<script>
    alert("good job");
    document.location="login.html";
    </script>