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
  echo "<b>Displaying student name, course code, course title and type (laboratory, lecture and tutorial session) of the student who are at least enrol in one crn.</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT S.stud_name, CD.ccode, CD.ctitle, CD.ctype
          FROM STUDENTS AS S
          JOIN STUD_COURSEINFO AS SC ON S.stud_id = SC.stud_id
          JOIN COURSE_DATA AS CD ON SC.crn = CD.crn";
  
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

</body>

</html>