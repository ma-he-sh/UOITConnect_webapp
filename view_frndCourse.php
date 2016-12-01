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
                <div class="dash-nav-seperator">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
                <a href="<?php $_GET['frndID']; ?>">
                    <div class="dash-nav-txt-wrapper">Course Info</div>
                </a>
            </div>
        </div>

        <!--content-->
        <div class="dash-user-sch-wrapper" id="insertDIV">
            <div class="dash-sch-wrapper">
                <div class="dash-sch-header">
                    <?php echo $_GET['frndName'].'\'s'; ?> Courses</div>
            </div>

            <!--display frnd course informations-->
            <div class="dash-sch-card-holder">

                <?php 
                        if($_GET){
                            $retriveID = $_GET['frndID'];
                            
                            $sql = "SELECT *
                                    FROM course_data AS CD
                                    JOIN stud_courseinfo AS SC
                                    WHERE SC.stud_id = $retriveID
                                    AND SC.crn = CD.crn
                                    ORDER BY CD.crn";
                            
                            $retval = mysqli_query($conn, $sql);
                            
                            $id = 0;
                            while($row=mysqli_fetch_array($retval))
                            {
                                //Only display lecture
                                #if($row['ctype'] == 'Lecture'){
                                    $display = displayCourse($row['crn'], $row['ctitle'], $row['ccode'],$row['section'],$row['location'], $row['stime'], $row['etime'],$row['day'], $row['ctype'],$row['professor'], $id); 
                                    echo $display;
                                #}
                                $id += 1;
                            }
                        }
                
                        function displayCourse($strCRN, $strCTITLE, $strCCODE, $strSEC, $strLOC, $strSTIME, $strETIME, $strDAY, $strCTYPE, $strPROFF, $id){
                            $idshow = '"'.$id.'"';
                            $courseD = "<div class='dash-sch-insert-card transition'>
                                            <div class='dash-sch-course-display-card'>
                                                <div class='dash-course-header'>$strCCODE : $strCTITLE : $strCTYPE</div>
                                                <div class='dash-course-content full-card'>Professor: $strPROFF</div>
                                            </div>
                                            <div class='dash-course-more-btn transition' id='".$idshow."' onclick='more($idshow)'><i class='fa fa-sort-desc' aria-hidden='true'></i></div>
                                            <div class='dash-course-more-info' id=".$idshow.">
                                                <div class='dash-course-content full-card'>Location: $strLOC</div>
                                                <div class='dash-course-content full-card'>Section : $strSEC</div>
                                                <div class='dash-course-content full-card'>Date    : $strDAY</div>
                                                <div class='dash-course-content half-card'>Start Time:  $strSTIME</div>
                                                <div class='dash-course-content half-card'>End Time  :  $strETIME</div>
                                                <div class='dash-course-less-btn transition' onclick='less($idshow)'><i class='fa fa-caret-up' aria-hidden='true'></i></div>
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
                        <div class='dash-course-more-btn transition' id='' onclick='more("more2")'><i class='fa fa-sort-desc' aria-hidden='true'></i></div>
                        <div class='dash-course-more-info' id="more2">
                            <div class='dash-course-content half-card'>Location</div>
                            <div class='dash-course-content half-card'>Location</div>
                            <div class='dash-course-content full-card'>Location</div>
                            <div class='dash-course-less-btn transition' onclick='less("more2")'><i class='fa fa-caret-up' aria-hidden='true'></i></div>
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