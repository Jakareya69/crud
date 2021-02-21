<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>

    <?php 

        if(isset($_POST['deletebtn'])){

        include 'config.php';

        $user_is = $_POST['sid'];

        $sql = "DELETE FROM student WHERE id = $user_is";

        $result = mysqli_query($conn,$sql);

        header("Location:http://localhost/crud/index.php");

        };
    
    ?>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
