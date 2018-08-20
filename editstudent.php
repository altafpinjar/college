<?php
$id=$_POST["id"];
$sname=$_POST["sname"];
$semail=$_POST["semail"];
$smobno=$_POST["smobno"];
$saddress=$_POST["saddress"];

require_once('connect.php');
$sql="UPDATE `students` SET `sname` = '$sname', `semail` = '$semail', `smobno` = '$smobno', `saddress` = '$saddress' WHERE `students`.`id` = $id";
    //   insert into students values(null,'$sname','$semail','$smobno','$saddress')";
$res=mysqli_query($con,$sql);
// UPDATE `students` SET `sname` = '', `semail` = '', `smobno` = '', `saddress` = '' WHERE `students`.`id` = 4;
    // header("location:viewstudent.php");
mysqli_close($con);

?>
<script>
alert("Updated Succuessfully");
document.location="viewstudent.php";
</script>