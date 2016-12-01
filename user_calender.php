<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/js/codebase/dhtmlxscheduler.css" type="text/css">
        <script src="assets/js/codebase/dhtmlxscheduler.js" type="text/javascript"></script>
        <script src="assets/js/codebase/ext/dhtmlxscheduler_readonly.js" type="text/javascript"></script>
        <script src="assets/js/codebase/ext/dhtmlxscheduler_recurring.js" type="text/javascript"></script>
        <script src="assets/js/action.js"></script>

        <style type="text/css" media="screen">
            html, body{
                margin:0px;
                padding:0px;
                height:100%;
                overflow:hidden;
            }   
        </style>
    </head>
    <?php
    include 'assets/php/dash.php';
    include 'assets/php/session.php';
    $uid = $_SESSION['user_ID'];
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
                    <div class="dash-user-signout red-color"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                </div>
            </div>
            <div class="dash-header-nav">
                
                <div id="dash-user-pop-box">
                    <div class="dash-header-for-box">
                        BOX Header
                    </div>
                    <div class="input-wrapper-for-box">
                        <label for="one">One:</label>
                        <input name="one" class="input-for-box" placeholder="Enter Something" type="text"/>
                    </div>
                    <div class="input-wrapper-for-box">
                        <label for="one">One:</label>
                        <input name="one" class="input-for-box" placeholder="Enter Something" type="text"/>
                    </div>
                    <input type="button" name="close" value="Close" id="close" style='width:100px;' onclick="close_form()"> </div>
                
                <a href="dashb.php">
                    <div class="dash-nav-btn"> <i class="fa fa-th-large" aria-hidden="true"></i> </div>
                </a>
                <div class="dash-nav-seperator"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                <a href="user_schedule.php">
                    <div class="dash-nav-txt-wrapper">Your Schedule</div>
                </a>
                <div class="dash-nav-seperator"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                <a href="user_calender.php">
                    <div class="dash-nav-txt-wrapper">Your Calender</div>
                </a>
            </div>
        </div>
        <!-- calender codes-->
        <div class="dash-calender-wrapper">

            <div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
                <div class="dhx_cal_navline">
                    <div class="dhx_cal_prev_button">&nbsp;</div>
                    <div class="dhx_cal_next_button">&nbsp;</div>
                    <div class="dhx_cal_today_button"></div>
                    <div class="dhx_cal_date"></div>
                    <div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
                    <div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
                    <div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
                </div>
                <div class="dhx_cal_header"></div>
                <div class="dhx_cal_data"></div>
            </div>
        </div>
        <script>
            scheduler.config.first_hour = 8;
            scheduler.config.last_hour = 22;
            scheduler.config.limit_time_select = true;
            scheduler.config.readonly_form = true;
            scheduler.config.select = false;
            scheduler.config.repeat_date = "%m/%d/%Y";
            scheduler.config.include_end_by = true;
            scheduler.config.hour_size_px = 60;
            scheduler.config.drag_resize= false;
            scheduler.config.dblclick_create = false;   

            scheduler.config.hour_date = "%h:%i %A";
            scheduler.attachEvent("onTemplatesReady", function () {
                scheduler.templates.event_text = function (start, end, event) {
                    return "<b>" + event.text + "</b><br><b>Location: </b><i>" + event.location + "</i><br><b>Professor: </b><i>" + event.prof + "</i>";
                }
            });
            scheduler.ignore_month = function (date) {
                if (date.getDay() == 6 || date.getDay() == 0) //hides Saturdays and Sundays
                    return true;
            };
            scheduler.ignore_week = function (date) {
                if (date.getDay() == 6 || date.getDay() == 0) //hides Saturdays and Sundays
                    return true;
            };
            scheduler.templates.event_header = function (start, end, ev) {
                return scheduler.templates.event_date(start) + " - " + scheduler.templates.event_date(end) + " - " + ev.crn;
            };
            scheduler.config.xml_date = "%Y-%m-%d %h:%i";
            scheduler.init('scheduler_here', new Date(), "week");
            scheduler.load("events.php");
            var dp = new dataProcessor("events.php");
            dp.init(scheduler);

            //var html = function(scheduler_here) { return document.getElementById(id); }; //just a helper

            var html = function(id) { return document.getElementById(id); }; //just a helper

            scheduler.showLightbox = function(id) {
                var ev = scheduler.getEvent(id);
                scheduler.startLightbox(id, html("dash-user-pop-box"));

                document.getElementById("course").textContent="newtext";
            };

            function close_form() {
                scheduler.endLightbox(false, html("dash-user-pop-box"));
            };

        </script>
    </body>


</html>