<?php
require_once('connect.php');


$sname=$_POST["sname"];
$semail=$_POST["semail"];
$smobno=$_POST["smobno"];
$saddress=$_POST["saddress"];

?>
<?php 
$sql="insert into students values(null,'$sname','$semail','$smobno','$saddress')";
$res=mysqli_query($con,$sql);

    // header("location:viewstudent.php");
mysqli_close($con);

?>
<script>
    alert("Student Added");
     document.location="viewstudent.php";
   </script>





