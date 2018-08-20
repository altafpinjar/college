<?php

require_once('connect.php');

?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student phone</th>
        <th>Student address</th>
    </tr>

<tbody>
    <?php
        $sql="select * from students";
        $res=mysqli_query($con,$sql);


        while($row=mysqli_fetch_array($res))
        {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["sname"]; ?></td>
                <td><?php echo $row["semail"]; ?></td>
                <td><?php echo $row["smobno"]; ?></td>
                <td><?php echo $row["saddress"]; ?></td>
                <td><a href="editstudent1.php?id=<?php echo $row["id"]; ?>">&nbsp;edit&nbsp;</a></td>
                <td><a href="">&nbsp;delete&nbsp;</a></td>

        </tr>
            <?php
        }
    ?>
</tbody></table>