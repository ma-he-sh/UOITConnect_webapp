<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

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

</body>

</html>