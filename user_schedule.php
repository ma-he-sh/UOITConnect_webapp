<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/js/codebase/dhtmlxscheduler.css" type="text/css">
    <script src="assets/js/codebase/dhtmlxscheduler.js" type="text/javascript"></script>
</head>
<?php
    #if(!$_SESSION){printf("<script>location.href='signin.php'</script>");}
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
                <div class="dash-nav-seperator"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                <a href="user_schedule.php">
                    <div class="dash-nav-txt-wrapper">Courses</div>
                </a>
            </div>
        </div>
        <!--content-->
        <div class="dash-user-sch-wrapper">
            <div class="dash-sch-wrapper">
                <div class="dash-sch-header">Courses</div>
                <div class="dash-sch-term-wrapper">
                    <div class="dash-sch-header-txt">Add Courses</div>
                    <a href="user_calender.php">
                        <div class="dash-sch-header-btn season-btn transition" onclick="">View Your Calender <i class="fa fa-calendar" aria-hidden="true"></i></div>
                    </a>
                </div>
            </div>
            <!--user course inputs-->
            <div class="">
                <form action="assets/php/addcourse.php" method="post">
                    <div class="dash-sch-insert-card transition">
                        <div class="dash-flex-input-container">
                            <input type="number" class="dash-sch-input-txt" placeholder="| Enter Course CRN: Ex: 43511" name="course-id">
                        </div>
                        <div class="dash-sch-header-wrapper">
                            <!--<green-txt>Course submitted successfully</green-txt>-->
                        </div>
                    </div>
                    <div class="dash-course-add-wrap">
                        <button type="submit" name="courseSubmit" class="dash-submit-btn-wrap transition">SUBMIT</button>
                    </div>
                </form>
            </div>
            <!--display current enrolled courses-->
            <div class='dash-course-add-wrap'>
                <div class='dash-course-info-wrapper'>
                   <div class='dash-sch-header'>Courses currently enrolled in:</div>

                    <!-- display courses-->
                    <?php
                        echo $return_courses;
                    ?>

<!--
                    <div class='dash-course-tab-holder'>
                        <form action='' method='POST'>
                        <div class='dash-course-tab'>
                        Data
                        </div>
                        <div class='dash-course-tab-btn-wrapper'>
                            <button name='deleteCourse' class='dash-sch-frnd-remove'><i class='fa fa-times' aria-hidden='true'></i> DELETE</button>
                        </div>
                        </div>
                        </form>
                    </div>  -->
            </div>
      </div>
      <div class="notify-wrapper">
      <?php echo $return_msg; ?>
    </div>
    </body>
    <script src="assets/js/action.js"></script>

</html>