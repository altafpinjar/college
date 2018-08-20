<?php

require_once('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>college</title>
<style>
*{
    margin: 0px;
    padding: 0px;
}

</style>

</head>
<body>
<?php
$id=$_REQUEST["id"];

        $sql="select * from students where id='$id'";
        $res=mysqli_query($con,$sql);


        $row=mysqli_fetch_array($res);
     
            ?>
    <form method="POST" action="editstudent.php">  
   <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" ><br>        
            Student name:<input type="text" name="sname" value="<?php echo $row["sname"]; ?>" ><br>
            Student Email<input type="email" name="semail" value="<?php echo $row["semail"]; ?>"><br>
            Student Mobile no<input type="text" name="smobno" value="<?php echo $row["smobno"]; ?>"><br>
            Student Address<input type="text" name="saddress" value="<?php echo $row["saddress"]; ?>"><br>
          <button type="submit" name="submit" value="add">Update</button> 

</form>
</body>
</html>






