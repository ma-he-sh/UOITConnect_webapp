<?php
  #DBconnect
  $dbhost = "localhost";
  $dbuser = "root";
  $dbase  = "frnd_db";
  $dbpass = "";
  $conn   = mysqli_connect($dbhost,$dbuser,$dbpass,$dbase) or die(db_conn_error());
?>