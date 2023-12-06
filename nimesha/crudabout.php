<?php
include('db/dbconnection.php');
// insert
if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $position = mysqli_real_escape_string($con,$_POST['position']);
    
    $sql = mysqli_query($con, "insert into team(name,position) values ('$name','$position')");

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
        <div class="row">
            <!-- view -->
            <div class="column">
                <table id="customers">
                    <tr>

                        <th style="font-family: cursive;background-color: darkblue">Name</th>
                        <th style="font-family: cursive;background-color: darkblue">Position</th>
                        <th style="font-family: cursive;background-color: darkblue">Action</th>
                    </tr>
 
                    <?php
                    $sqlsds = mysqli_query($con, "SELECT * from team");
                    while ($row = mysqli_fetch_array($sqlsds)) {
                        ?> 
                        <tr>
                            <td><?php echo $row['name'] ?></td>

                            <td><?php echo $row['position'] ?></td>


                            <td><a class="button button2" href="crudaboutupdate.php?a=<?php echo $row['id'] ?>">Update</a>
                                <a class="button button1" href="deleteabout.php?a=<?php echo $row['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>


                </table>


            </div>
            <!-- insert form -->
            <div class="column2">
                <div class="container">
                    <div class="row">
                        <h3 style="text-align: center ;text-decoration-line: underline">Add New Team Member</h3>
                    </div>
                    <form action="" method="post">
                        
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="name" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Position</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="position" name="position" placeholder="Position" required>
                            </div>
                        </div>
                        
                        <br>
                        <div class="row">
                            <input name="add" type="submit" value="Add New Team Member">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </body>
</html>


