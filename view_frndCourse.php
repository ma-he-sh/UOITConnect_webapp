<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<?php
  include 'assets/php/dash.php';
?>

    <body onload="onloadAction()">
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
                    <div class="dash-nav-btn">
                        <i class="fa fa-th-large" aria-hidden="true"></i>
                    </div>
                </a>
                <div class="dash-nav-seperator">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
                <a href="user_addfrnd.php">
                    <div class="dash-nav-txt-wrapper">Friends</div>
                </a>
            </div>
        </div>

        <!--content-->
        <div class="dash-user-sch-wrapper" id="insertDIV">
            <div class="dash-sch-wrapper">
                <div class="dash-sch-header">Course Info</div>
            </div>

            <!--display frnd course informations-->
            <div class="dash-sch-card-holder">

                <?php 
                        if($_GET){
                            $retriveID = $_GET['frndID'];
                            
                            #$sql = "SELECT * FROM stud_courseinfo INNER JOIN course_data WHERE stud_id = $retriveID";
                            $sql = "SELECT *
                                    FROM course_data AS CD
                                    JOIN stud_courseinfo AS SC
                                    WHERE SC.stud_id = $retriveID
                                    AND SC.crn = CD.crn
                                    ORDER BY CD.crn";
                            
                            $retval = mysqli_query($conn, $sql);
                            
                            while($row=mysqli_fetch_array($retval))
                            {
                                //Only display lecture
                                if($row['ctype'] == 'Lecture'){
                                    $display = displayCourse($row['crn'], $row['ctitle'], $row['ccode'],$row['section'],$row['location'], $row['stime'], $row['etime'],$row['day'], $row['ctype'],$row['professor']); 
                                    echo $display;
                                }
                            }
                        }
                        else{
                            echo 'DOne';
                        }
                        function displayCourse($strCRN, $strCTITLE, $strCCODE, $strSEC, $strLOC, $strSTIME, $strETIME, $strDAY, $strCTYPE, $strPROFF){
                            $courseD = "<div class='dash-sch-insert-card transition'>
                                            <div class='dash-sch-course-display-card'>
                                                <div class='dash-course-header'>$strCCODE : $strCTITLE</div>
                                                <div class='dash-course-content full-card'>Professor: $strPROFF</div>
                                                <div class='dash-course-content full-card'>Location: $strLOC</div>
                                            </div>
                                        </div>";
                            return $courseD;
                        }
                    ?>
                    <!--
                    <div class='dash-sch-insert-card transition'>
                        <div class='dash-sch-course-display-card'>
                            <div class='dash-course-header'>Ccode : </div>
                            <div class='dash-course-content half-card'>Location</div>
                            <div class='dash-course-content half-card'>Location</div>
                            <div class='dash-course-content full-card'>Location</div>
                        </div>
                    </div>-->

            </div>
        </div>

        <div class="notify-wrapper">
            <?php echo $return_msg; ?>
        </div>
    </body>
    <script src="assets/js/action.js"></script>

</html>