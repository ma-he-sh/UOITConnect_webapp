<?php

include 'assets/php/session.php';
$uid =  $_SESSION['user_ID'];

include('assets/js/codebase/connector/scheduler_connector.php');//includes the file
 
$res=mysql_connect("localhost","root","");//connects to the server with our DB
mysql_select_db("uoitconnect");//connects to the DB.'sampleDB' is the DB's name



$conn = new schedulerConnector($res);//connector initialization

$conn->render_sql ("SELECT * from events WHERE user = ".$uid,"id","start_date,end_date,text,prof,location,crn,rec_type,event_pid,event_length");

#$conn->render_table("events","id","start_date,end_date,text,prof,location,crn,rec_type,event_pid,event_length");

?>