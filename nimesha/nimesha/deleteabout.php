<?php

include('db/dbconnection.php');
$id = $_GET['a'];
$sqll = mysqli_query($con, "DELETE FROM team WHERE id='$id'");
if ($sqll) {
    echo "<script>alert('Successful');</script>";
    header('location:crudabout.php');
} else {
    echo "<script>alert('Invalid Details');</script>";
    header('location:crudabout.php');
}
?>

