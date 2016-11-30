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
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>

<body>
  <!--header-->
  <?php
  include 'assets/php/db.php';
  echo "<b>List of courses that Tim Bernar is registered in</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT * FROM COURSE_DATA CD WHERE CD.crn = 
          (SELECT SC.crn FROM STUD_COURSEINFO SC WHERE SC.stud_id = (
          SELECT S.stud_id FROM STUDENTS S WHERE stud_name = 'Tim Bernar'))";
  
  echo "<table>";
  echo "<tr><th>cid</th><th>crn</th><th>ctitle</th><th>ccode</th><th>section</th><th>week</th><th>stime</th><th>etime</th><th>day</th><th>location</th><th>sdate</th><th>edate</th><th>ctype</th><th>professor</th></tr>";

  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){ 
      $cid   = $row1['cid'];   
      $crn      = $row1['crn'];
      $ctitle   = $row1['ctitle'];
      $ccode    = $row1['ccode'];
      $section   = $row1['section'];
      $week   = $row1['week'];
      $stime   = $row1['stime'];
      $etime   = $row1['etime'];
      $day   = $row1['day'];
      $location =$row1['location'];
      $sdate =$row1['sdate'];
      $edate =$row1['edate'];
      $ctype    = $row1['ctype'];
      $professor    = $row1['professor'];
      
      echo "<tr><th>$cid</th><th>$crn</th><th>$ctitle</th><th>$ccode</th><th>$section</th><th>$week</th><th>$stime</th><th>$etime</th><th>$day</th><th>$location</th><th>$sdate</th><th>$edate</th><th>$ctype</th><th>$professor</th></tr>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>

</body>

</html>