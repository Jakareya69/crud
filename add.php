<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php 

                include 'config.php';

                $sql = "SELECT * FROM class";

                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_assoc($result)){

                    $name = $row['class_name'];
                    $id = $row['sid']
        
                ?>
          
          <option value="<?php echo $id?>"><?php echo $name?></option>
     <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" name="submit" />
    </form>
</div>
</div>
</body>
</html>

<?php 

    if(isset($_POST['submit'])){

    include 'config.php';

    $name = $_POST['sname'];
    $address = $_POST['saddress'];
    $class = $_POST['class'];
    $phone = $_POST['sphone'];


    $sql1 = "INSERT INTO student(Name,address,class,phone) VALUE ('{$name}','{$address}','{$class}','{$phone}')";

    $result = mysqli_query($conn,$sql1);

    if($result){
        header("Location:http://localhost/crud/index.php");
    };
   

    };

?>
