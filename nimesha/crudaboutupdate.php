<?php
include('db/dbconnection.php');
$id = $_GET['a'];
if(isset($id)){
if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $position = mysqli_real_escape_string($con,$_POST['position']);
    
    $sql = mysqli_query($con, "UPDATE team SET name='$name',position='$position' where id='$id'");

    if ($sql) {
        echo "<script>alert('Success');</script>";
    } else {

        echo "<script>alert('Invalid Details');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/crudabout.css">
    </head>
    <body>
        <div class="row">
            
                <h2 style="text-align: center;text-decoration-line: underline;text-decoration-style: solid;">Dashboard Our Team</h2>
                
        </div>
        <div class="row" >
            <div class="column3">
              
            </div>
            <div class="column2" >
                <a type="submit" href="crudabout.php" style="text-align: center;" class="button button2">Back Home</a>
                <div class="container">
                    <div class="row">
                        <h3 style="text-align: center">Update Team Member</h3>
                    </div>
                    <form action="" method="post">
                        <?php
                        
                    $sqlsds = mysqli_query($con, "SELECT * from team where id='$id'");
                    $row = mysqli_fetch_array($sqlsds);
                    if($row>0) {
                        ?> 
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="name" value="<?php echo $row['name'] ?>" name="name" placeholder="Name" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Position</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="position" value="<?php echo $row['position'] ?>" name="position" placeholder="Position" >
                            </div>
                        </div>
                    <?php } ?>
                        <br>
                        <div class="row">
                            <input name="add" type="submit" value="Update Team Member">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </body>
</html>
<?php }else{
    header('location:crudabout.php');
}
?>

