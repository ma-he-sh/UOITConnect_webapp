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
  <!--header-->
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
  
  
  <div class="dash-view-box transition">
      <?php
      include 'assets/php/db.php';
      echo "<b>Displaying student name, course code, course title and type (laboratory, lecture and tutorial session) of the student who are at least enrol in one crn.</b>";

      $post_disp = '';

      #SQL command
      $sql1 = "SELECT DISTINCT S.stud_name, CD.ccode, CD.ctitle, CD.ctype
              FROM STUDENTS AS S
              JOIN STUD_COURSEINFO AS SC ON S.stud_id = SC.stud_id
              JOIN COURSE_DATA AS CD ON SC.crn = CD.crn
              ORDER BY S.stud_name";

      echo "<table>";
      echo "<tr><th>Student Name</th><th>Course Title</th><th>Course Code</th><th>Course Type</th>";

      $retval1 = mysqli_query($conn, $sql1);
      while($row1 = mysqli_fetch_array($retval1)){    
          $stud_name      = $row1['stud_name'];
          $ctitle   = $row1['ctitle'];
          $ccode    = $row1['ccode'];
          $ctype    = $row1['ctype'];

          echo "<tr><td>$stud_name</td><td>$ctitle</td><td>$ccode</td><td>$ctype</td>";  
      }

      echo '</table>';

      mysqli_close($conn);
    ?>
  </div>
</body>

</html>