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
  
  echo "<b>Display list of location and related course</b>";
  #SQL command
  $sql1 = "SELECT DISTINCT location, ctitle
          FROM COURSE_DATA";
  
  echo "<table>";
  echo "<tr><th>Location</th><th>Course Title</th></tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){
      $location   = $row1['location'];
      $ctitle    = $row1['ctitle'];
      
      echo "<tr><td>$location</td><td>$ctitle</td>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>

</body>

</html>