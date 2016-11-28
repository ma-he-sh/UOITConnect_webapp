<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css"> </head>
<?php
include 'assets/php/dash.php';
if(!$_SESSION){printf("<script>location.href='signin.php'</script>");}
?>

    <body>
        <!--header-->
        <div class="dash-header-container">
            <div class="dash-header">
                <div class="dash-user-container">
                    <div class="dash-user-img-id"></div>
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
        <div class="dash-nav-wrapper">
            <div class="dash-nav-card max-card">
                <div class="dash-card transition">
                    <div class="dash-user-img"><i class="fa fa-upload fa-2x" aria-hidden="true"></i></div>
                    <div class="dash-name-txt"><b><?php  echo "Welcome $userName"; ?></b></div>
                    <div class="dash-more-info-txt"></div>
                    <div class="dash-more-info-txt">Currently You have: SOFE3700U</div>
                    <div class="dash-more-info-txt">Location: UA3450</div>
                </div>
            </div>
            <a href="user_addfrnd.php">
                <div class="dash-nav-card min-card">
                    <div class="dash-card transition">
                        <div class="dash-card-logo"><i class="fa fa-user-plus fa-3x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">Add Friends</div>
                    </div>
                </div>
            </a>
            <a href="user_schedule.html">
                <div class="dash-nav-card min-card">
                    <div class="dash-card transition">
                        <div class="dash-card-logo"><i class="fa fa-calendar fa-3x" aria-hidden="true"></i></div>

                        <div class="dash-card-text">Your Schedule</div>

                    </div>
                </div>
            </a>
            <a href="user_settings.html">
                <div class="dash-nav-card min-card">
                    <div class="dash-card transition">
                        <div class="dash-card-logo"><i class="fa fa-sliders fa-3x" aria-hidden="true"></i></div>

                        <div class="dash-card-text">Settings</div>

                    </div>
                </div>
            </a>
            <a href="about.html">
                <div class="dash-nav-card min-card">
                    <div class="dash-card transition">
                        <div class="dash-card-logo"><i class="fa fa-connectdevelop fa-3x" aria-hidden="true"></i></div>

                        <div class="dash-card-text">About</div>

                    </div>
                </div>
            </a>
        </div>
    </body>

</html>