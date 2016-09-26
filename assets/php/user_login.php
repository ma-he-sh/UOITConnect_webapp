<?php
  #user login action
  include 'db.php';

  #USER LOGIN
  if(isset($_POST['btn_signin_submit'])){
    $sql    = "SELECT * FROM `stud_login`";
    $retval = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($retval)){
      if ($row['stud_id'] == $_POST['str_ID'] && $row['passw1'] == md5($_POST['str_passw1'])){

          $_SESSION['user_ID']   = $row['stud_id'];
          $_SESSION['user_name'] = $row['stud_name'];

          header("location: dashb.html");
      }
    }
  }

  #USER REGISTER
  if(isset($_POST['btn_reg_submit'])){
    $strID    = $_POST['str_reg_ID']; 
    $strEmail = strtolower($_POST['str_reg_email']);  
    $strName  = $_POST['str_reg_name'];    
    $strStudyf= $_POST['str_reg_studyf'];    

    $strPassw1 = md5($_POST['str_reg_passw1']); #Password1
    $strPassw2 = md5($_POST['str_reg_passw2']); #Password2

    if ($strPassw1 == $strPassw2){

        #INSERT DATA INTO THE DB
        $sql1 = "INSERT INTO `stud_login`(`stud_id`, `stud_email`, `stud_name`, `stud_field`, `passw1`, `passw2`) VALUES ('".$strID."','".$strEmail."','".$strName."','".$strStudyf."','".$strPassw1."','".$strPassw2."')";

        $retval1 = mysqli_query($conn, $sql1);

        if (!$retval1){
        #ERROR REPORT
          #regError();
        }
        else{
          #WELCOME REPORT
          #regSuccess();
        }
    }
    mysqli_close($conn);
  }
?>