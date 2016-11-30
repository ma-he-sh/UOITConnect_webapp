<?php
  #user login action
  include 'db.php';
  include 'validate.php';
  $return_msg = '';

  #USER LOGIN
  if(isset($_POST['btn_signin_submit'])){
    $sql    = "SELECT * FROM `students`";
    $retval = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($retval)){
      if ($row['stud_id'] == $_POST['str_ID'] && $row['passw1'] == md5($_POST['str_passw1'])){

          $_SESSION['user_ID']   = $row['stud_id'];
          $_SESSION['user_name'] = $row['stud_name'];
          #setcookie("uid", $row['stud_id'], time()+3600 , '/' );

          header("location: dashb.php");
      }
      else {
        $return_msg = error_msg('User Signin Error');
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


    #Send input login info for validation
    /*
    function validation(){
      if(valid_stud_ID($_POST['str_reg_ID']) && valid_email(strtolower($_POST['str_reg_email'])) && valid_stud_name($_POST['str_reg_name']) && valid_password($_POST['str_reg_passw1']) && valid_password($_POST['str_reg_passw2'])){
        $strID    = $_POST['str_reg_ID']; 
        $strEmail = strtolower($_POST['str_reg_email']);  
        $strName  = $_POST['str_reg_name'];    
        $strStudyf= $_POST['str_reg_studyf'];    

        $strPassw1 = md5($_POST['str_reg_passw1']); #Password1
        $strPassw2 = md5($_POST['str_reg_passw2']); #Password2
        
        return TRUE;
      }
      else{
        return FALSE;
      }
    }*/

    if ($strPassw1 == $strPassw2){

        #INSERT DATA INTO THE DB
        $sql1 = "INSERT INTO `students`(`stud_id`, `stud_email`, `stud_name`, `stud_field`, `passw1`, `passw2`) VALUES ('".$strID."','".$strEmail."','".$strName."','".$strStudyf."','".$strPassw1."','".$strPassw2."')";

        $retval1 = mysqli_query($conn, $sql1);

        if (!$retval1){
        #ERROR REPORT
          $return_msg = error_msg('User Register Error');
        }
        else{
          #WELCOME REPORT
          $return_msg = good_msg('User Register Successful');
        }
    }
    else{
      $return_msg = error_msg('Passwords not matched');
    }
    mysqli_close($conn);
  }


  function error_msg($msg_txt){
    return '<red-txt><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ERROR: '.$msg_txt.'</red-txt>';
  }

  function good_msg($msg_txt){
    return '<green-txt><i class="fa fa-check" aria-hidden="true"></i>'.$msg_txt.'</green-txt>';
  }
?>