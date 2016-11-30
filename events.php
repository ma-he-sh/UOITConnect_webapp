<?php

include('assets/js/codebase/connector/scheduler_connector.php');//includes the file
 
$res=mysql_connect("localhost","root","");//connects to the server with our DB
mysql_select_db("uoitconnect");//connects to the DB.'sampleDB' is the DB's name

 
$res=mysql_connect("localhost","root","");
mysql_select_db("schedulerDB");
 
$calendar = new schedulerConnector($res);//connector initialization
$calendar->render_table("events","id","start_date","end_date","text");

?>