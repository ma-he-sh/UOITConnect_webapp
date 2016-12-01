<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

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
  <div class="dash-view-box transition">
  <?php
  include 'assets/php/db.php';
  
  echo "<b>Displaying a list of proffessors and courses</b>";
  #SQL command
  $sql1 = "SELECT DISTINCT ccode, ctitle, professor
          FROM COURSE_DATA";
  
  echo "<table>";
  echo "<tr><th>Course Title</th><th>Course Code</th><th>Course Professor</th></tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){
      $ctitle   = $row1['ctitle'];
      $ccode    = $row1['ccode'];
      $professor    = $row1['professor'];
      
      echo "<tr><td>$ctitle</td><td>$ccode</td><td>$professor</td>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>
  </div>

</body>

</html>