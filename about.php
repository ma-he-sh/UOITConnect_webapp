<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css"> </head>
<?php
include 'assets/php/dash.php';
?>

    <body>
        <!--header-->
        <div class="dash-header-container">
            <div class="dash-header">
                <div class="dash-user-container">
                    <div class="dash-user-img-id"><?php echo $imageID; ?></div>
                    <div class="dash-user-name-txt">
                        <?php  echo $userName; ?>
                    </div>
                    <a href="assets/php/sign_out.php">
                        <div class="dash-user-signout red-color"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                    </a>
                </div>
            </div>
            <div class="dash-header-nav">
                <a href="dashb.php">
                    <div class="dash-nav-btn"> <i class="fa fa-th-large" aria-hidden="true"></i> </div>
                </a>
            </div>
        </div>
        <!--content-->
        <div class="about-section-wrapper">
            <div class="about-header-wrapper">UOITConnect</div>
            <div class="about-text">Stay connected with your friends</div>
            <div class="about-text"><br></div>
            <div class="about-text">Designed BY</div>
            <div class="about-text">RAJIV - MAHESH - ZHIHAN - MAAZ</div>
            <div class="about-text"><br></div>
          <div class="about-text"><a href="https://github.com/Mahesh-Ranaweera/SOFE3700project"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a></div>
        </div>
    </body>

</html>