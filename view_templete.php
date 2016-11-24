<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
  <!--header-->
  <?php
  include 'assets/db.php';
  
  $crn = "43509";
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT * FROM course_data ORDER BY `crn` DESC";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){

    if ($row1['crn'] == $crn){
     
      $crn      = $row1['post_id'];
      $ctitle   = $row1['post_date'];
      $ccode    = $row1[''];
      $location = stripslashes($row1['post-content']);
      #$strUserImgUrl   = stripslashes($row1['post_user_img_url']);
      $sdate = $row1['creator_name'];
      
      
      echo $post_info;
    }
  }
  mysqli_close($conn);
?>

</body>

</html>