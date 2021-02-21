<?php

include 'config.php';

$id = $_POST['sid'];

$name  = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['class'];
$phone = $_POST['sphone'];

$sql2 = "UPDATE student SET Name = '{$name}', address = '{$address}',class = '{$class}', phone ='{$phone}' WHERE id = '{$id}'";

$result2 = mysqli_query($conn,$sql2) or die("Query Unsuccessful");

header("Location:http://localhost/crud/index.php");

mysqli_close($conn);
?>