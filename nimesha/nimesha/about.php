<?php
session_start();
error_reporting(0);
include('db/dbconnection.php');
$_SESSION['login'] = 1100;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/about.css">

    </head>
    <body>
        <?php
        include('header.php');
        ?>
        <div class="row">
            
        <div class="card" >
                    <h2 style="text-align: center;text-decoration-line: underline;text-decoration-style: solid;padding-bottom: 20px;">About As</h2>

                    <p style="text-align:center">Emerging Star is a fully recognized member nationally and internationally.<br>
                        Launched in 1999, our concerts include internationally recognized professional judges.<br>
                        kasun kalhara, bathiya and Santhosh, umariya sinhawansha, shashika nisansala will represent the panel this time.<br>
         The inclusion of such outstanding judges is a measure of the high artistic quality of the events.  Every year for many years, it produces a talented musician who can present his talents to competitors, regardless of age.</p>
                </div>
            <div class="rightcolumn">
                <div class="card" style="height: 180px">
                    <h2 style="text-align: center;text-decoration-line: underline;text-decoration-style: solid;padding-bottom: 20px;">Mission</h2>

                    <p style="text-align:center">To Welcome and Encourage people of all ages to              
                 Strive for excellence in singing,   <br>                   
                 Inspire one another,                         
                Nurture meaningful friendships, and        <br>                      
                Give communities exceptional vocal performances.</p>
                </div>

            </div>
            <div class="rightcolumn">
                <div class="card"  style="height: 100px">
                    <h2 style="text-align: center;text-decoration-line: underline;text-decoration-style: solid;padding-bottom: 20px;">Vision</h2>

                    <p style="text-align:center">To be the premier membership organization for people who love to sing.<br>
            World-class performances, sustained by  people with a passion for singing.</p>
                </div>

            </div>
            </div>
        <div class="row">
            <div class="rightcolumn">
                <div class="card"  style="height: 200px">
                    <h2 style="text-align: center;text-decoration-line: underline;text-decoration-style: solid;padding-bottom: 20px;">Purpose</h2>

                    <p style="text-align:center">To find talent any singers and help them get started in careers where they can become professional ,or become a star.</p>
                </div>
                

            </div>
            <div class="leftcolumn">
                <div class="card" style="align-content: center;text-align: center">
                    <h2 style="text-align: center;text-decoration-line: underline;text-decoration-style: solid;padding-bottom: 20px">Our Team</h2>
                    <?php
                    $sqlsds = mysqli_query($con, "SELECT * from team");
                    while ($row = mysqli_fetch_array($sqlsds)) {
                        ?> 
                        <div class="vote">

                            <a>
                                <img src="img/user.png" alt="Cinque Terre" width="100%">
                            </a>
                            <div class="desc" style="padding-bottom: 10px"><b><?php echo $row['name'] ; ?></b></div>
                            
                                <a class="button button2"><?php echo $row['position'] ; ?></a>
                           
                              
                   
                        </div>
                    <?php } ?>




                </div>


            </div>
            
        </div>
        <div style="padding-top: 20px"></div>
        
        <?php
        include('footer.php');
        ?>

        <script>
            function myFunction() {
                alert("Please Login first");
            }
        </script>
    </body>
</html>