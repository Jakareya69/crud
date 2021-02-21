
<!--###### Created By Md Jakareya ########-->

<!-- Follow me on https://www.facebook.com/jakareya.ahmed.5015 -->

<!-- fuck you -->

<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php

        include 'config.php';

        $sql = "SELECT * FROM student JOIN class WHERE student.class = class.sid";

        $result = mysqli_query($conn, $sql) or die(' database not connected');

        if(mysqli_num_rows($result) > 0){

        
    
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result)){

                $id = $row['id'];
                $name = $row['Name'];
                $address = $row['address'];
                $class = $row['class_name'];
                $phone = $row['phone'];
            
        ?>
        <tbody>
            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $name?></td>
                <td><?php echo $address?></td>
                <td><?php echo $class?></td>
                <td><?php echo $phone?></td>
                <td>
                    <a href='edit.php?id=<?php echo $id;?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $id;?>'>Delete</a>
                </td>
            </tr>
        </tbody>
        <?php };?>
    </table>
    <?php }else{
        echo "You Don't have any data in your database";
    };?>
</div>
</div>
</body>
</html>
