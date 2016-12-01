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

 <style>
    table{
    width: 100%;
      text-align: center;
    border-collapse: collapse;
  }
  table,
  th,
  td {
    border: 1px solid #eee;
    padding-top: 4px;
    padding-bottom: 4px;
  }
  </style>

<body>
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
                    <div class="dash-nav-btn"> <i class="fa fa-th-large" aria-hidden="true"></i> </div>
                </a>
            </div>
        </div>
  <!--header-->
  <div class="dash-view-box transition">
  <?php
  include 'assets/php/db.php';
  echo "<b>List of courses that Mahesh is registered in</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT * 
          FROM COURSE_DATA CD 
          WHERE CD.crn IN 
          (SELECT SC.crn 
            FROM STUD_COURSEINFO SC 
            WHERE SC.stud_id = 
            (
            SELECT S.stud_id 
            FROM STUDENTS S 
            WHERE stud_name = 'Mahesh'
            )
          )";
  
  echo "<table>";
  echo "<tr><th>cid</th><th>crn</th><th>ctitle</th><th>ccode</th><th>location</th><th>ctype</th><th>professor</th></tr>";

  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){ 
      $cid   = $row1['cid'];   
      $crn      = $row1['crn'];
      $ctitle   = $row1['ctitle'];
      $ccode    = $row1['ccode'];
      $location =$row1['location'];
      $ctype    = $row1['ctype'];
      $professor    = $row1['professor'];
      
      echo "<tr><th>$cid</th><th>$crn</th><th>$ctitle</th><th>$ccode</th><th>$location</th><th>$ctype</th><th>$professor</th></tr>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>
  </div>
</body>

</html>