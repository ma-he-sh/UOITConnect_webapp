<?php
  #DBconnect
  $dbhost = "localhost";
  $dbuser = "root";
  $dbase  = "uoitconnect";
  $dbpass = "";
  $conn   = mysqli_connect($dbhost,$dbuser,$dbpass,$dbase) or die(db_conn_error());
?>