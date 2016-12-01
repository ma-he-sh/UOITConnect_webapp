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
                        <div class="dash-card-text">Friends</div>
                    </div>
                </div>
            </a>
            <a href="user_schedule.php">
                <div class="dash-nav-card min-card">
                    <div class="dash-card transition">
                        <div class="dash-card-logo"><i class="fa fa-book fa-3x" aria-hidden="true"></i></div>

                        <div class="dash-card-text">Courses</div>

                    </div>
                </div>
            </a>
            <a href="user_calender.php">
                <div class="dash-nav-card min-card">
                    <div class="dash-card transition">
                        <div class="dash-card-logo"><i class="fa fa-calendar fa-3x" aria-hidden="true"></i></div>

                        <div class="dash-card-text">View Calendar</div>

                    </div>
                </div>
            </a>
            <a href="about.php">
                <div class="dash-nav-card min-card">
                    <div class="dash-card transition">
                        <div class="dash-card-logo"><i class="fa fa-connectdevelop fa-3x" aria-hidden="true"></i></div>

                        <div class="dash-card-text">About</div>

                    </div>
                </div>
            </a>
            <a href="view1.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View1</div>
                    </div>
                </div>
            </a>
            <a href="view2.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View2</div>
                    </div>
                </div>
            </a>
            <a href="view3.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View3</div>
                    </div>
                </div>
            </a>
            <a href="view4.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View4</div>
                    </div>
                </div>
            </a>
            <a href="view5.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View5</div>
                    </div>
                </div>
            </a>
            <a href="view6.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View6</div>
                    </div>
                </div>
            </a>
            <a href="view7.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View7</div>
                    </div>
                </div>
            </a>
            <a href="view8.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View8</div>
                    </div>
                </div>
            </a>
            <a href="view9.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View9</div>
                    </div>
                </div>
            </a>
            <a href="view10.php">
                <div class="dash-nav-card micro-card">
                    <div class="dash-card-min transition">
                        <div class="dash-card-logo-min"><i class="fa fa-connectdevelop fa-x" aria-hidden="true"></i></div>
                        <div class="dash-card-text">View10</div>
                    </div>
                </div>
            </a>
        </div>
    </body>

</html>