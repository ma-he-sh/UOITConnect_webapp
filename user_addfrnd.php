<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<?php
  include 'assets/php/dash.php';
  if(!$_SESSION){printf("<script>location.href='signin.php'</script>");}
?>

    <body onload="onloadAction()">
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
                <div class="dash-frnd-header" onclick="displayFrnds()"><i class="fa fa-users" aria-hidden="true"></i> Friends</div>
                <div class="dash-frnd-header" onclick="displayAddF()"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Friend</div>
                <div class="dash-frnd-search-wrapper" id="disp_frnd_search">
                    <form action="" method="post">
                        <div class="dash-flex-input-container">
                            <input type="text" class="dash-search-input" placeholder="Enter Name | Email | Field >>" name="strSearchUser">
                            <button type="submit" name="strSearchSubmit" class="dash-search-btn">
                                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dash-sch-card-holder">

                <div class="dash-frnds-add-wrapper" id="frndsadd-wrapper">
                    <!--user frnd display-->
                    <?php echo $SearchFrndResult; ?>
                </div>
                <!--user frnd display-->
                <div class="dash-friends-wrapper" id="friends-wrapper">
                    <?php echo $return_frnds; ?>

                        <!--<div class="dash-sch-insert-card transition">
                            <div class="dash-search-card-wrapper">
                                <div class="dash-sch-frnd-display-card">
                                    <div class="dash-sch-frnd-img"></div>
                                    <div class="dash-sch-frnd-info-wrapper">
                                        <div class="dash-sch-frnd-main-txt">
                                            Mahesh Rnawda adsad adsa sd asd a ds as da s asdad asda sd ada sd adsas asd a sd asd asda
                                        </div>
                                        <div class="dash-sch-frnd-sec-txt">
                                            Info goes here
                                        </div>
                                    </div>
                                </div>
                                <div class="dash-sch-frnd-addrem-block">
                                    <form action="" method="post">
                                        <input type="hidden" value="" />
                                        <button type="submit" name="CourseData" class="dash-sch-frnd-course">Course Info</button>
                                        <button type="submit" name="submitUserADD" class="dash-sch-frnd-add"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button>
                                        <button type="submit" name="submitUsetREM" class="dash-sch-frnd-remove"><i class="fa fa-times" aria-hidden="true"></i> REMOVE</button>
                                    </form>
                                </div>
                            </div>
                </div>-->
                </div>


                <!--
                    <div class="dash-sch-insert-card transition">
                        <div class="dash-search-card-wrapper">
                            <div class="dash-sch-frnd-display-card">
                                <div class="dash-sch-frnd-img"></div>
                                <div class="dash-sch-frnd-info-wrapper">
                                    <div class="dash-sch-frnd-main-txt">
                                        Mahesh Rnawda adsad adsa sd asd a ds as da s asdad asda sd ada sd adsas asd a sd asd asda
                                    </div>
                                    <div class="dash-sch-frnd-sec-txt">
                                        Info goes here
                                    </div>
                                </div>
                            </div>
                            <div class="dash-sch-frnd-addrem-block">
                                <form action="" method="post" <input type="hidden" value="" />
                                <button type="submit" name="submitUserADD" class="dash-sch-frnd-add"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button>
                                <button type="submit" name="submitUsetREM" class="dash-sch-frnd-remove"><i class="fa fa-times" aria-hidden="true"></i> REMOVE</button>
                                </form>
                            </div>
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