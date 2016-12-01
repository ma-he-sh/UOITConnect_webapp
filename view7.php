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
  
  echo "<b>Display list of location and related courses</b>";
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
  </div>
</body>

</html>