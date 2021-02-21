<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php

        if(isset($_POST['showbtn'])){

            include 'config.php';

            $id = $_POST['sid'];

            $sql = "SELECT * FROM student WHERE id = {$id}";
            $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");

            while($row = mysqli_fetch_assoc($result)){

                $id = $row['id'];
                $name = $row['Name'];
                $address = $row['address'];
                $class = $row['class'];
                $phone = $row['phone'];
    
    ?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $id?>" />
            <input type="text" name="sname" value="<?php echo $name?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $address?>"/>
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php
            $sql1 = "SELECT * FROM class";
            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result1) > 0)  {
              echo '<select name="class">';
              while($row1 = mysqli_fetch_assoc($result1)){
                if($row['class'] == $row1['sid']){
                  $select = "selected";
                }else{
                  $select = "";
                }
                echo  "<option {$select} value='{$row1['sid']}'>{$row1['class_name']}</option>";
              }
          echo "</select>";
        }
            ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $phone?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php 
        }

    }
    ?>
</div>
</div>
</body>
</html>
