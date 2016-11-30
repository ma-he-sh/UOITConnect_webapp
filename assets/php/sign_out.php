<?php 
  #SignOut 
  include "db.php";
  session_start();
  if(session_destroy()){
    header("location: ../../index.html");
  }
?>